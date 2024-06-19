@extends('base')

@section('title', 'MIA | Cercle')

@vite('resources/css/course.css')

@section('content')
<h1>Cercle a Venir</h1>
<section class="section-container">
    <div class="container">
        <div class="tools-wrapper">
            <select name="" id="">
                <option value="">Filtrer</option>
                <option value="">Lorem.</option>
                <option value="">Lorem.</option>
            </select>
            <input type="search">
        </div>
    </div>

    <div class="module-wrapper">
        @forelse($confirmed_courses as $course)
            <x-course-item :course="$course" />
        @empty
            Aucun
        @endforelse
    </div>

    <div class="see-more">
        <button> Voir plus </button>
    </div>
</section>

    
   
<h1>Demande de cercle</h1>
<section class="section-container">

    <div class="container">
        <div class="tools-wrapper">
            <select name="" id="">
                <option value="">Filtrer</option>
                <option value="">Lorem.</option>
                <option value="">Lorem.</option>
            </select>
            <input type="search">
            
            <button id="btn_creation" style="margin-top: 20px;"> Cree un nouveau </button>
        </div>
    </div>

    <div class="module-wrapper">
        @forelse($pending_courses as $course)
            <x-course-item :course="$course" />
        @empty
            Aucun
        @endforelse
    </div>

    <div class="see-more">
        <button>Voir plus</button>
    </div>
</section>

@endsection