@vite(['resources/css/header.css', 'resources/js/header.js'])
<header>
    <p class="logo">LOGO</p>

    <div class="container-nav-links">
        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Acceuil</a>
        <a href="#" class="nav-link">Blog</a>
        <a href="#" class="nav-link">Evenement</a>
        <a href="{{ route('survey.index') }}" class="nav-link {{ request()->routeIs('survey.*') ? 'active' : '' }}">Sondage</a>
        <a href="#" class="nav-link">Cercle</a>
    </div>

    @auth
        <div class="container-tools">
            <div class="container-search-bar">
                <input type="search" name="" id="" placeholder="Recherchez quelque chose...">
                <div class="btn-search">
                    @include('assets.svg.search-bar')
                </div>
            </div>
            <div class="profil-user">
                <p class="acronym-user">AA</p>
                <form method="POST" action="{{ route('logout') }}" class="container-profil">
                    @csrf

                    <span class="arrow"></span>
                    @include('assets.svg.user')
                    <p class="username">Lorem ipsum</p>
                    <button type="submit">Se Deconnecter</button>
                </form>
            </div>
        </div>
    @endauth
    @guest
        <div class="container-btn">
            <form action="{{ route('register') }}" method="GET">
                <button class="btn-inscription" type="submit">Inscription</button>
            </form>
            <form action="{{ route('login') }}" method="GET">
                <button class="btn-connection" type="submit">Connexion</button>
            </form>
        </div>
    @endguest
</header>