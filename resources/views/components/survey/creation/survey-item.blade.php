<div class="survey-item">
    <input type="hidden" name="surveyItem_id" value="{{ $surveyItem->id }}">
    @php
        $question = $surveyItem->question()->first();

        // a changer plus tard ( en utilisant une fonction d'aggregation )
        $answersCount = count($surveyItem->answers()->get()->toArray());
    @endphp
    <div class="survey-item-header">
        <p>Question {{ $number + 1 }}</p>
        <button class="option-button">...</button>
    </div>
    <div class="survey-item-body">
        <h6>{{ $question->content ?? 'Aucune question'}}</h6>
        <small>{{ $answersCount }} reponse{{ $answersCount > 1  ? 's' : ''}} prédéfinie{{ $answersCount > 1 ? 's' : ''}}</small>
    </div>

    <div class="action">
        <button class="edit">Modifier</button>
        <button class="delete">Supprimer</button>
    </div>
</div>