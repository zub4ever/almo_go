<?php

namespace App\Http\Controllers\CartChekout;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Image;
use Google\Cloud\Vision\V1\Gapic\ImageAnnotatorGapicClient;
use Google\Cloud\Vision\V1\Client\ImageAnnotatorClient;
use Aws\Rekognition\RekognitionClient;
use Illuminate\Support\Facades\Auth;


class CartCheckoutController extends Controller
{
    public function welcome()
    {

        return view("cartCheckout.welcome");
    }

    public function create()
    {

        return view("cartCheckout.create");
    }

    public function checkout()
    {


        return view("cartCheckout.checkout");
    }


    public function check(Request $request)
    {

        $user = Auth::user();

        $avatarPath = public_path($user->avatar); // Supondo que o campo 'avatar' contém o caminho da imagem relativo a 'public/images/1689193425.png'

        // Ler o conteúdo da imagem do arquivo no caminho especificado
        $sourceImageBytes = file_get_contents($avatarPath);




        $targetImage = $request->file('target_image');




        //dd($sourceImageBytes);
        if ($targetImage === null) {
            return response()->json(['error' => 'SourceImage or TargetImage is null'], 400);
        }

        $client = new RekognitionClient([
            'version' => 'latest',
            'region' => env('AWS_REGION'),
            'credentials' => [
                'key' => env('AWS_ACCESS_KEY_ID'),
                'secret' => env('AWS_SECRET_ACCESS_KEY'),
            ],
        ]);

        $params = [
            'QualityFilter' => 'AUTO',
            'SourceImage' => [
                'Bytes' => $sourceImageBytes,
            ],
            'TargetImage' => [
                'Bytes' => file_get_contents($targetImage->path()),
            ],
            'SimilarityThreshold' => 0,
        ];

        try {
            $result = $client->compareFaces($params);

            return response()->json($result['FaceMatches']);
        } catch (\Exception $e) {
            // Lidar com qualquer erro que possa ocorrer
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }




}
