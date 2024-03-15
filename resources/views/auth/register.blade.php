{{--<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
@csrf

<div>
    <x-label for="name" value="{{ __('Name') }}" />
    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus
        autocomplete="name" />
</div>

<div class="mt-4">
    <x-label for="email" value="{{ __('Email') }}" />
    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
        autocomplete="username" />
</div>

<div class="mt-4">
    <x-label for="password" value="{{ __('Password') }}" />
    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
        autocomplete="new-password" />
</div>

<div class="mt-4">
    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required
        autocomplete="new-password" />
</div>

@if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
<div class="mt-4">
    <x-label for="terms">
        <div class="flex items-center">
            <x-checkbox name="terms" id="terms" required />

            <div class="ms-2">
                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms
                    of Service').'</a>',
                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy
                    Policy').'</a>',
                ]) !!}
            </div>
        </div>
    </x-label>
</div>
@endif

<div class="flex items-center justify-end mt-4">
    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        href="{{ route('login') }}">
        {{ __('Already registered?') }}
    </a>

    <x-button class="ms-4">
        {{ __('Register') }}
    </x-button>
</div>
</form>
</x-authentication-card>
</x-guest-layout>
--}}

<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta name="robots" content="noindex" />
    <meta charset="UTF-8" />
    <title>Hospital Management System - HMS</title>
    <meta name="description" content="User Registration Page">
    <meta name="keywords" content="User Registration Page">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('asset/images/favicon.ico')}}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/media/css/style.min.css')}}" media="all">
    <script src="../www.recaptcha.net/recaptcha/api.js')}}"></script>
</head>

<body>
    <header id="header">
        @include('front.menu')
    </header>
    <section id="center">
        <div class="container">
            <div class="row">
                <div class="cols_7" style="margin-left: auto;margin-right: auto;"><span
                        class="heading_1">Registration</span>
                        <x-validation-errors class="mb-4" />
                    <div class="register_2">
                        <form class="registrationform type_2" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="name_text left font18"> Name<span class="star">*</span>
                                <input type="text"  maxlength="50" id="name" name="name":value="old('name')" required autofocus
                                autocomplete="name"  title="Name" class="text_box text">
                            </div>
                            <div class="name_text left font18">Email Address<span class="star">*</span>
                            <input type="email" maxlength="100" name="email":value="old('email')" required
                                autocomplete="username" id="email" title="Email" class="text_box text">
                            </div>
                            
                            <div class="name_text left font18">Password<span class="star">*</span> 
                                <input type="password" maxlength="50" name="password" required autocomplete="new-password" id="password"
                                class="text_box text">
                            </div>
                            <div class="name_text left font18">Confirm Password<span class="star">*</span> <input
                                type="password" id="password_confirmation" required maxlength="50" name="password_confirmation" required autocomplete="new-password"
                                class="text_box text">
                            </div>
                            <div class="text-center">
                                <div class="g-recaptcha" data-sitekey="6Lcm8p8UAAAAANCc8GYk02d56J3IMRaZbgpU5LKi"
                                    style="display: inline-block;"></div>
                            </div><br /><br /><span class="font18">Before registration read our <a href="privacy.html"
                                    target="_blank">Privacy Statement</a> and <a href="terms.html" target="_blank">Terms
                                    & Conditions</a></span><br /><br /><
                            <div class="text-center"> 
                                <button type="submit"  class="submission" style="margin-left: auto;margin-right: auto;">Register</button> 
                            </div>
                        </form>
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