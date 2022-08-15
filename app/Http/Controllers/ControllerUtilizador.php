<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Papal;
use App\User;
use DB;
class ControllerUtilizador extends Controller
{
    protected function registar_utilizadore(Request $request){
        $Papal = \App\Papal::all();
        return view('create_user',compact('Papal'));
    }


    protected function Adicionar_servico_utilizadore(){


        $users = DB::table('users')
        ->join('papals', 'users.papal_id', '=', 'papals.id')
        ->select('users.*', 'papals.*')
        ->get();
     //dd( $users);
        return view('Associar_user',compact('users'));
       
    }
}
