@extends('layouts.layout')
@section('contentmain')


    <!--Sliders Section-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="../../assets/images/banners/banner2.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="">Login</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="home.html">Accueil</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Login</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Sliders Section-->



    <!--Login-Section-->

    <section class="sptb">
        <div class="container customerpage">
            <div class="row">
                <div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-md-12 register-right">
                            <ul class="nav nav-tabs nav-justified mb-5 p-1 border" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active m-1" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="true">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link m-1" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="single-page  w-100  p-0">
                                        <div class="wrapper wrapper2">
                                            <div class="card-body">
                                                <h3>Login</h3>
                                                {{-- <div class="text-center">
                                                    <div class="btn-list d-flex">
                                                        <a href="https://www.google.com/gmail/"
                                                            class="btn btn-google btn-block"><i
                                                                class="fa fa-google fa-1x mr-2"></i> Google</a>
                                                        <a href="https://twitter.com/" class="btn btn-twitter"><i
                                                                class="fa fa-twitter fa-1x"></i></a>
                                                        <a href="https://www.facebook.com/" class="btn btn-facebook"><i
                                                                class="fa fa-facebook fa-1x"></i></a>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            <x-auth-card>
                                                <x-slot name="logo">
                                                    <a href="/">
                                                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                                                    </a>
                                                </x-slot>

                                                <!-- Session Status -->
                                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                                <!-- Validation Errors -->
                                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                                <form method="POST" action="{{ route('login') }}">
                                                    @csrf

                                                    <!-- Email Address -->
                                                    <div>

                                                        <x-input id="email" class="block mt-1 w-full" type="email"
                                                            name="email" :value="old('email')" required autofocus />
                                                    </div>

                                                    <!-- Password -->
                                                    <div class="mt-4">

                                                        <x-input id="password" class="block mt-1 w-full" type="password"
                                                            name="password" required autocomplete="current-password" />
                                                    </div>

                                                    <div class="flex items-center justify-end mt-4">
                                                        @if (Route::has('password.request'))
                                                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                                                href="{{ route('password.request') }}">
                                                                {{ __('Forgot your password?') }}
                                                            </a>
                                                        @endif

                                                        <x-button class="ml-3">
                                                            {{ __('Log in') }}
                                                        </x-button>
                                                    </div>
                                                </form>
                                            </x-auth-card>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="single-page w-100  p-0">
                                        <div class="wrapper wrapper2">
                                            <div class="card-body">
                                                <h3>Register</h3>
                                                {{-- <div class="text-center">
                                                    <div class="btn-list d-flex">
                                                        <a href="https://www.google.com/gmail/"
                                                            class="btn btn-google btn-block"><i
                                                                class="fa fa-google fa-1x mr-2"></i> Google</a>
                                                        <a href="https://twitter.com/" class="btn btn-twitter"><i
                                                                class="fa fa-twitter fa-1x"></i></a>
                                                        <a href="https://www.facebook.com/" class="btn btn-facebook"><i
                                                                class="fa fa-facebook fa-1x"></i></a>
                                                    </div>
                                                </div> --}}
                                            </div>

                                            <x-auth-card>
                                                <x-slot name="logo">
                                                    <a href="/">
                                                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                                                    </a>
                                                </x-slot>

                                                <!-- Validation Errors -->
                                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                                <form method="POST" action="{{ route('register') }}">
                                                    @csrf

                                                    <!-- Name -->
                                                    <div class="name">
                                                        <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                                                            :value="old('name')" required autofocus />
                                                    </div>

                                                    <!-- Email Address -->
                                                    <div class="mt-4 mail">
                                                        <x-input id="email" class="block mt-1 w-full" type="email"
                                                            name="email" :value="old('email')" required />
                                                    </div>

                                                    <!-- Password -->
                                                    <div class="mt-4 passwd">
                                                        <x-input id="password" class="block mt-1 w-full" type="password"
                                                            name="password" required autocomplete="new-password" />
                                                    </div>

                                                    <!-- Confirm Password -->
                                                    <div class="mt-4 passwd">

                                                        <x-input id="password_confirmation" class="block mt-1 w-full"
                                                            type="password" name="password_confirmation" required />
                                                    </div>

                                                    <div class="flex items-center justify-end mt-4 submit">
                                                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                                            href="{{ route('login') }}">
                                                            {{ __('Already registered?') }}
                                                        </a>

                                                        <x-button class="ml-4">
                                                            {{ __('Register') }}
                                                        </x-button>
                                                    </div>
                                                </form>
                                            </x-auth-card>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Login-Section-->
@endsection
