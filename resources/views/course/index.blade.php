@extends('base')

@section('title', 'MIA | Cercle')

@vite('resources/css/course.css')

@section('content')

    <h1>Cercle a Venir</h1>
    <x-course-item :course="$course"/>
    <x-course-item :course="$course"/>
    <x-course-item :course="$course"/>
    <x-course-item :course="$course"/>
@endsection