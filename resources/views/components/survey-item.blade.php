@vite('resources/css/survey-item.css')
<div class="survey-item">
    <h1>{{ $title }}</h1>
    
    <div class="content">
        <p>{{ $content }}</p>
    </div>

    <div class="survey-item-footer">
        <span><strong>{{ $interested }}</strong> personne{{ $interested > 1 ? 's ont' : ' a' }} déjà fait</span>
        <button>Faire le sondage</button>
    </div>
</div>