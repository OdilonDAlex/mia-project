@extends('base')

@section('title', 'MIA | Sondage')

@vite('resources/css/survey.css')

@section('content')

    <x-survey-item
        title="Tianao ve ny hiverenan'i Prof mecanique tamin' 2022 ? "
        content="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, nostrum alias! Aspernatur, eaque debitis."
        :interested=30
    />

    <x-survey-item
        title="Lorem."
        content="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, nostrum alias! Aspernatur, eaque debitis."
        :interested=15
    />

    <x-survey-item      
        title="Lorem, ipsum dolor."
        content="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, nostrum alias."
        :interested=75
    /> 

    <x-survey-item      
        title="Ipsum dolor."
        content="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, nostrum alias."
        :interested=1
    /> 
@endsection