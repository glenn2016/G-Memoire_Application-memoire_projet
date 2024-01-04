<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>G-Eats - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="welcome/lib/animate/animate.min.css" rel="stylesheet">
    <link href="welcome/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="welcome/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="welcome/css/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="welcome/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="welcome/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>G-Eats</h1>
                   <!--<img src="welcome/img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>

                @if (Route::has('login'))
                <div class="collapse navbar-collapse" id="navbarCollapse"> 
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="contact.html" class="nav-item nav-link"> &nbsp; </a>
                    </div>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary py-2 px-4"><i class="bi bi-pencil-square"></i>  Inscription</a>
                        @endif
                            &nbsp; 
                                <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4"><i class="bi bi-person"></i> Connexion</a>
                    @endauth 
                </div>    
                 @endif
            </nav>