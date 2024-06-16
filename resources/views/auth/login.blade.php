<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    @vite('resources/css/app.css')
    @vite('resources/css/login.css')
</head>

<body>
    <section class="content">
        <div class="illustration">
            @include('assets.svg.login-illustration')
        </div>
        <div>
            <form action="{{ route('login.store') }}" method="POST">
                @csrf

                <!-- Adresse email -->
                <x-input label="Adresse email" type="email" name="email" id="email" />

                <!-- Mot de passe -->
                <x-input label="Mot de passe" type="password" name="password" id="password" />

                <!-- Adresse email -->
                <x-input value="Se connecter" type="submit" />

            </form>
        </div>
    </section>
</body>

</html>
