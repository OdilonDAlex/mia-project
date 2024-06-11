<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>

    @auth
        <input id="authenticated_user_id" type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    @endauth

    

    @yield('header')
    <!-- Contenu principale -->
    
    @auth
        @if(session('new-user'))
            <p>{{ session('new-user') }}</p>
        @endif

    @endauth
    <section class="content">

        @yield('content')

    </section> 

</body>
</html>