
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirm Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/forgotpassword.css')}}">

        <!-- Scripts -->
</head>
<body>
    <div class="pass">

        <form method="POST" action="{{ route('password.confirm') }}">
            <p>Esta es un área segura de la aplicación. Confirme su contraseña antes de continuar.</p>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <!-- Password -->
            <div>
                <label for="password">Password</label>
                <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                <!-- Aquí debes mostrar los errores de validación si existen -->
            </div>

            <div class="flex justify-end mt-4">
                <button>Confirm</button>
            </div>
        </form>
    </div>
</body>
</html>

    