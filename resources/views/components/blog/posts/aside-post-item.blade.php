<div class="each-blog">
    <h4>{{ $post->user->getFullName() }}</h4>
    <p>{{ $post->content }}</p>

    <div class="container-btn-reaction">
        <div class="single-reaction">
            <form class="svg-thumb">
                <button type="submit">&uarr;</button>
            </form>
            <p class="reaction-number">{{ $post->reaction->positive }}</p>
        </div>
        <div class="single-reaction">
            <form class="svg-thumb">
                <button type="submit">&darr;</button>
            </form>
            <p class="reaction-number">{{ $post->reaction->negative }}</p>
        </div>
    </div>
</div>