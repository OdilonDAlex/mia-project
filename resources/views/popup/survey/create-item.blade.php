
@vite(['resources/css/popup/survey/create-item.css', 'resources/js/survey/create-item-popup.js'])
<form class="create-item-popup active" action="">
    <input type="hidden" name="survey_id" value="{{ $survey_id }}">
    <!-- question -->
    <x-input label="Question" name="question" id="question"/>

    
    <div class="answer-type-container">
        <label for="type">Type de réponse</label>
        <select name="type" id="type">
            <option value="text" selected>Texte</option>
            <option value="numeric">Numérique</option>
            <option value="boolean">Oui ou Non</option>
        </select>
    </div>

    <div class="answers">
        <!-- reponses -->
        <label for="">Réponses</label><br>

        <div class="answer">
            <label class="answer-index" for="">1</label>
            <input type="text">
        </div>

        <div class="answer">
            <label class="answer-index" for="">2</label>
            <input type="text">
        </div>

        <button class="new-answers">
            @include('assets.svg.survey.new') <br>
        </button>
    </div>

    <button class="close-btn">
        @include('assets.svg.close')
    </button>


    <button type="submit">Valider</button>
</form>