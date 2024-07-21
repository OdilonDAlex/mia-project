<?php

namespace App\Http\Controllers;

use App\Events\Blog\newPost;
use App\Http\Requests\Blog\comments\CreateCommentFormRequest;
use App\Http\Requests\Blog\posts\CreatePostFormRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(){
        return view('blog.index', [
            'recentPost' => Post::orderBy('created_at', 'desc')->limit(3)->get(),
            'posts' => Post::orderBy('created_at', 'desc')->get(),
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

        $reaction = $post->reaction()->create();

        $post->reaction()->associate($reaction);

        $post->save();
        
        newPost::dispatch($post);

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

    public function react(Request $request){

        $data = $request->validate([
            'type' => ['required', 'string', 'regex:/(positive|negative)/'],
            'post_id' => ['required', 'integer', 'exists:posts,id'],
        ]);

        $post = Post::find($data['post_id']);
        
        if($data['type'] == 'positive'){
            $post->reaction->positive += 1;
        }
        else {
            $post->reaction->negative += 1;
        }

        $post->reaction->save();
        $post->save();

        return redirect()->route('blog.index');
    }
}
