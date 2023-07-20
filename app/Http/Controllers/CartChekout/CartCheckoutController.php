<?php

namespace App\Http\Controllers\CartChekout;

use App\Http\Controllers\Controller;
use Aws\Sts\StsClient;
use Illuminate\Http\Request;
use Aws\Rekognition\RekognitionClient;

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

        // Obtenha as credenciais temporárias
        $stsClient = new StsClient([
            'region' => 'us-east-1',
            'credentials' => [
                'access_key_id' => env('AWS_ACCESS_KEY_ID'),
                'secret_access_key' => env('AWS_SECRET_ACCESS_KEY'),
            ],
            'version' => '2011-06-15',
        ]);

        $resultado = $stsClient->getSessionToken();

        // Crie um cliente Rekognition usando as credenciais temporárias
        $client = new RekognitionClient([
            'region' => 'us-east-1',
            'credentials' => [
                'key' => $resultado['Credentials']['AccessKeyId'],
                'secret' => $resultado['Credentials']['SecretAccessKey'],
                'token' => $resultado['Credentials']['SessionToken'],
            ],
            'version' => 'latest'
        ]);

// Carregue as duas imagens
        $image1 = fopen('image1.jpg', 'rb');
        $image2 = fopen('image2.jpg', 'rb');

// Compare as duas imagens
        $response = $client->compareFaces([
            'Image1' => $image1,
            'Image2' => $image2,
            'SimilarityThreshold' => 70,
        ]);

// Imprima a pontuação de semelhança
        dd($response['SimilarityScore']);
    }



}
