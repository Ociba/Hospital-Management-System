{{--<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
--}}
<!DOCTYPE html>
<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta name="robots" content="noindex" />
    <meta charset="UTF-8" />
    <title>Hospital Management System -HMS</title>
    <meta name="description" content="User Login Page">
    <meta name="keywords" content="User Login Page">
    <meta name="author" content="TemplateOnWeb">
    <link rel="shortcut icon" href="{{ asset('asset/images/favicon.ico')}}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/media/css/style.min.css')}}" media="all">
</head>

<body>
    <header id="header">
        @include('front.menu')
    </header>
    <section id="login">
        <div class="login">
            <div class="login_main">
                <div class="row">
                    <div class="cols_5 left">
                        <div class="login_1">
                            <h2>Register and save time!</h2><span class="font18">Register with us for future
                                convenience:</span><br />
                            <p class="font18"><img src="{{ asset('asset/images/arrow-red.png')}}" height="11px" />Template
                                download<br /><img src="{{ asset('asset/images/arrow-red.png')}}" height="11px" />Submit your
                                template.<br /><img src="{{ asset('asset/images/arrow-red.png')}}" height="11px" />Create your designer
                                profile.</p>
                        </div>
                    </div>
                    <div class="cols_5 left">
                        <div class="login_2">
                            <h2> Login</h2><span class="font18">Already registered? Please log in
                                below:</span><br /><br />
                                <x-validation-errors class="mb-4" />
                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            <form id="login_form" class="type_2" method="POST" action="{{ route('login') }}">
                                @csrf
                                <span class="font18">Email  address <font color="#FF0000">*</font></span><br />
                                <input class="text"id="email"  type="email" maxlength="50" name="email":value="old('email')" required autofocus autocomplete="username" /> <br />
                                <span class="font18">Password <font color="#FF0000">*</font></span><br />
                                <input id="password" type="password" maxlength="50" name="password" class="text" required autocomplete="current-password"  size="30"><br />
                                <button class="button" type="submit" value="Login">Login</button> <br /><br /> 
                                <span class="font18">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="password">Forgot your password?</a>
                                @endif
                                </span> 
                                <a href="/register" style="padding: 5px 10px 5px 10px;background-color: rgba(176, 115, 23, 0.98); color:#FFF;">Register
                                </a> <br /> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('front.footer')
    <div id='cookie-bar' class="cookiealert">
        <div id='contentcookie'>
            <p>This website uses cookies to ensure you get the best experience on our website. For more information <a
                    href="privacy.html" target="_blank">Learn about cookies</a></p> <button id="close-cookies"
                class="acceptcookies" aria-label="Close cookie-bar">&times;</button>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('asset/media/js/global.js')}}"></script>
</body>

</html>