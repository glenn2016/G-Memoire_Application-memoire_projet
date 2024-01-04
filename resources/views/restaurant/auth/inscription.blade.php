<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Spica restaurant</title>
  <!-- base:css -->
  <link rel="stylesheet" href="restaurant/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="restaurant/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="restaurant/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="restaurant/images/favicon.png" />
  <style>
    
     .form-step {
        display: none;
        transform-origin: top;
        animation: animate 0.5s;
      }

      .form-step-active {
        display: block;
      }
  </style>
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
              <h4>Nouveau ici?</h4>
              <h6 class="font-weight-light">Rejoignez-nous aujourd'hui!</h6>
              <form method="POST" action="{{ route('inscription') }}" id="step-forms" class="pt-3">
                  @csrf
                  <div class="form-step form-step-active">
                    <div><h3>Étape 1</h3></div>
                    <div class="form-group">
                      <label>Adresse de l'établissement</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                          <span class="input-group-text bg-transparent border-right-0">
                            <i class="mdi mdi-map-marker text-primary"></i>
                          </span>
                        </div>
                        <input type="text" name="adresse" class="form-control form-control-lg border-left-0" placeholder="Adresse de l'établissement":value="old('adresse')" required autofocus autocomplete="adresse">
                        <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Numéro de téléphone</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                          <span class="input-group-text bg-transparent border-right-0">
                            <i class="mdi mdi-phone text-primary"></i>
                          </span>
                        </div>
                        <input type="text" name="numero_de_telephone" class="form-control form-control-lg border-left-0" placeholder="+221 77 300 00 00":value="old('numero_de_telephone')" required autofocus autocomplete="numero_de_telephone">
                        <x-input-error :messages="$errors->get('numero_de_telephone')" class="mt-2" />

                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label>Nom du restaurant</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                          <span class="input-group-text bg-transparent border-right-0">
                            <i class="mdi mdi-home-map-marker text-primary"></i>
                          </span>
                        </div>
                        <input type="text" class="form-control form-control-lg border-left-0" placeholder="Nom du restaurant"id="nom_entreprise" name="nom_entreprise" :value="old('nom_entreprise')" required autofocus autocomplete="nom_entreprise">
                        <x-input-error :messages="$errors->get('nom_entreprise')" class="mt-2" />

                      </div>
                    </div>

                    <a class="next-step btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"data-step="2" href="#">Suivant</a>
                  </div>

                  <div class="form-step">
                    <div><h3>Étape 2</h3></div>

                    <div class="form-group">
                      <label>Nom</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                          <span class="input-group-text bg-transparent border-right-0">
                            <i class="mdi mdi-account-outline text-primary"></i>
                          </span>
                        </div>
                        <input type="text" class="form-control form-control-lg border-left-0" placeholder="Nom" id="nom" name="nom" :value="old('nom')" required autofocus autocomplete="nom">
                        <x-input-error :messages="$errors->get('nom')" class="mt-2" />
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Prénom</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                          <span class="input-group-text bg-transparent border-right-0">
                            <i class="mdi mdi-account-box text-primary"></i>
                          </span>
                        </div>
                        <input type="text" class="form-control form-control-lg border-left-0" placeholder="Prénom" id="prenom" name="prenom" :value="old('prenom')" required autofocus autocomplete="prenom">
                        <x-input-error :messages="$errors->get('Prénom')" class="mt-2" />

                      </div>
                    </div>
                    <a class="next-step btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"data-step="2" href="#">Suivant</a>
                    <a class="next-prev btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"data-step="2" href="#">Precedent</a>
                  </div>

                  <div class="form-step">
                    <div><h3>Étape 3</h3></div>
                    <div class="form-group">
                      <label>Addresse email</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                          <span class="input-group-text bg-transparent border-right-0">
                            <i class="mdi mdi-email text-primary"></i>
                          </span>
                        </div>
                        <input type="email" class="form-control form-control-lg border-left-0" placeholder="Addresse email"name="email" :value="old('email')" required autofocus autocomplete="email">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Mot de passe</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                          <span class="input-group-text bg-transparent border-right-0">
                            <i class="mdi mdi-lock-outline text-primary"></i>
                          </span>
                        </div>
                        <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword"name="password"
                            required autocomplete="current-password" placeholder="Mot de passe">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />                        
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Confirmer le mot de passe</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                          <span class="input-group-text bg-transparent border-right-0">
                            <i class="mdi mdi-lock-outline text-primary"></i>
                          </span>
                        </div>
                        <input type="password" class="form-control form-control-lg border-left-0" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmer le mot de passe">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />                        
                      </div>
                    </div>

                    <div class="mb-4">
                      <div class="form-check">
                        <label class="form-check-label text-muted">
                          <input type="checkbox" class="form-check-input">
                          I agree to all Terms & Conditions
                        </label>
                      </div>
                    </div>
                    <div class="mt-3">
                    <input name="profil" type="number" value="3" Hidden>
                    <input name="etat_compte" type="number" value="2" Hidden>
                    <x-primary-button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                            {{ __('Terminé ') }}
                        </x-primary-button>
                    <a class="next-prev btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"data-step="2" href="#">Precedent</a>
                    </div>
                    <div class="text-center mt-4 font-weight-light">
                      Already have an account? <a href="login.html" class="text-primary">Login</a>
                    </div>
                    </div>
                  </form>
             </div>
          </div>
          <div class="col-lg-6 register-half-bg d-none d-lg-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <script>
        
        const prevBtns = document.querySelectorAll(".next-prev");
        const nextBtns = document.querySelectorAll(".next-step");
        const progress = document.getElementById("progress");
        const formSteps = document.querySelectorAll(".form-step");
        const progressSteps = document.querySelectorAll(".progress-step");

        let formStepsNum = 0;

        nextBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                formStepsNum++;
                updateFormSteps();
                updateProgressbar();
            });
        });

        prevBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                formStepsNum--;
                updateFormSteps();
                updateProgressbar();
            });
        });

        function updateFormSteps() {
            formSteps.forEach((formStep) => {
                formStep.classList.contains("form-step-active") &&
                formStep.classList.remove("form-step-active");
            });

            formSteps[formStepsNum].classList.add("form-step-active");
            }

            function updateProgressbar() {
            progressSteps.forEach((progressStep, idx) => {
                if (idx < formStepsNum + 1) {
                progressStep.classList.add("progress-step-active");
                } else {
                progressStep.classList.remove("progress-step-active");
                }
            });

            const progressActive = document.querySelectorAll(".progress-step-active");

            progress.style.width =
                ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
        }
    </script>
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
