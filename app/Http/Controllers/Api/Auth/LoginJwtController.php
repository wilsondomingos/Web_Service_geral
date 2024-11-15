<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginJwtController extends Controller
{
    public function login(Request $request){
        $credencials = $request->all(['email','password']);

        if(!$token = auth('api')->attempt($credencials)){
            return response()->json("Unauthorized",401);
        }

      
        return response()->json([
            'token'=>$token
        ]);
    }
}
