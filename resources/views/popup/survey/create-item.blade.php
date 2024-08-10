
@vite(['resources/css/popup/survey/create-item.css', 'resources/js/survey/create-item-popup.js'])
<form class="create-item-popup active" action="">

    <!-- question -->
    <x-input label="Question" name="title" id="title"/>

    <!-- reponses -->
    <h5>Réponse(s) prédéfinie(s)</h5>
    <div class="answers">
        <button class="new-answers">
            @include('assets.svg.survey.new') <br>
            nouvelle réponse
        </button>
    </div>

    <button class="close-btn">
        @include('assets.svg.close')
    </button>


    <button type="submit">Valider</button>
</form>