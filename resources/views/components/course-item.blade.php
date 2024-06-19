<div class="module-container">
    <div class="module-name-and-date-wrapper">
        <h3>{{ $course->title }}</h3>
        <button>{{ (new Carbon\Carbon($course->at))->format('D m') }}</button>
    </div>
    @if((bool)$course->description)
        <p>{{ $course->description }}</p>
    @else
        <p>Aucune description</p>
    @endif
    <div class="reactions">
        <p>10 personne interesse</p>
        <button class="btn-interested">interesser</button>
    </div>
</div>