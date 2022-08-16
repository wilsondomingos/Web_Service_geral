<?php

namespace App\Http\Controllers;
use App\Papal;
use App\User;
use App\Servico;
use DB;
use Auth;

use Illuminate\Http\Request;

class ControllerServico extends Controller
{

  
    
    protected function index(){


        $users = DB::table('users')
        ->join('papals', 'users.papal_id', '=', 'papals.id')


        ->join('user_servicos', 'user_servicos.user_id', '=', 'users.id')
        ->join('servicos', 'servicos.id', '=', 'user_servicos.servico_id')
        

        ->select('users.*', 'papals.*','servicos.*')
        ->get();

       
            return view('welcome',compact('users'));
      
        
    }

 
}
