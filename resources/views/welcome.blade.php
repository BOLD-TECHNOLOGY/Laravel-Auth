<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LARAVEL AUTH</title>


        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    




    </head>
    <body class="">


        <div class="welcome-contents-at-center">

            <i class="fas fa-arrow-down"></i>
            <h1 class="welcome-header">Welcome</h1>
            <p class="welcome-description">
                Welcome to this  Laravel project. This is a simple authentication system using Laravel.
            </p>
    
            <div class="welcome-links">
                <a href="{{ route('login') }}" class="welcome-link">Login</a>
                <a href="{{ route('register') }}" class="welcome-link">Register</a>
            </div>
    
    
        </div>
                    
    </body>
</html>
