@extends('base')

@section('title', 'inscription')

@section('content')

<form action="{{ route('register.store') }}" method="POST">
    @csrf
    <h1>Inscription</h1>
    
    Page d'inscription <a href="{{ route('login') }}">Se connecter</a>
</form>
@endsection