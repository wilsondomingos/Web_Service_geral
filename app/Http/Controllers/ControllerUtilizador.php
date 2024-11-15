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

     /*
    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    +                               Está função apenas retorna a view create_user todos os papeis os utilizadores              +
    +                               Caso o papel do utilizador seja administrador, caso não seja redireciona para view we      +
    +                               -lcome.                                                                                    +
    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    
    */

    protected function registar_utilizadore(Request $request){

        if(auth::user()->papal_id==1){
        $Papal = \App\Papal::all();
        return view('create_user',compact('Papal'));
        }
   
     return view('welcome');

    }




    /*
    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    +                               Está função apenas retorna a view Associar_user todos os utilizadores                      +
    +                               com os seu papeis associados que fazem consumo de endpoint do sistema                      +
    +                               Caso o papel do utilizador seja administrador, caso não seja redireciona para view welcome +
    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    */
    protected function Adicionar_servico_utilizadore(){

        if(auth::user()->papal_id==1){
        $ser=\App\UserServico::all();
        $users = DB::table('users')
        ->join('papals', 'users.papal_id', '=', 'papals.id')
        ->select('users.id as id_user', 'users.name', 'users.nome_institicao','users.email','papals.*')
        ->get();

        return view('Associar_user',compact('users'));
        }

     return view('welcome');

    }

      /*
    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    +                               Está função faz o registo de um novo utilizador para consumeo de endpoit                   +
    +                               O registo é por um utilizador com o papel admin, caso não seja returno par view welcome    +
    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    
    */
    protected function register_utilizador(Request $request){
        
        if(auth::user()->papal_id==1){
        $data=$request->all();
        $suario=[
            'name' => $data['name'],
            'nome_institicao' => $data['nome_utilizador'],
            'email' =>  $data['email'],
            'password' => Hash::make($data['password']),
            'papal_id' => $data['papal_id'],  
                ];

            $usuarios=User::create($suario);
         return redirect()->route('registar_utilizadore');
        }

      return view('welcome');

    }

     /*
    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    +                               Está função apenas retorna a view welcome ou raiz todos os utilizadores                    +
    +                               com os seu serviços associados que fazem consumo de endpoint do sistema                    +
    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    
    */
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


    /*
    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    +                               Está função apenas retorna a view welcome ou raiz todos os utilizadores                    +
    +                               com os seu serviços associados que fazem consumo de endpoint do sistema                    +
    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    */
    protected function Cadastrar_Associacao_usre_servico (Request $request){
        $data=$request->all();
        $user=$data['user'];
        $servico=$data['servico'];
       foreach($servico as $ser){
        if(auth::user()->papal_id==1){

        $arraY=[
           'servico_id'=> $ser,
            'user_id'=>$user,
              ];
       }
        $servico_user=UserServico::create($arraY);
        return redirect()->route('Adicionar_servico_utilizadore');
       }
      return view('welcome');
    }

    public function token(){
      return view('token');
    }

    


}
