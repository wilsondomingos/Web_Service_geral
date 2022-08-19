@extends('layouts.app')

@section('content')

  @component('componente_header')
  @endcomponent
  <div class="bg-dark"><img class="img-fluid position-absolute end-0" src="assets/img/hero/hero-bg.png" alt="" />


    <!-- ============================================-->
    <!-- <section> begin ============================-->

    <section>

      <div class="container " style="margin: 15vh;">
        <h2 class="text-center mb-5 text-white" style="text-align: cente;">Associar Utilizadores ao Serviço</h2>

        <table class="table table-striped table-dark">
          <thead>
            <tr>
              <th scope="col">Nome da Intituição</th>
              <th scope="col">Nome Utilizador</th>
              <th scope="col">Email da Instituição</th>
              <th scope="col">Papel</th>

              <th scope="col">Associar</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $us)
            <tr>
              <td>{{$us->nome_institicao}}</td>
              <td>{{$us->name}}</td>
              <td>{{$us->email}}</td>
              <td>{{$us->designacao}}</td>
              <td><a href="associar_utilizadores/{{$us->id_user}}" class="btn btn-secondary btn-sm">Associar</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </section>

@endsection