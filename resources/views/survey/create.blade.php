@extends('base')

@section('title', 'Sondage | creation')

@vite(['resources/css/survey/create.css', 'resources/css/survey/survey-item.css', 'resources/js/survey/app.js'])

@section('body')
    @include('popup.survey.create')
    @include('popup.survey.create-item',  ['survey_id' => $selectedSurvey->id])
@endsection

@section('content')

    @include('survey.aside')
    <div class="main-content">
        <div class="survey-details">
            <h5 class="survey-title">
                {{ $selectedSurvey->title }}
            </h5>
            <p class="survey-description">
                {{ $selectedSurvey->description }}
            </p>
        </div>
        <div class="survey-items-container">

            @forelse($selectedSurveyItems as $item)
                <x-survey.creation.survey-item :survey-item="$item" :number="$loop->index"/>
            @empty
            @endforelse
            <button class="create-survey-item">
                @include('assets.svg.survey.new')
                Nouvelle question ?
            </button>
        </div>

        <form action="">
            <button class="publish-survey-button" type="submit">Publier</button>
        </form>
    </div>
@endsection