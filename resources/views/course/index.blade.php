@extends('base')

@section('title', 'MIA | Cercle')

@vite('resources/css/course.css')

@section('content')
<div class="create-new-students-group-convering">
    <h1>Cercle a Venir</h1>
    <button class="btn-create-new-students-group">Creer Un cercle</button>
</div>
<section class="section-container">
    <div class="container">
        <div class="tools-wrapper">
            <select name="" id="">
                <option value="">Filtrer</option>
                <option value="">Lorem.</option>
                <option value="">Lorem.</option>
            </select>
            <div class="input-search-conjuring">
                <input type="search" placeholder="Recherche..">
                <button class="btn-icon-search">
                    @include('assets.svg.search-bar')
                </button>
            </div>
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



<!-- <h1>Demande de cercle</h1>
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
</section> -->

@endsection