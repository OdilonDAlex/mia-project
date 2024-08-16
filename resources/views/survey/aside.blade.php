@vite(['resources/css/survey/aside.css', 'resources/js/survey/accordeon.js'])
<aside>
    @php
        try {
            $selectedSurveyId = $selectedSurvey->id;
        }
        catch(Exception $e){ $selectedSurveyId = null; }
    @endphp
    <h3 class="aside-title">Mes sondages</h3>
    <section class="unpublished-survey">
        <h4>Non publié</h4>
        @forelse($unpublishedSurveys as $survey)
            <div class="accordeon survey">
                <button aria-label="Titre du sondage" class="survey-title show-description {{ $selectedSurveyId == $survey->id ? 'selected' : '' }}">
                    {{ $survey->title }}
                    <a class="edit-survey" href="{{ route('survey.create', ['survey_id' => $survey->id]) }}">Modifier</a>
                </button>
                <p class="survey-description">
                    {{ $survey->description }}
                </p>
            </div>    
        @empty
            <p class="empty">Aucun</p>
        @endforelse
    </section>

    <section class="published-survey">
        <h4>déjà Publié</h4>

        @forelse($publishedSurveys as $survey)
            <div class="accordeon survey">
                <button aria-label="Titre du sondage" class="surve-title show-description">
                    {{ $survey->title }}
                </button>
                <p class="survey-description">
                    {{ $survey->description }}
                </p>
            </div>    
        @empty
        <p class="empty">Aucun</p>
        @endforelse
    </section>
    <button class="create-survey">
        Créer
    </button>
</aside>