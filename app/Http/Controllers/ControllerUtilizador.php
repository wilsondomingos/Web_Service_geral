<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Papal;
use App\User;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;

use App\UserServico;
class ControllerUtilizador extends Controller
{
    protected function registar_utilizadore(Request $request){
        if(auth::user()->papal_id==1){
        $Papal = \App\Papal::all();
        return view('create_user',compact('Papal'));
    }
    return view('welcome');
}

    protected function Adicionar_servico_utilizadore(){
        if(auth::user()->papal_id==1){

        $ser=\App\UserServico::all();
        //dd($ser);
        $users = DB::table('users')
        ->join('papals', 'users.papal_id', '=', 'papals.id')
        ->select('users.id as id_user', 'users.name','users.email','papals.*')
        ->get();

        return view('Associar_user',compact('users'));
    }
    return view('welcome');
    }

    protected function register_utilizador(Request $request){
        if(auth::user()->papal_id==1){
        $data=$request->all();
        $suario=[
            'name' => $data['name'],
            'email' =>  $data['email'],
            'password' => Hash::make($data['password']),
            'papal_id' => $data['papal_id'],    
    
        ];

        $usuarios=User::create($suario);
        return redirect()->route('registar_utilizadore');
    }
    return view('welcome');
    }

    protected function Associar($id){
        if(auth::user()->papal_id==1){
        $user = \App\User::find($id);
        $Servico = \App\Servico::all();
        $user=$user->id;
        //dd($user);
        return view('Servico',compact('user','Servico'));
    }
    return view('welcome');
    }


    protected function Cadastrar_Associacao_usre_servico (Request $request){
        $data=$request->all();
        $user=$data['user'];
        $servico=$data['servico'];
        //dd($servico,$user);
    foreach($servico as $ser){
        if(auth::user()->papal_id==1){
        $arraY=[
           'servico_id'=> $ser,
            'user_id'=>$user,
        ];
    }
        $servico_user=UserServico::create($arraY);
        //$usuarios=User::create($suario);
        //$usuarios->servicos()->sync($data['servico']);
        //dd($data);


        
        return redirect()->route('Adicionar_servico_utilizadore');
    }
    return view('welcome');
    }
}
