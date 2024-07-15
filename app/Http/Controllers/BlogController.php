<?php

namespace App\Http\Controllers;

use App\Http\Requests\Blog\comments\CreateCommentFormRequest;
use App\Http\Requests\Blog\posts\CreatePostFormRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(){
        return view('blog.index', [
            'posts' => Post::all(),
        ]);
    }


    public function createPost(){
        return view('blog.post.create');
    }

    public function storePost(CreatePostFormRequest $request){

        /**
         * @var User $user
         */
        $user = Auth::user();
        $post = $user->posts()->create($request->validated());

        $post->reaction()->create();

        return redirect()->route('blog.index')->with('newPost', 'Publication créer avec succée');
    }

    public function createComment(Post $post){
        return view('blog.comment.create', [
            'post' => $post,
        ]);
    }

    public function storeComment(CreateCommentFormRequest $request){
        $requestData = $request->validated();

        $post = Post::find($requestData['post_id']);

        $post->comments()->create(['content' => $requestData['content']]);

        return redirect()->route('blog.index', ['newComment', 'Commentaire créer sur le post: ' . $post->id]);
    }
}
