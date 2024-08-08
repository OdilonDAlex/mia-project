@vite(['resources/css/survey/aside.css', 'resources/js/survey/accordeon.js'])
<aside>
    <h3 class="aside-title">Mes sondages</h3>
    <section class="unpublished-survey">
        <h4>Non publié</h4>
        <div class="accordeon survey">
            <button aria-label="Titre du sondage" class="surve-title show-description">
                Lorem, ipsum dolor.
            </button>
            <p class="survey-description">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, laboriosam?
            </p>
        </div>
        <div class="accordeon survey">
            <button aria-label="Titre du sondage" class="surve-title show-description">
                Lorem ipsum dolor sit.
            </button>
            <p class="survey-description">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, laboriosam?
            </p>
        </div>
    </section>
    <section class="published-survey">
    <div class="accordeon survey">
            <h4>déjà Publié</h4>
            <button aria-label="Titre du sondage" class="surve-title show-description">
                Lorem, ipsum.
            </button>
            <p class="survey-description">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, laboriosam?
            </p>
        </div>
        <div class="accordeon survey">
            <button aria-label="Titre du sondage" class="surve-title show-description">
                Lorem, ipsum dolor.
            </button>
            <p class="survey-description">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, laboriosam?
            </p>
        </div>
    </section>
</aside>