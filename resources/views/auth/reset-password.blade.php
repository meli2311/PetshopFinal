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
    <link rel="stylesheet" href="{{ asset('css/forgotpassword.css') }}">

    <!-- Scripts -->
    <title>Cambiar Contraseña</title>
</head>

<body>
    <div class="pass">
        <form method="POST" action="{{ route('password.store') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <label for="email">Email</label>
                <input id="email" class="block mt-1 w-full" type="email" name="email"
                    value="{{ old('email', $request->email) }}" required autofocus autocomplete="username" />
                <!-- Aquí debes mostrar los errores de validación si existen -->
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password">Contraseña</label>
                <input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
                <!-- Aquí debes mostrar los errores de validación si existen -->
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <label for="password_confirmation">Confirmar Contraseña</label>
                <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
                    required autocomplete="new-password" />
                <!-- Aquí debes mostrar los errores de validación si existen -->
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="button_forgot" aria-label="Cambiar Contraseña">Cambiar Contraseña</button>
            </div>
        </form>
    </div>
</body>

</html>
