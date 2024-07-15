<?php

namespace App\View\Components\Blog\posts;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Post $post,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blog.posts.post-item');
    }
}

/*
<div class="list-blogs">
    @forelse($posts as $post)

        <!-- Debut Affiche Post -->

        <x-blog.posts.post-item :post="$post"/>    

        <!-- fin affichage post -->
        @php
        $comments = $post->comments()->get();
        @endphp
            <h3>Commentaires</h3>
        @forelse($comments as $comment)
            <center>
                <p>{{ $comment->content }}</p>
            </center>
        @empty
            Aucun commentaire
        @endforelse
        @empty
            Tsisy posts mintsy lty ah...
        @endforelse
    </div>
*/