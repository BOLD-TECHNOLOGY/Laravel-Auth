<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Auth | Login</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>


    <div class="authentication-container">

        <div class="auth-container-image">
            <img src="{{ asset('assets/images/2qwertyuiokjhgfdwertyuiolkjh Under TSUAD.jpg') }}" alt="AUTH-IMAGE">
        </div>

        <div class="auth-container-form">

            <form method="POST" action="{{ route('login') }}" >
                @csrf <!-- CSRF Token for security -->

                <h1 class="form-header">Login</h1>
                <p class="form-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit..</p>
                
                <div class="form-inputs">
                    <input type="email" name="email" placeholder="Email" class="form-input" :value="old('email')" required autofocus autocomplete="username">
                    <input type="password" name="password" placeholder="Password" class="form-input" required autocomplete="current-password">
                </div>

                <p class="form-next-link">Don't have an account? <span><a href="{{ route('register') }}">Register</a></span></p>
                
                <input type="submit" value="Login" class="form-submit">

                <p class="form-next-link"><a href="{{ route('password.request') }}">Forgot your password?</a></p>

            </form>

        </div>

    </div>
    


    
    
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>
</html>