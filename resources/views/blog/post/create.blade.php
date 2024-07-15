<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation de publication</title>
</head>
<body>
    <form action="{{ route('blog.posts.store') }}" method="POST">
        @csrf    

        <label for="content">Contenu</label>
        <textarea name="content" id="content" cols="30" rows="10" placeholder="Contenu du publication"></textarea>

        <button type="submit">
            Créer
        </button>
    </form>
</body>
</html>