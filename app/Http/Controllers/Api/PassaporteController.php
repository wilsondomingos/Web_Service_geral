<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \DB;
use Auth;
use App\UserServico;
use App\Servico;
use App\User;
use Illuminate\Support\Facades\Http;
class PassaporteController extends Controller
{
    protected function PequisarPassaporte(Request $request){
        
        $bilheteData = $request->bi;
        try {

        $responseData = http::withBasicAuth('dti@hotmail.com','Password!')->post('http://192.168.1.39/api/PassaporteArquivado',
            [
            'bi' => $bilheteData,
            ]
        );

        $PassaporteArquivoAPi = $responseData->json();
        
        if($PassaporteArquivoAPi!=null){
          return response()->json($PassaporteArquivoAPi);
        }



    $responseData = http::withBasicAuth('dti@hotmail.com','Password!')->post('http://192.168.1.39/api/PassaporteProducao',
    [
    'bi' => $bilheteData,
    ]
   );
   $PassaporteProducaoAPi = $responseData->json();
        
        if($PassaporteProducaoAPi!=null){
          return response()->json($PassaporteProducaoAPi);
        }


        return response()->json([
            'data'=>[
                'msg'=>'Nenhum registro encontrado'
            ]
        ],200);

        
} catch (\Exception $e) {
    
}

}

}
