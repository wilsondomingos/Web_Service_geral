@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Criar Utilizador</title>


  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
  <link rel="manifest" href="assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">


  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&amp;display=swap"
    rel="stylesheet">
  <link href="vendors/prism/prism.css" rel="stylesheet">
  <link href="vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="/assets/css/theme.css" rel="stylesheet" />
  <link href="/assets/css/user.css" rel="stylesheet" />

</head>


<body>

  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    @component('componente_header')
    @endcomponent
    <div class="bg-dark"><img class="img-fluid position-absolute end-0" src="assets/img/hero/hero-bg.png" alt="" />


      <!-- ============================================-->
      <!-- <section> begin ============================-->

      <section>

        <div class="container " style="margin: 15vh;">
          <h2 class="text-center mb-5 text-white" style="text-align: cente;">Associar Serviço ao utilizador</h2>
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="">

                <form class="col-12 m-auto" action="{{asset('Cadastrar_Associacao_usre_servico')}}" method="POST">

                  @csrf()



                  <div class="form-check text-white">
                    <label for="servico">Serviços</label>
                    @foreach($Servico as $serv)
                    <br>
                    <input class="form-check-input text-white @error('servico')is-invalid @enderror" name="servico[]"
                      type="checkbox" value="{{$serv->id}}" id="defaultCheck1" multiple>
                    <b class="text-white ">{{$serv->nome_servico}}</b>
                    @endforeach
                    @error('servico')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                  </div>
                  <input type="hidden" name="user" value="{{$user}}">
                  <button type="submit" class="btn btn-primary mt-5 btn-sm">Associar</button>
                </form>
      </section>

      <script src="vendors/popper/popper.min.js"></script>
      <script src="vendors/bootstrap/bootstrap.min.js"></script>
      <script src="vendors/anchorjs/anchor.min.js"></script>
      <script src="vendors/is/is.min.js"></script>
      <script src="vendors/fontawesome/all.min.js"></script>
      <script src="vendors/lodash/lodash.min.js"></script>
      <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
      <script src="vendors/prism/prism.js"></script>
      <script src="vendors/swiper/swiper-bundle.min.js"></script>
      <script src="assets/js/theme.js"></script>

</body>

</html>
@endsection