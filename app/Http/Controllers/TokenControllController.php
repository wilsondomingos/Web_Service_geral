<?php

namespace App\Http\Controllers;

use App\TokenControll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;
use App\UserServico;
use Illuminate\Support\Facades\Http;
class TokenControllController extends Controller
{

    public function token(){

        if(auth::user()->papal_id==1){
            $ser=\App\UserServico::all();
            $users = \App\TokenControll::all();
    
            //dd($users);
            return view('token',compact('users'));
      
      }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gerarToken(Request $request)
    {
        $credencials = $request->all(['email','password']);

        if(!$token = auth('api')->attempt($credencials)){
            return response()->json("Unauthorized",401);
        }

         $user = \App\User::where('email',$request->email)->get();
         $array = json_decode(json_encode($user), true);
         $array2= $array[0];
        // dd( $array2);
         $tok= [
            'nome_instituicao'=>$array2['nome_institicao'],
            'email_instituicao'=>$array2['email'],
            'nome_utilizador'=>$array2['name'],
            'tokem'=>$token,
            'tempo_vida'=>366,
            'estado'=>1,
            'data_expiracao'=>date('Y-m-d',strtotime("+365 days"))
         ];
         $createToke = \App\TokenControll::create($tok);
        
         return redirect()->back();
    }

    public function desativar(Request $request){
        
        $token = $request->token;
        $response = Http::withHeaders([ 'Authorization' => 'Bearer '.$token, 'Accept' => 'application/json', ])->get('http://127.0.0.1:8000/api/v1/logout');


        $data = $response->json(); // Converte a resposta JSON em array associativo return $data;

        dd( $data );

        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TokenControll  $tokenControll
     * @return \Illuminate\Http\Response
     */
    public function show(TokenControll $tokenControll)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TokenControll  $tokenControll
     * @return \Illuminate\Http\Response
     */
    public function edit(TokenControll $tokenControll)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TokenControll  $tokenControll
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TokenControll $tokenControll)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TokenControll  $tokenControll
     * @return \Illuminate\Http\Response
     */
    public function destroy(TokenControll $tokenControll)
    {
        //
    }
}
