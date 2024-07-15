<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation de commentaire</title>
</head>
<body>
    <h1>commenter:<br>{{ $post->content }}</h1>
    <form action="{{ route('blog.comments.store') }}" method="POST">
        @csrf

        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <label for="content">Contenu</label>
        <textarea name="content" id="content" cols="30" rows="10" placeholder="Contenu du commentaire"></textarea>
        <button type="submit">
            Créer
        </button>
    </form>
</body>
</html>