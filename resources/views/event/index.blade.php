@extends('base')

@section('title', 'MIA | Evenenement')

@vite('resources/css/event.css')

@section('content')
<div class="evenement_cliquer">
    <div class="evenement_principale">
        <div class="images">
        </div>
        <div class="container_identification">
            <span id="user_name">Publier par Rasoa</span>
            <span id="interaction">0 personnes interessé(e)s</span>
        </div>

        <hr>

        <div class="container_description">
            <h1> Description </h1>
            <p style="color: rgb(89, 87, 87);"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel cumque
                omnis quod totam animi voluptatem eligendi, nemo dolores dignissimos, eaque quas deleniti!
                Doloremque, reiciendis unde velit culpa ad saepe neque?</p>

            <div>
                <button id="btn_plus"> Plus d'information</button>
                <button id="btn_interesse"> Interessé</button>
            </div>

        </div>
    </div>
</div>

<div class="liste_evenement">
    <x-event.item title="Lorem ispum" description="Lorem ipsum dolor set amit, conceptus dolor." date="20 Juin 2026"/>

    <div class="div_evenement">
        <h2> Titre </h2>
        <p class="description"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, autem?</p>
        <p class="date">11/06/2024</p>
    </div>

</div>
@endsection