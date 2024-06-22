<div class="module-container">
    <div class="module-name-and-date-wrapper">
        <h3>{{ $course->title }}</h3>
        <button>{{ (new Carbon\Carbon($course->at))->format('D d') }}</button>
    </div>
    @if((bool)$course->description)
        <p>{{  Str::limit($course->description, 200, '...')  }}</p>
    @else
        <p>Aucune description</p>
    @endif
    <small>avec {{ $course->author->getFullName() }}</small>
    <div class="reactions">
        @php
            $interstedUsers = $course->getInterestedUser();
        @endphp
        <p>{{ $interstedUsers == 0 ? 'Aucun' : $interstedUsers }} personne{{ $interstedUsers > 1 ? 's' : '' }} interessé(e){{ $interstedUsers > 1 ?  's' : '' }}</p>
        <button class="btn-interested">Interesser</button>
    </div>
</div>