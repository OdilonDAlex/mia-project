<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    @vite('resources/css/app.css')
    @vite('resources/css/login.css')
</head>

<body>
    <section class="content">
        <div class="illustration">
            @include('assets.svg.login-illustration')
        </div>
        <div>
            <form action="{{ route('register.store') }}" method="POST">
                @csrf

                <!-- Nom -->
                <x-input label="Nom" type="text" name="name" id="name"/>

                <!-- adresse email -->
                <x-input label="Adresse email" type="email" name="email" id="email"/>

                <!-- Mot de passe -->
                <x-input label="Mot de passe" type="password" name="password" id="password"/>

                <!-- Submit -->
                <x-input value="S'inscrire" type="submit"/>

            </form>
        </div>
    </section>
</body>

</html>
