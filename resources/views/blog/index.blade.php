@extends('base')

@section('title')

@vite(['resources/css/blog.css', 'resources/css/post-comment.css'])

@section('content')
@php
use Illuminate\Support\Facades\Vite;
@endphp

<aside class="left-side-container">
    <div class="left-container">
        <div class="extract-blog">
            <h1>Les postes recentes</h1>

            <div class="extract-blog-container">
                @forelse($recentPost as $post)
                    <x-blog.posts.aside-post-item :post="$post"/>
                @empty
                    Tsisy alo lty ah...
                @endforelse
            </div>
        </div>
    </div>
</aside>

<main class="container-blog">
    <div class="create-blog">
        <div class="container-all-tools">
            <textarea name="" id="" cols="30" rows="1" placeholder="A quoi pensez-vous?" class="txtarea-create-post"></textarea>
        </div>
    </div>

    @if(session('newPost'))
        <p>{{ session('newPost') }}</p>
    @elseif(session('newComment'))
        <p>{{ session('newComment') }}</p>
    @endif
    <!-- blogs -->

    <a href="{{ route('blog.posts.create') }}">Créer un post</a>
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
            asiana commentaires azafady na reaction mety daholo...
        @endforelse
        @empty
            Tsisy posts mintsy lty ah...
        @endforelse
    </div>
</main>

@vite('resources/js/new-blog-setting.js')
@endsection