@extends('base')

@section('title', 'Connexion')

@section('content')

<form action="{{ route('login.store') }}" method="POST">
    @csrf
    <h1>Connexion</h1>  

    page de connexion
    <a href="{{ route('register') }}">s'inscrire</a>
</form>
@endsection