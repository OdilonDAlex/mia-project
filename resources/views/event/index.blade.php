@extends('base')

@section('title', 'MIA | Evenenement')

@vite('resources/css/event.css')

@section('content')
@if(isset($activated))
<div class="evenement_cliquer">
    <h1 class="event-title">{{ $activated->title }}</h1>
    <div class="evenement_principale">
        <div class="images">
        </div>
        <div class="container_identification">
            <span id="user_name">Publier par {{ $activated->author()->first()->getFullName() }}</span>
            <span id="interaction">
                {{ count($activated->users()->get()) }} personnes interessé(e)s
            </span>
        </div>

        <hr>

        <div class="container_description">
            <h1> Description </h1>
            <p style="color: rgb(89, 87, 87);">
                {{ $activated->description }}
            </p>

            <div>
                <button id="btn_plus"> Plus d'information</button>
                @auth
                    <button id="btn_interesse">{{ Auth::user()->isAttachedAt($activated) ? 'Interessée' : 'Interesser' }}</button>
                @endauth
            </div>

        </div>
    </div>
</div>
@else
    <p>Aucun event pour le moment</p>
@endif

<div class="liste_evenement">
    @forelse($events as $event)
        <x-event.item :title="$event->title" :description="$event->description" :date="$event->at"/> 
    @empty
        Aucun événement pour le moment
    @endforelse

</div>
@endsection