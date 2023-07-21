<?php

namespace App\Http\Controllers\CartChekout;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Intervention\Image\Image;

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
        $sourceImageUrl = $request->input('source_image_url');
        $targetImageUrl = $request->input('target_image_url');

        $sourceImage = [
            'S3Object' => [
                'Bucket' => 'rekognition-console-v4-prod-cmh',
                'Name' => 'assets/StaticImageAssets/SampleImages/source3.jpg',
            ],
        ];

        $targetImage = [
            'S3Object' => [
                'Bucket' => 'rekognition-console-v4-prod-cmh',
                'Name' => 'assets/StaticImageAssets/SampleImages/target3.jpg',
            ],
        ];

        $client = new \Aws\Rekognition\RekognitionClient([
            'region' => 'us-east-1',
            'credentials' => [
                'key' => env('AWS_ACCESS_KEY_ID'),
                'secret' => env('AWS_SECRET_ACCESS_KEY'),
            ],
            'version' => 'latest',
        ]);

        $response = $client->compareFaces([
            'SourceImage' => $sourceImage,
            'TargetImage' => $targetImage,
            'SimilarityThreshold' => 0.5,
        ]);

        if ($response['ResponseMetadata']['HTTPStatusCode'] == 200) {
            $results = json_decode($response->getBody(), true);

            $similarity = $results['Similarity'];

            if ($similarity >= 0.5) {
                return response()->json([
                    'similarity' => $similarity,
                    'message' => 'As imagens são semelhantes.',
                ]);
            } else {
                return response()->json([
                    'similarity' => $similarity,
                    'message' => 'As imagens não são semelhantes.',
                ]);
            }
        } else {
            Log::error('Erro ao comparar imagens.');
            return abort(400, 'Erro ao comparar imagens.');
        }
    }


}
