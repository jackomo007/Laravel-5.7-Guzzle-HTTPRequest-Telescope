<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>Blog</title>
</head>
<body>
    <div class="container">
        <h1>Publicaciones</h1>
    <div class="panel panel-default">
        <div class="panel-header">
            <h1>{{ $post->title }}</h1>
        </div>
        <div class="panel-body">
                {{ $post->body }}
            <br>
            <a href="/">Regresar</a>
        </div>
    </div>
    </div>
</body>
</html>