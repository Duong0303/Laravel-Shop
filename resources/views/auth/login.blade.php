{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}


<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Surfside Media</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/imgs/theme/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    @livewireStyles
</head>

<body> 

    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>                    
                    <span></span> Login
                </div>
                <div class="header-info header-info-right">
                    @auth
                    <ul>
                        <li>
                            <i class="fi-rs-key"></i> {{ Auth::user()->name }} /
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit();">logout</a>
                            </form>
                        </li>
                    </ul>
                    @else
                        <ul>
                            <li><i class="fi-rs-key"></i><a href="{{ route('login') }}">Log In </a> / <a
                                    href="{{ route('register') }}">Sign Up</a></li>
                        </ul>
                    @endif
                </div>
            </div>
        </div>
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="login_wrap widget-taber-content p-30 background-white border-radius-10 mb-md-5 mb-lg-0 mb-sm-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">Login</h3>
                                        </div>
                                        <form method="post" action="{{route('login')}}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" required="" name="email" placeholder="Your Email" :value="old('email')" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="password" name="password" placeholder="Password" required autocomplete="current-password">
                                            </div>
                                            <div class="login_footer form-group">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="remenber" id="exampleCheckbox1" value="">
                                                        <label class="form-check-label" for="exampleCheckbox1"><span>Remember me</span></label>
                                                    </div>
                                                </div>
                                                <a class="text-muted" href="{{route('password.request')}}">Forgot password?</a>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-fill-out btn-block hover-up" name="login">Log in</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-6">
                               <img src="assets/imgs/login.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
            <!-- Vendor JS-->
            <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
            <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
            <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
            <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/perfect-scrollbar.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/select2.min.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/waypoints.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/images-loaded.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/isotope.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/jquery.vticker-min.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/jquery.theia.sticky.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/jquery.elevatezoom.js') }}"></script>
            <!-- Template  JS -->
            <script src="{{ asset('assets/js/main.js?v=3.3') }}"></script>
            <script src="{{ asset('assets/js/shop.js?v=3.3') }}"></script>
            @livewireScripts
            @stack('scripts')
        </body>
        </html>
