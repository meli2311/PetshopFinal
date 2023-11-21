<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/forgotpassword.css')}}">

        <!-- Scripts -->
    <title>Restablecer Contraseña</title>

</head>
<body>
    <div class="pass">
    <form method="POST" action="{{ route('password.email') }}">
        <p>¿Olvidaste tu contraseña? Indícanos tu correo y te enviaremos un enlace para restablecer tu contraseña.</p>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <!-- Email Address -->
        <div>
            <label for="email">Email</label>
            <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email') }}"
                required autofocus />
            <!-- Aquí debes mostrar los errores de validación si existen -->
        </div>

        <div class="flex items-center justify-end mt-4">
            <button class="button_forgot" aria-label="Restablecer contraseña">Restablecer contraseña</button>
        </div>
    </form>
</div>
</body>
</html>
