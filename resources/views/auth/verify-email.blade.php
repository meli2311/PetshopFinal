@extends('frontend.layouts.master')
@section('title', 'E-Shop || Login Page')

@section('main-content')
    

    <!-- Shop Login -->
    <section class="section-login">
        <div class="containe" id="containe">
            <!-- Form  LOGIN LINEA 37 DEL PROYECTO ANTERIOR-->
            <div class="form-containe sign-up-containe">
                <form class="form" method="post" action="{{ route('register.submit') }}">
                    @csrf
                    <h1>Crear Cuenta</h1>
                    <span>Ingrese los siguientes datos para registrarse</span>
                    <input type="text" name="name" placeholder="Nombres" class="block mt-1 w-full" required autofocus
                        autocomplete="name" value="{{ old('name') }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="block mt-1 w-full" type="text" required autocomplete="username" name="email"
                        placeholder="Email" required="required" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="password" class="block mt-1 w-full" name="password" placeholder="Contraseña" required
                        autocomplete="new-password" value="{{ old('password') }}">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="password" class="block mt-1 w-full" name="password_confirmation" required
                        autocomplete="new-password placeholder=" placeholder="Recordar Contraseña" required="required"
                        value="{{ old('password_confirmation') }}">
                    @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <button type="submit" x-primary-button class="ml-4" aria-label="Registrar">Registrar</button>
                    <a class="loginBtn loginBtn--google" href="{{ route('login.redirect', 'google') }}"
                        class="btn btn-google">Ingresar con google</a>

                </form>
            </div>

            <!--/ End Form -->

            <!-- Form REGISTER - LINEA 62 DEL PROYECTO ANTERIOR -->
            <div class="form-containe sign-in-containe">
                <form class="form" method="post" action="{{ route('login.submit') }}">
                    @csrf
                    <h1>Iniciar Sesion</h1>
                    <input placeholder="Email" value="{{ old('email') }}" class="block mt-1 w-full" type="email"
                        name="email" required autofocus autocomplete="username" />
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="password" name="password" placeholder="Contraseña" class="block mt-1 w-full" required
                        autocomplete="current-password" value="{{ old('password') }}">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <button type="submit" x-primary-button class="ml-3" aria-label="Ingresar">Ingresar</button>
                    <a class="loginBtn loginBtn--google" href="{{ route('login.redirect', 'google') }}"
                        class="btn btn-google">Ingresar con google</a>
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
            </div>
            </form>
            <div class="overlay-containe">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Bienvenido!</h1>
                        <p>Para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
                        <button class="ghost" id="signIn" aria-label="Iniciar Sesion">Iniciar Sesion</button>
    
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, PetLovers!</h1>
                        <p>Ingresa tus datos personales y comienza esta maravillosa experiencia.</p>
                        <button class="ghost" id="signUp" aria-label="Registrarse">Registrarse</button>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Form -->
        
        </div>
    </section>
    <!--/ End Login -->
@endsection
@section('js')
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const containe = document.getElementById('containe');

        signUpButton.addEventListener('click', () => {
            containe.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            containe.classList.remove("right-panel-active");
        });
    </script>
@endsection

@push('styles')
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        .section-login {
        background-image: url(../images/fondopetshop.jpg);
        display         : flex;
        justify-content : center;
        align-items     : center;
        flex-direction  : column;
        font-family     : 'Montserrat',
            sans-serif;
        height             : 100vh;
        background-repeat  : no-repeat;
        background-position: center;
        background-size    : cover;
        }

        h1 {
            font-weight: bold;
            margin: 0;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
            color: #fff !important;
        }

        span {
            font-size: 12px;
        }

        a {
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }

        button {
            border-radius: 13px;
            border: 1px solid #722704;
            background-color: #722704;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            text-align: center;
            padding: 6px 70px 12px 70px;
            letter-spacing: 1px;
            transition: transform 80ms ease-in;
        }

        .loginBtn {
            box-sizing: border-box;
            display: block;
            position: relative;
            top: 5px;
            width: 17em;
            margin: 5px;
            padding: 10px 10px 10px 40px;
            font-size: 12px;
            color: #FFF;
            text-align: center;
            border-radius: 13px;
            font-weight: bold;
        }

        .loginBtn:before {
            content: "";
            box-sizing: border-box;
            position: absolute;
            top: 0;
            left: 0;
            width: 34px;
            height: 100%;
        }

        .loginBtn:focus {
            outline: none;
        }

        .loginBtn:active {
            box-shadow: inset 0 0 0 32px rgba(0, 0, 0, 0.1);
        }

        /* Google */
        .loginBtn--google {
            /*font-family: "Roboto", Roboto, arial, sans-serif;*/
            background: #DD4B39;
        }

        .loginBtn--google:before {
            border-right: #BB3F30 1px solid;
            background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 4px 10px no-repeat;
        }

        .loginBtn--google:hover,
        .loginBtn--google:focus {
            background: #E74B37;
        }

        button:active {
            transform: scale(0.95);
        }

        button:focus {
            outline: none;
        }

        button.ghost {
            background-color: transparent;
            border-color: #FFFFFF;
        }

        form {
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px !important;
            margin: 8px 0 !important;
            width: 100% !important;
           
        }

        .containe {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
                0 10px 10px rgba(0, 0, 0, 0.22);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 550px;
        }

        .form-containe {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in-containe {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .containe.right-panel-active .sign-in-containe {
            transform: translateX(100%);
        }

        .sign-up-containe {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        @media (max-width: 575px) {}

        .containe.right-panel-active .sign-up-containe {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes show {

            0%,
            49.99% {
                opacity: 0;
                z-index: 1;
            }

            50%,
            100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .overlay-containe {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .containe.right-panel-active .overlay-containe {
            transform: translateX(-100%);
        }

        .overlay {
            background: #ffce0c !important;
            background: -webkit-linear-gradient(to right, #ffce0c, #ffce0c) !important;
            background: linear-gradient(to right, #ffce0c, #ffce0c) !important;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #FFFFFF;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .containe.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .containe.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .containe.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

        .social-containe {
            margin: 20px 0;
        }

        .social-containe a {
            border: 1px solid #DDDDDD;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 40px;
            width: 40px;
        }
    </style>
@endpush
