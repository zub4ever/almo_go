<?php


namespace App\Http\Controllers\TesteAPI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\TesteAPI\ExibicaoController;

class RetornoJSON extends Controller
{


    public function retorno(Request $request)
    {
// Recebe os dados enviados pela API
        $data = $request->all();

// Verifica se todas as variáveis esperadas foram enviadas
        if (isset($data['reading_reader_ip'], $data['reading_epc_hex'], $data['reading_reader_mac'], $data['reading_company_id'], $data['reading_antenna'], $data['reading_movement_type'], $data['reading_created_at'], $data['reading_reader_name'])) {
            // Se todas as variáveis esperadas foram enviadas, retorna os dados processados
            return response()->json([
                'reader_ip' => $data['reading_reader_ip'],
                'epc_hex' => $data['reading_epc_hex'],
                'reader_mac' => $data['reading_reader_mac'],
                'company_id' => $data['reading_company_id'],
                'antenna' => $data['reading_antenna'],
                'movement_type' => $data['reading_movement_type'],
                'created_at' => $data['reading_created_at'],
                'reader_name' => $data['reading_reader_name'],
            ]);
        } else {
            // Se alguma das variáveis esperadas não foi enviada, retorne um código de erro 400 (requisição inválida)
            return response()->json(['error' => 'Requisição inválida. Verifique as variáveis enviadas.'], 400);
        }
    }


    public function data()
    {
        $data = session('data');
        return view('cartCheckout.data', ['data' => $data]);
    }

}
