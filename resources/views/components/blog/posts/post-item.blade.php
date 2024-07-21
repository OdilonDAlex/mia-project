
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
                <form class="svg-thumb" method="POST" name="reactionPositive" action="{{ route('blog.posts.react') }}">
                    @method('patch')
                    @csrf
                    
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <input type="hidden" name="type" value="positive">
                    <button type="submit">&uarr;</button>
                </form>
                <p class="reaction-number">{{ $post->reaction->positive }}</p>
            </div>
            <div class="single-reaction">
                <form class="svg-thumb" method="POST" name="reactionNegative" action="{{ route('blog.posts.react') }}">
                    @method('patch')
                    @csrf

                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <input type="hidden" name="type" value="negative">
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