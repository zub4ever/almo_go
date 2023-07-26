<?php

// ExibicaoController.php

use Illuminate\Http\Request;

class ExibicaoController extends Controller
{
    public function exibir($data)
    {
        // Aqui você pode fazer o que for necessário com os dados antes de exibi-los na view

        // Exibir a view passando os dados como parâmetro
        return view('nome_da_sua_view', ['data' => $data]);
    }
}
