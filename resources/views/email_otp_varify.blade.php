{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
@csrf

<!-- Name -->
<div>
    <x-input-label for="name" :value="__('Name')" />
    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>

<!-- Email Address -->
<div class="mt-4">
    <x-input-label for="email" :value="__('Email')" />
    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
    <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>

<!-- Password -->
<div class="mt-4">
    <x-input-label for="password" :value="__('Password')" />

    <x-text-input id="password" class="block mt-1 w-full"
        type="password"
        name="password"
        required autocomplete="new-password" />

    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>

<!-- Confirm Password -->
<div class="mt-4">
    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

    <x-text-input id="password_confirmation" class="block mt-1 w-full"
        type="password"
        name="password_confirmation" required autocomplete="new-password" />

    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
</div>

<div class="flex items-center justify-end mt-4">
    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
        {{ __('Already registered?') }}
    </a>

    <x-primary-button class="ms-4">
        {{ __('Register') }}
    </x-primary-button>
</div>
</form>
</x-guest-layout> --}}



<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Passive Factory | Registration</title>
    <meta name="description" content="Passive Factory | Registration">
    <meta name="keywords" content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="{{ asset('fine-app/assets/img/favicon.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('fine-app/assets/img/icon/192x192.png') }}">
    <link rel="stylesheet" href="{{ asset('fine-app/assets/css/style.css') }}">
    <link rel="manifest" href="{{ asset('fine-app/__manifest.json') }}">
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <img src="{{ asset('fine-app/assets/img/loading-icon.png') }}" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader no-border transparent position-absolute">
        <div class="left">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle"></div>
        <div class="right">
            <a href="{{ url('/login') }}" class="headerButton">
                Login
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

         <style type="text/css">
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form-container {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    width: 320px;
    border-radius: 8px;
}

.input-field {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

.input-field:focus {
    outline: none;
    border-color: #4CAF50;
}

.row {
    display: flex;
    justify-content: space-between;
    gap: 10px;
}

.small-field {
    width: 48%;
}

.submit-btn {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    background-color: #4CAF50;
    border: none;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    border-radius: 4px;
}

.submit-btn:hover {
    background-color: #45a049;
}

.small-btn {
    width: 48%;
}

.login-link {
    text-align: center;
    margin-top: 15px;
}

.login-link a {
    color: #4CAF50;
    text-decoration: none;
}

.login-link a:hover {
    text-decoration: underline;
}


        </style>


        <div class="section mt-2 text-center">
            <h1>Enter Email Verify OTP</h1>
            <h4>Create an account</h4>
        </div>
        <div class="form-container">

            
            <form method="POST" action="{{ route('varify.otp.store') }}">
                {{-- <input type="text" name="username" placeholder="Set user name" class="input-field">
                <span id="username-message"></span> --}}
                   @csrf
                
                    <input type="text" id="username" name="otp" placeholder="Enter OTP" class="input-field" required>
                    <span id="username-message"></span>
       

                <input type="submit" value="Confirm Register" class="submit-btn">
            </form>
            <div class="login-link">
                <label>Have an account? </label><a href="{{ url('login') }}">Log in</a>
            </div>
        </div>
        
        


    </div>
    <!-- * App Capsule -->


    <!-- Terms Modal -->

    <!-- * Terms Modal -->

    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="{{ asset('fine-app/assets/js/lib/bootstrap.bundle.min.js') }}"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="{{ asset('finr-app/assets/js/plugins/splide/splide.min.js') }}"></script>
    <!-- Base Js File -->
    <script src="{{ asset('fine-app/assets/js/base.js') }}"></script>
    <!-- Add a button to trigger password generation -->


</body>

</html>