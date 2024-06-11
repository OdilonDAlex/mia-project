@extends('base')

@section('title', 'MIA | Accueil')

@section('content')
    
    <h1>Bienvenue sur notre super site </h1>

    se connecter ? <a href="{{ route('login') }}">Se connecter</a>
@endsection