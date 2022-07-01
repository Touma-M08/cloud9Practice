<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        <h1>edit</h1>
        <form action="/posts/{{ $post->id }}" method="post">
            @csrf
            @method("put")
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" value="{{ $post->title }}" />
                <p class="title__error" style="color:red">{{ $errors->first("post.title") }}</p>
            </div>
            
            <div class="body">
                <h2>body</h2>
                <textarea name="post[body]" >{{ $post->body }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first("post.body") }}</p>
            </div>
            
            <input type="submit" value="update" />
            <div class="back">
                <a href="/posts/{{ $post->id }}">back</a>
            </div>
        </form>
    </body>
</html>