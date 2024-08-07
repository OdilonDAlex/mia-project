@extends('base')

@section('title', 'Sondage | creation')

@vite(['resources/css/survey/create.css', 'resources/css/survey/survey-item.css'])

@section('content')

    @include('survey.aside')
    <div class="main-content">
        <div class="survey-details">
            <h5 class="survey-title">
                Projet etude ensemble L3 MIA
            </h5>
            <p class="survey-description">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat quis, culpa iure delectus nihil sapiente.
            </p>
        </div>
        <div class="survey-items-container">
            <div class="survey-item">
                <div class="survey-item-header">
                    <p>Question 1</p>
                    <button class="option-button">...</button>
                </div>
                <div class="survey-item-body">
                    <h6>Lorem ipsum dolor sit ?</h6>
                    <small>5 réponses prédéfinies</small>
                </div>
            </div>
            <div class="survey-item">
                <div class="survey-item-header">
                    <p>Question 2</p>
                    <button class="option-button">...</button>
                </div>
                <div class="survey-item-body">
                    <h6>Lorem, ipsum dolor ?</h6>
                    <small>pas de réponse prédéfinie</small>
                </div>
            </div>
            <div class="survey-item">
                <div class="survey-item-header">
                    <p>Question 3</p>
                    <button class="option-button">...</button>
                </div>
                <div class="survey-item-body">
                    <h6>Lorem ipsum dolor sit amet ?</h6>
                    <small>2 réponses prédéfinies</small>
                </div>
            </div>
            <div class="survey-item">
                <div class="survey-item-header">
                    <p>Question 4</p>
                    <button class="option-button">...</button>
                </div>
                <div class="survey-item-body">
                    <h6>Lorem ipsum amet consectetur ?</h6>
                    <small>1 réponse prédéfinie</small>
                </div>
            </div>
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