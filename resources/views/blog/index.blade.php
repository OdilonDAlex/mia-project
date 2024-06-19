@extends('base')

@section('title')

@vite(['resources/js/blog-post-setting.js', 'resources/css/blog.css'])

@section('content')

<aside class="left-side-container">
    <div class="left-container">
        <div class="extract-blog">
            <h1>Les postes recentes</h1>
            
            <div class="extract-blog-container">
                <div class="each-blog">
                    <h3>Ysername B!gosy</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, reiciendis. Eligendi accusamus rem at dolor.</p>

                    <div class="btn-reaction">
                        <div class="single-reaction">
                            <div class="svg-thumb"></div>
                            <p class="reaction-number">23</p>
                        </div>
                        <div class="single-reaction">
                            <div class="svg-thumb"></div>
                            <p class="reaction-number">10</p>
                        </div>
                    </div>
                </div>
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
                <textarea name="" id="" placeholder="A quoi pensez-vous?"></textarea>
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

    <!-- blogs -->
    <div class="list-blogs">
        <div class="container-single-blog">
            <div class="head-blog">
                <div class="info-user">
                    <div class="acronym-user">An</div>
                    <div class="username-and-date">
                        <p class="author-name">Author Name</p>
                        <p class="date-pub">1 min</p>
                    </div>
                </div>
                <div class="plus-info">
                    <p class="three-dots">⁝</p>
                </div>
            </div>

            <div class="blog-content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti quo aliquid, quibusdam et fugiat ad molestiae praesentium eaque, harum recusandae?</p>
            </div>

            <div class="container-btn">
                <div class="btn-reaction">
                    <div class="single-reaction">
                        <div class="svg-thumb"></div>
                        <p class="reaction-number">23</p>
                    </div>
                    <div class="single-reaction">
                        <div class="svg-thumb"></div>
                        <p class="reaction-number">10</p>
                    </div>
                </div>

                <div class="container-comments">
                    <button class="btn-comment">Commenter</button>
                </div>
            </div>

            <div class="all-comments">
                <p class="see-comments">Voir plus de commentaires <span>▼</span></p>
            </div>
        </div>

        <div class="container-single-blog">
            <div class="head-blog">
                <div class="info-user">
                    <div class="acronym-user">An</div>
                    <div class="username-and-date">
                        <p class="author-name">Author Name</p>
                        <p class="date-pub">1 min</p>
                    </div>
                </div>
                <div class="plus-info">
                    <p class="three-dots">⁝</p>
                </div>
            </div>

            <div class="blog-content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti quo aliquid, quibusdam et fugiat ad molestiae praesentium eaque, harum recusandae?</p>
            </div>

            <div class="container-btn">
                <div class="btn-reaction">
                    <div class="single-reaction">
                        <div class="svg-thumb"></div>
                        <p class="reaction-number">23</p>
                    </div>
                    <div class="single-reaction">
                        <div class="svg-thumb"></div>
                        <p class="reaction-number">10</p>
                    </div>
                </div>
                <button class="btn-comment">Commenter</button>
            </div>

            <div class="all-comments">
                <p class="see-comments">Voir plus de commentaires <span>▼</span></p>
            </div>
        </div>
    </div>
</main>
</section>
@endsection