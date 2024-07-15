<?php

namespace App\View\Components\Blog\posts;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AsidePostItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Post $post
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blog.posts.aside-post-item');
    }
}
