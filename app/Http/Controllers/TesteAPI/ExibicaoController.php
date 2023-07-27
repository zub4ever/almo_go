<?php

namespace App\Http\Controllers\TesteAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\NovaLeituraEvent;

class ExibicaoController extends Controller
{
    public function receberLeituras(Request $request)
    {
        // Recebe os dados passados como parâmetro na rota e armazena na variável $response
        $response = $request->session()->get('response');

        // Aqui você pode processar os dados recebidos e passá-los para a view da forma que desejar
        // Por exemplo, você pode passar a variável $response para a view e exibi-la lá

        return view('nome_da_sua_view', ['response' => $response]);
    }

}
