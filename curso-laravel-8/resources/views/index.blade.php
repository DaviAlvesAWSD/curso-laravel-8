<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>

    @include('components.postComponents.post')
    <hr>
    <a href="{{ route('posts.create') }}">Criar novo Post</a>

</body>
</html>
