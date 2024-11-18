@extends('layouts.app')

@section('content')

@component('componente_header')
@endcomponent
<div class="bg-dark"><img class="img-fluid position-absolute end-0" src="assets/img/hero/hero-bg.png" alt=""
    height="" />


  <!-- ============================================-->
  <!-- <section> begin ============================-->

  <section>

    <div class=" " style="margin: 15vh;">


      <div class="d-flex justify-content-around">
        <button type="button" class="btn btn-primary  btn-sm" data-toggle="modal" data-target="#modalExemplo">
          Gerar Token
        </button>
        <h2 class="text-center mb-5 text-white" style="text-align: cente;">Lista de token</h2>
      </div>


      <!-- Modal -->
      <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Gerar Token</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="{{ asset('gerarToken') }}">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Endereço de email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Seu email" name="email">
                  <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com
                    ninguém.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Senha</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="password">
                </div>
             
                <button type="submit" class="btn btn-primary btn-lg btn-block">Gerar</button>
              </form>
            </div>
            
          </div>
        </div>
      </div>

      <div class="container " style="margin: 15vh;">

        <table class="table table-striped table-dark">
          <thead>
            <tr>
              <th scope="col">Nome da Intituição</th>
              <th scope="col">Utilizador</th>
              <th scope="col">Tempo de Vida</th>
              <th scope="col">Data de Expiração</th>
              <th scope="col">Estado</th>


            </tr>
          </thead>
          <tbody>
            @foreach($users as $us)
            <tr>
              <td>{{$us->nome_instituicao}}</td>
              <td>{{$us->nome_utilizador}}</td>
              <td>{{$us->tempo_vida}}</td>
              <td>{{$us->data_expiracao}}</td>
              <td>
                @if($us->estado==1)
                Activo
                @endif

                @if($us->estado==0)
                Inactivo
                @endif
              </td>
              <td>
                
                <button type="button" class="btn btn-primary  btn-sm" data-toggle="modal" data-target="#token{{$us->id}}">
                 Token
                </button></td>
             
              <td><a href="associar_utilizadores/{{$us->id}}" class="btn btn-secondary btn-sm">Actualizar Token</a>
              </td>
              <td><a href="associar_utilizadores/{{$us->id}}" class="btn btn-secondary btn-sm">Desactivar Token</a>
              </td>
            </tr>


            <div class="modal fade" id="token{{$us->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Token</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>




                <div class="modal-body" style="width: 100%;">
              
               


                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Tokeb</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="">{{$us->tokem}}</textarea>
                  </div>
                </div>
                <div class="modal-footer">
                  
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                
                </div>
              </div>
            </div>
          </div>
                
            @endforeach
          </tbody>
        </table>



      </div>

  </section>

  @endsection