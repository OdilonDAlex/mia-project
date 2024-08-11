@vite(['resources/js/survey/store.js', 'resources/css/popup/survey/create.css'])
<form action="" class="create-survey" name="createSurveyForm">

    <!-- Titre du sondage -->
    <x-input label="Titre du sondage" type="title" name="title" id="title"/>

    <!-- description -->
    <div class="textarea">
        <label for="description">Description</label><br>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>  

    <button class="close-btn">
        @include('assets.svg.close')
    </button>
    
    <x-input value="Créer" type="submit"/>


</form>