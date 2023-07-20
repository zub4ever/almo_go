<?php

namespace App\Http\Controllers\CartChekout;

use App\Http\Controllers\Controller;

use Faker\Provider\Image;
use Illuminate\Http\Request;


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
        // Obtenha as imagens enviadas via formulário ou qualquer outra fonte
        $image1 = $request->file('image1');
        $image2 = $request->file('image2');

        // Salve as imagens temporariamente no servidor
        $path1 = $image1->store('temp');
        $path2 = $image2->store('temp');

        // Carregue as imagens usando a biblioteca intervention/image
        $img1 = Image::make($path1);
        $img2 = Image::make($path2);

        // Compare as duas imagens (usando a diferença média de cores como exemplo)
        $difference = $this->calculateImageDifference($img1, $img2);

        // Deletar as imagens temporárias após a comparação
        unlink(public_path($path1));
        unlink(public_path($path2));

        // Retorne a diferença calculada
        return response()->json([
            'difference' => $difference,
        ]);
    }

    private function calculateImageDifference($img1, $img2)
    {
        // A diferença pode ser calculada de várias maneiras, dependendo dos requisitos
        // Aqui, vamos calcular a diferença média de cores entre as duas imagens

        $diffTotal = 0;
        $width = $img1->width();
        $height = $img1->height();

        // Percorra todos os pixels das duas imagens e calcule a diferença
        for ($x = 0; $x < $width; $x++) {
            for ($y = 0; $y < $height; $y++) {
                $pixel1 = $img1->pickColor($x, $y, 'array');
                $pixel2 = $img2->pickColor($x, $y, 'array');

                $diffTotal += abs($pixel1[0] - $pixel2[0]) + abs($pixel1[1] - $pixel2[1]) + abs($pixel1[2] - $pixel2[2]);
            }
        }

        // Calcule a diferença média
        $difference = $diffTotal / ($width * $height);

        return $difference;
    }
}
