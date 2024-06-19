@extends('base')

@section('title', 'MIA | Sondage')

@vite('resources/css/survey.css')

@section('content')

    @forelse($surveys as $survey)
        <x-survey-item
            :title="$survey->title"
            :content="$survey->description"
            :interested=1
        />
    @empty
        Aucun
    @endforelse
@endsection