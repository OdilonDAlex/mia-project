<div class="container-single-blog">
    <div class="head-blog">
        <div class="info-user">
        <div class="acronym-user">{{ $post->user->getUserProfile() }}</div>
            <div class="username-and-date">
                <p class="author-name">{{ $post->user->getFullName() }}</p>
                <p class="date-pub">{{ $post->getCreationaDateTime() }}</p>
            </div>
        </div>
        <div class="plus-info">
            <p class="three-dots">⁝</p>
        </div>
    </div>

    <div class="content">
        <p>{{ $post->content }}</p>
    </div>

    <div class="container-btn">
        <div class="btn-reaction">
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
                <p class="reaction-number">{{$post->reaction->negative }}</p>
            </div>
        </div>

        <form action="{{ route('blog.comments.create', ['post' => $post]) }}" method="GET">

            <button type="submit" class="btn-comment">Commenter</button>
        </form>
    </div>

    <div class="see-all-comments">
        <p class="see-comments">Voir plus de commentaires <span>▼</span></p>
    </div>
</div>