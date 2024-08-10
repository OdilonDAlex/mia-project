@vite(['resources/css/popup/survey/create-answer.css', 'resources/js/survey/create-answer.js'])
<form class="create-answer" action="">

    <!-- type de réponse prédéfini -->
    <div>
        <label for="type">Type de réponse</label><br>
        <select name="type" id="type">
            <option value="text">Texte</option>
            <option value="numeric">Numérique</option>
            <option value="text">Oui ou Non</option>
        </select>
    </div>

    <!-- reponses -->
    <div>
        <label for="value">valeur</label><br>
        <input type="text" value="value">
    </div>

    <button class="close-btn">
        @include('assets.svg.close')
    </button>

    <button type="submit">Valider</button>
</form>