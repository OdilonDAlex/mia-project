<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    @vite('resources/css/app.css')
    @vite('resources/css/register.css')
</head>

<body>
    <section class="content">
        <div class="illustration">
            <h1>
                Lorem ipsum dolor sit amet, consectetur elit.
            </h1>
            @include('assets.svg.login-illustration')
        </div>
        <div>
            <form action="{{ route('register.store') }}" method="POST">
                @csrf

                <!-- Nom -->
                <x-input label="Nom" type="text" name="name" id="name"/>
                
                <!-- Prenom   -->
                <x-input label="Prenom" type="text" name="firstname" id="firstname"/>

                <!-- adresse email -->
                <x-input label="Adresse email" type="email" name="email" id="email"/>

                <!-- Mot de passe -->

                <div class="passwords">
                    <x-input label="Mot de passe" type="password" name="password" id="password"/>
                    <x-input label="Confirmation mot de passe" type="password" name="confirm-password" id="confirm-password"/>                    
                </div>

                <!-- Submit -->
                <x-input value="S'inscrire" type="submit"/>

                <!-- alternative -->
                <a class="alternative-link" href="{{ route('login') }}">
                    Se connecter
                </a>

            </form>

            <fieldset>
                <legend>ou</legend>
                <form action="" method="GET">
                    <button type="submit">
                        @include('assets.svg.facebook')
                    </button>
                </form>
                <form action="" method="GET">
                    <button type="submit">
                        @include('assets.svg.gmail')
                    </button>
                </form>
                <form action="" method="GET">
                    <button type="submit">
                        @include('assets.svg.linkedin')
                    </button>
                </form>
            </fieldset>
        </div>
    </section>
</body>

</html>
