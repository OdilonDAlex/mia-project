<div class="survey-item">
    @php
        $question = $surveyItem->question()->first();

        // a changer plus tard ( en utilisant une fonction d'aggregation )
        $answersCount = count($surveyItem->answers()->get()->toArray());
    @endphp
    <div class="survey-item-header">
        <p>Question {{ $number }}</p>
        <button class="option-button">...</button>
    </div>
    <div class="survey-item-body">
        <h6>{{ $question->content }}</h6>
        <small>{{ $answersCount }} reponse{{ $answersCount > 1  ? 's' : ''}} prédéfinie{{ $answersCount > 1 : 's' : ''}}</small>
    </div>
</div>