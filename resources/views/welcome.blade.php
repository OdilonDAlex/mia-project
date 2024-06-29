@extends('base')

@section('title', 'MIA | Accueil')

@vite(['resources/css/welcome.css', 'resources/js/slide.js'])

@section('content')
<div class="hero-area">

    <div class="presentation-convering">
        <h1>Lorem, ipsum dolor.</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, illum, doloribus autem esse officia temporibus consequuntur eius labore harum beatae inventore molestias necessitatibus, optio placeat velit nihil dolor totam repudiandae?</p>
        <button class="btn-see-more-information">En savoir plus</button>
        <button>En savoir plus</button>
    </div>

    <div class="illustration-wrapper">
        @include('assets.svg.hero-illustration')
    </div>
</div>

<div class="jumbotron">

    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>

    <div class="events-big-container">

        <div class="events-wrapper">
            <div class="event">
                <div>
                    <div class="event-title-wrapper">
                        <div class="circle-colored"></div>
                        <h3>Evenements</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperia us numquam porro quidem.
                </div>
            </div>

            <div class="event">
                <div class="event-title-wrapper">
                    <div class="circle-colored"></div>
                    <h3>Coaching</h3>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. possimus numquam porro quidem.</p>
            </div>

            <div class="event">
                <div class="event-title-wrapper">
                    <div class="circle-colored"></div>
                    <h3>Demande de Cercle</h3>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. possimus numquam porro quidem.</p>
            </div>

            <div class="event">
                <div class="event-title-wrapper">
                    <div class="circle-colored"></div>
                    <h3>Sondage</h3>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. possimus numquam porro quidem.</p>
            </div>

        </div>

    </div>

</div>

<div class="slide-big-wrapper">

    <h1>Evenements</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, id.</p>

    <div class="slide-container center">

        <div class="slide-item prev" style="background-color: rgb(184, 184, 184);">
            <h1>Lorem, ipsum.</h1>
        </div>

        <div class="slide-item active" style="background-color: rgb(169, 224, 169);">
            <h1>Lorem, ipsum.</h1>
        </div>

        <div class="slide-item next" style="background-color: rgb(238, 238, 178);">
            <h1>Lorem, ipsum.</h1>
        </div>

        <div class="slide-item" style="background-color: rgb(182, 182, 207);">
            <h1>Lorem, ipsum.</h1>
        </div>

        <div class="slide-item" style="background-color: rgb(219, 170, 219);">
            <h1>Lorem, ipsum.</h1>
        </div>

        <div class="slide-item" style="background-color: white;">
            <h1>Lorem, ipsum.</h1>
        </div>

        <div class="slide-buttons-container center absolute">
            <button id="forward">&lang;</button>
            <button id="backward">&rang;</button>
        </div>

    </div>

</div>

<div class="graduation-area">

    <div class="presentation-convering">
        <h1>Lorem ipsum dolor </h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit impedit aspernatur tempore et ducimus sint neque aliquid, vel dolore architecto soluta sunt veritatis necessitatibus dignissimos.</p>
        <button>Plus d'info</button>
    </div>

    <div class="illustration-wrapper">
        @include('assets.svg.fst-illustration')
    </div>

</div>


@endsection