@extends('layouts.app')

@section('content')

    @component('componente_header')
    @endcomponent

    <div class="bg-dark"><img class="img-fluid position-absolute end-0" src="assets/img/hero/hero-bg.png" alt="" />


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>

        <div class="container">
          <div class="row align-items-center py-lg-10 py-6">
            <div class="col-lg-6 text-center text-lg-start">
              <h1 class="text-white text-center fs-5 fs-xl-6 mb-4">Serviços</h1>

              <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">Intituição</th>
                    <th scope="col">Utilizador</th>
                    <th scope="col">Email</th>
                    <th scope="col">Serviço</th>


                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $us)
                  <tr>

                    <td>{{$us->nome_institicao}}</td>
                    <td>{{$us->name}}</td>
                    <td>{{$us->email}}</td>
                    <td>{{$us->nome_servico}}</td>

                  </tr>
                  @endforeach
                </tbody>
              </table>

            </div>
            <div class="col-lg-6 text-center text-lg-end mt-3 mt-lg-0"><img class="img-fluid"
                src="assets/img/hero/hero-graphics.png" alt="" /></div>
          </div>
          <div class="swiper">
            <div class="swiper-container swiper-shadow swiper-theme"
              data-swiper='{"slidesPerView":2,"breakpoints":{"640":{"slidesPerView":2,"spaceBetween":20},"768":{"slidesPerView":4,"spaceBetween":40},"992":{"slidesPerView":5,"spaceBetween":40},"1024":{"slidesPerView":4,"spaceBetween":50},"1025":{"slidesPerView":6,"spaceBetween":50}},"spaceBetween":10,"grabCursor":true,"pagination":{"el":".swiper-pagination","clickable":true},"loop":true,"freeMode":true,"autoplay":{"delay":2500,"disableOnInteraction":false}}'>
              <div class="swiper-wrapper">

              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>


@endsection