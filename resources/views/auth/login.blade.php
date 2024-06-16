@extends('base')

@section('title', 'Connexion')

@section('content')

<form action="{{ route('login.store') }}" method="POST">
    @csrf
    <h1>Connexion</h1>  

    <!-- Adresse email -->
    <x-input label="Adresse email" type="email" name="email" id="email"/>
    
    <!-- Mot de passe -->
    <x-input label="Mot de passe" type="password" name="password" id="password"/>
    
    <!-- Adresse email -->
    <x-input value="Se connecter" type="submit"/>

</form>
@endsection