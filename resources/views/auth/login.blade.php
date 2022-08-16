




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        .gradient-custom-2 {
/* fallback for old browsers */
background: linear-gradient(90deg, #2F558C 6.59%, rgba(45, 218, 241, 0.67) 83.54%);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
    </style>
    <title>Login</title>
</head>
<body>



<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="/marcadauga.png"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Sistema Integrado de Serviços</h4>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                  <p>Entrar com a sua conta</p>

                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example11" class="form-control @error('email') is-invalid @enderror"
                      placeholder="Phone number or email address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                    <label class="form-label" for="form2Example11">Email da Instituição</label>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>

                  <div class="form-outline mb-4">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <label class="form-label" for="form2Example22">Sua Senha</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                   
                  </div>

             

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    
                   

                    <button type="submit" class="btn btn-outline-danger">
                       Entrar
                    </button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Seja bem-vindo ao Sistema Integrado de Serviço do SME</h4>
                <p class="small mb-0">Este sistema foi desenvolvido com a finalidade de comunicação com outros sistemas de diferentes
                  plataformas, não importa  a línguagem de programação em que seu sistema foi desenvolvido, este sistema oferece métodos para consumo de muitos
                  micro-serviços do SME.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
</body>
</html>

