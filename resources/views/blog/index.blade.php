@extends('base')

@section('title')

@vite('resources/css/blog.css')

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
        <p class="username">Lorem</p>

        <div class="container-all-tools">
            <div class="container-tools">
                <div class="acronym-user">AA</div>
                <textarea name="" id="" cols="30" rows="1" placeholder="A quoi pensez-vous?"></textarea>
            </div>
            <div class="items-colors">
                <p class="color"></p>
                <p class="color"></p>
                <p class="color"></p>
                <p class="color"></p>
                <p class="color"></p>
                <p class="color"></p>
                <p class="color"></p>
                <p class="color"></p>
            </div>
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
            tsisy commentaire lty ah...
        @endforelse
        @empty
            Tsisy posts mintsy lty ah...
        @endforelse
    </div>

    <div class="container-comments-pop-up">
        <div class="comments-pop-up">
            <div class="info-blog">
                <div class="info-user">
                    <div class="acronym-user">An</div>
                    <div class="username-and-date">
                        <p class="author-name">Author Name</p>
                        <p class="date-pub">1 min</p>
                    </div>
                </div>
                <div class="desciption-container">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt praesentium quaerat provident explicabo. Mollitia, totam! Atque deserunt ipsam consequatur est vero suscipit corporis facere, possimus quis, repellendus quia quos ex.</p>
                    <div class="recation-container">
                        <div class="btn-reaction">
                            <div class="single-reaction">
                                <form class="svg-thumb">
                                    <button type="submit">&uarr;</button>
                                </form>
                                <p class="reaction-number">23</p>
                            </div>
                            <div class="single-reaction">
                                <form class="svg-thumb">
                                    <button type="submit">&darr;</button>
                                </form>
                                <p class="reaction-number">10</p>
                            </div>
                        </div>
                        <p class="comments-number">Commentaires 30</p>
                    </div>
                </div>
                <div class="comments-tools">
                    <textarea name="" id="" placeholder="Ecrivez ici..."></textarea>
                    <button type="submit">Commenter</button>
                </div>
            </div>

            <div class="all-comments">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis saepe ipsa ut. Officia dicta optio ad minima omnis natus. Quam placeat tempora quo. Hic quisquam repellat officiis maiores perferendis minus!
            </div>
        </div>
    </div>
</main>
@vite('resources/js/blog-post-setting.js')
@endsection