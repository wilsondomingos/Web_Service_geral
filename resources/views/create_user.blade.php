@extends('layouts.app')

@section('content')


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
                    <h2 class="text-center mb-5 text-white" style="text-align: cente;">Registar Utilizadores</h2>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="">


                                <div class="-body">
                                    <form method="POST" action="{{ route('register_utilizador') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">Nome do
                                                Utilizador</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="nome_utilizador"
                                                class="col-md-4 col-form-label text-md-right">Nome da
                                                Instituiçao</label>

                                            <div class="col-md-6">
                                                <input id="nome_utilizador" type="text"
                                                    class="form-control @error('nome_utilizador') is-invalid @enderror"
                                                    name="nome_utilizador" value="{{ old('nome_utilizador') }}" required
                                                    autocomplete="Nome do utilizador" autofocus>

                                                @error('nome_utilizador')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">Email da
                                                Instituição</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" required
                                                    autocomplete="email">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password"
                                                class="col-md-4 col-form-label text-md-right">Senha</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="new-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm"
                                                class="col-md-4 col-form-label text-md-right">Confirmar Senha</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control"
                                                    name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password"
                                                class="col-md-4 col-form-label text-md-right">Adicionar Papel</label>

                                            <div class="col-md-6">
                                                <label for="validationCustom04"></label>

                                                <select class="custom-select" id="validationCustom04" name="papal_id"
                                                    required>
                                                    <option value="">Seleciona o Papel </option>
                                                    @foreach($Papal as $papel)
                                                    <option value="{{ $papel->id }}">{{ $papel->designacao }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Registar
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>


@endsection