
@vite(['resources/css/popup/survey/create-item.css', 'resources/js/survey/create-item-popup.js'])
<form class="create-item-popup active" action="">

    <!-- question -->
    <x-input label="Question" name="title" id="title"/>

    
    
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
        <label for="">Réponses</label>

        <input type="text">
        <input type="text">
        <input type="text">

        <button class="new-answers">
            @include('assets.svg.survey.new') <br>
        </button>
    </div>

    <button class="close-btn">
        @include('assets.svg.close')
    </button>


    <button type="submit">Valider</button>
</form>