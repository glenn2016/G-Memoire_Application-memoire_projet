<!DOCTYPE html>
<html>

<head>
    <link href="welcome/css/bootstrap-icons.css" rel="stylesheet">

    <title>Page de connexion</title>

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

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 50px;
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
        .btn{
            background-color: #0e0530;
            color: #fff;
            border: none;
            border-radius: 50px;
            padding: 10px 0px;
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

        label {

            font-size: 16px;
            margin-bottom: 5px;
            display: inline-block;
            color: #0e0530;
            font-weight: 300;
            letter-spacing: 1px;

            /*text-align: left;*/

        }
        span{
            font-size: 16px;
            margin-bottom: 5px;
            display: inline-block;
            color: white;
            font-weight: 300;
        }

        .forgot-password {
            margin-top: 5px;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="image"></div>
        <div class="form">
            <form method="POST" action="{{ route('login') }}">
                
            @csrf

             <img src="{{asset('welcome/img/Capture-removebg-preview.png')}}" width="50%">

                <h2>Se connecter</h2>

                <label for="email" style="text-align:rigth;">Adresse e-mail</label>
                <input type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <label for="password">Mot de passe</label>
                <input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    <x-primary-button class="ml-3">
                        {{ __('Se connecter') }}
                    </x-primary-button>

                <a href="http://127.0.0.1:8000/register" style="background:#fea116;" class="btn"> <span style="margin: 0 auto;">S'inscrire</span></a>

                <ul class="social-buttons">
                    <li href=" # " class=" d-flex align-items-center justify-content-center "><i
                            class=" bi bi-twitter "></i></li>
                    <li href=" # " class=" d-flex align-items-center justify-content-center "><i
                            class=" bi bi-facebook "></i></li>
                    <li href=" # " class=" d-flex align-items-center justify-content-center "><i
                            class=" bi bi-instagram "></i></li>
                    <li href=" # " class=" d-flex align-items-center justify-content-center "><i
                            class=" bi bi-linkedin "></i></a></li>
                </ul>

                <div class="forgot-password">

                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                            {{ __('Mot de passe oublié ?') }}
                        </a>
                    @endif

                    <input id="remember_me" type="checkbox" name="remember">
                    <span>{{ __('Remember me') }}</span>
                </div>

        </div>
        </form>
    </div>
    </div>
</body>

</html>