<?php


namespace App\Http\Controllers\TesteAPI;

use App\Events\NovaLeituraEvent;
use App\Models\RfidLeitura;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\TesteAPI\ExibicaoController;
use App\Models\Produtos\Produtos;

class RetornoJSON extends Controller
{

    public function retorno(Request $request)
    {
        try {
            // Decodifica o JSON recebido para um array associativo
            $dados = json_decode($request->getContent(), true);

            // Verifica se o campo 'reading_epc_hex' está presente nos dados recebidos
            if (isset($dados)) {
                $response = [];

                foreach ($dados as $leitura) {
                    if (isset($leitura['reading_epc_hex'])) {
                        $readingEpcHex = $leitura['reading_epc_hex'];

                        // Busca o produto pelo tag RFID no banco de dados
                        $produto = Produtos::where('tag_rfid', $readingEpcHex)->first();

                        if ($produto) {
                            // Insere os dados na tabela rfid_leituras
                            RfidLeitura::create(['reading_epc_hex' => $readingEpcHex]);


                         


                            $response[] = ['message' => 'Produto encontrado', 'produto' => $produto];
                        } else {
                            $response[] = ['error' => 'Produto não encontrado para a leitura com tag RFID ' . $readingEpcHex];
                        }
                    }
                }

                return response()->json($response, 200);
            } else {
                return response()->json(['error' => 'Dados inválidos'], 400);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Ocorreu um erro ao processar a requisição. Detalhes: ' . $e->getMessage()], 500);
        }
    }




//    public function retorno(Request $request)
//    {
//        try {
//            $dados = $request->all();
//
//
//            var_dump($dados);
//
//
//
//            return response()->json(['message' => 'Requisição POST bem-sucedida', 'data' => $dados], 200);
//        } catch (\Exception $e) {
//            return response()->json(['error' => 'Ocorreu um erro ao processar a requisição. Detalhes: ' . $e->getMessage()], 500);
//        }
//    }
}






