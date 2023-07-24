<?php

namespace App\Http\Controllers\CartChekout;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Intervention\Image\Image;
use Google\Cloud\Vision\V1\Gapic\ImageAnnotatorGapicClient;
use Google\Cloud\Vision\V1\Client\ImageAnnotatorClient;
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

        $sourceImage = $request->input('source_image');
        $targetImage = $request->input('target_image');

        $client = new ImageAnnotatorClient([
            'projectId' => 'theta-camera-393814',
            'region' => 'us-central1',
            'client_id' => '1018789608858-vu72vb6hidvf4fr4jmadvkvfp6bs5pml.apps.googleusercontent.com',
            'client_secret' => file_get_contents('js/client_secret.json'),
        ]);

        $sourceImage = file_get_contents($sourceImage);
        $targetImage = file_get_contents($targetImage);

        $result = $client->compareFaces([
            'sourceImage' => $sourceImage,
            'targetImage' => $targetImage,
        ]);

        $similarity = $result->getSimilarity();

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
    }





}
