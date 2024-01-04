<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Se connecter - G-eat</title>
  <!-- base:css -->
  <link rel="stylesheet" href="restaurant/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="restaurant/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="restaurant/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="welcome/img/Capture-removebg-preview.png" />
</head>

<body>
  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="welcome/img/Capture-removebg-preview.png" alt="logo">
              </div>
              <h4>Welcome back!</h4>
              <h6 class="font-weight-light">Content de te revoir!!</h6>
              <form class="pt-3" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail">Adresse e-mail</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="email" name="email" :value="old('email')" required autofocus autocomplete="email" class="form-control form-control-lg border-left-0" id="email" placeholder="Email">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Mot de passe</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" name="password" required autocomplete="current-password" class="form-control form-control-lg border-left-0" id="password" placeholder="Mot de passe">        
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />                
                  </div>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input" name="remember">
                      Souviens-toi de moi
                    </label>
                  </div>
                @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}" class="auth-link text-black">Mot de passe oublié ?</a>
                @endif
                </div>
                <div class="my-3">
                <x-primary-button style="background-color:#fea116;" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn ">
                        {{ __('Se connecter') }}
                    </x-primary-button>
                </div>
                <div class="mb-2 d-flex">
                  <button type="button" class="btn btn-facebook auth-form-btn flex-grow mr-1">
                    <i class="mdi mdi-facebook mr-2"></i>Facebook
                  </button>
                  <button type="button" class="btn btn-google auth-form-btn flex-grow ml-1">
                    <i class="mdi mdi-google mr-2"></i>Google
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                Vous n'avez pas de compte ? <a href="http://127.0.0.1:8000/register" class="text-primary">S'inscrire</a>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-none d-lg-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="restaurant/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="restaurant/js/off-canvas.js"></script>
  <script src="restaurant/js/hoverable-collapse.js"></script>
  <script src="restaurant/js/template.js"></script>
  <!-- endinject -->
</body>

</html>
