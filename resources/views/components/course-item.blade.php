<div class="module-container">
    <div class="module-name-and-date-wrapper">
        <h3>{{ $course->title }}</h3>
        <button>{{ $course->at }}</button>
    </div>
    @if((bool)$course->description)
        <p>{{ $course->description }}</p>
    @endif
    <div class="reactions">
        <p>10 personne interesse</p>
        <button class="btn-interested">interesser</button>
    </div>
</div>