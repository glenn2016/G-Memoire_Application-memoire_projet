

<!DOCTYPE html>
<html>

<head>
    <link href="welcome/css/bootstrap-icons.css" rel="stylesheet">
    <title>Formulaire à étapes</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }

        .image {
            flex: 1;
            height: 100%;
            background-image: url('welcome/img/mls.PNG');
            background-size: cover;
            background-position: center;
        }

        .form {
            flex: 1;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        form {
            width: 100%;
            max-width: 400px;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 50px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            font-size: 16px;
        }

        button[type="submit"] {
            background-color: #0e0530;
            color: #fff;
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 10px;
            width: 100%;
        }
        .next-step{
            background-color: #0e0530;
            color: #fff;
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 10px;
            width: 100%;
        }

        .next-prev{
            background-color: #0e0530;
            color: #fff;
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 10px;
            width: 100%;
        }
        .social-buttons {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .social-buttons li {
            list-style: none;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fea116;
            border-radius: 50px;
            margin: 0 7px;
            cursor: pointer;
        }

        .social-buttons li:hover {
            background-color: #0e0530;
        }

        h2 {
            color: black;
            font-weight: 600;
            font-size: 1.5em;
            text-transform: uppercase;
            margin-bottom: 20px;
            border-bottom: 4px solid #0e0530;
            display: inline-block;
            letter-spacing: 1px;
        }

        .form-step {
            display: none;
            transform-origin: top;
            animation: animate 0.5s;
        }

            .form-step-active {
            display: block;
        }

        label {
            font-size: 16px;
            margin-bottom: 5px;
            display: inline-block;
            color: #0e0530;
            font-weight: 300;
            letter-spacing: 1px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="image"></div>
        <div class="form">
            <form method="POST" action="{{ route('register') }}" id="step-form">
                @csrf
                <img src="{{asset('welcome/img/Capture-removebg-preview.png')}}" width="50%">
                <!--Etape-->
                <div class="form-step form-step-active">
                <div><h2>Étape 1</h2></div>

                    <label for="prenom" style="text-align:rigth;">Prenom</label>
                    <input type="text" id="prenom" name="prenom" :value="old('prenom')" required autofocus autocomplete="prenom">
                    <x-input-error :messages="$errors->get('prenom')" class="mt-2" />

                    <label for="nom" style="text-align:rigth;">Nom</label>
                    <input type="text" id="nom" name="nom" :value="old('nom')" required autofocus autocomplete="nom">
                    <x-input-error :messages="$errors->get('nom')" class="mt-2" />

                    <button class="next-step" data-step="2">Suivant</button>
                </div>
                 <!--Etape-->

                <!--Etape2-->
                <div class="form-step">
                <h2>Étape 2</h2><br>

                
                    <label for="email" style="text-align:rigth;">Adresse e-mail</label>
                    <input type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <label for="password">Mot de passe</label>
                    <input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="current-password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    <br><br>

                    <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />


                    <br><br>
                    <button class="next-step" data-step="2">Suivant</button>         
                    <button class="next-prev" data-step="2">Précédent</button>
                </div>
                 <!--Etape2-->

                <!--Etape3-->
                <div class="form-step">
                <h2>Étape 3</h2><br>
                    <label for="adresse" style="text-align:rigth;">Adresse</label>
                    <input type="text" name="adresse" :value="old('adresse')" required autofocus autocomplete="adresse">
                    <x-input-error :messages="$errors->get('adresse')" class="mt-2" />

                    <label for="numero_de_telephone" style="text-align:rigth;">Numéro de téléphone</label>
                    <input type="text" name="numero_de_telephone" :value="old('numero_de_telephone')" required autofocus autocomplete="numero_de_telephone">
                    <input name="profil" type="number" value="1"Hidden>
                    <x-input-error :messages="$errors->get('numero_de_telephone')" class="mt-2" />

                    <br><br>
                    <x-primary-button class="ml-3">
                        {{ __('Terminé ') }}
                    </x-primary-button>
                    <button class="next-prev" data-step="2">Précédent</button>
                </div>
                 <!--Etape3-->
            </form>
        </div>
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
</body>

</html>
