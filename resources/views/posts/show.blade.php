<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Posts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        
    </head>
        <h1>Blog Name</h1>
        <p class="edit">
            <a href="/posts/{{ $post->id }}/edit">edit</a>
        </p>
        <form action="/posts/{{$post->id}}" id="form__delete" method="post">
            @csrf
            @method("delete")
            <p id="form__delete" onClick="deletePost(this)" style="cursor:pointer">delete</p>
        </form>
        <div class="post">
            <h2 class="title">
                {{ $post->title }}
            </h2>
            
            <div class="content">
                <div class="content__post">
                    <h3>本文</h3>
                    <p>{{ $post->body }}</p>
                </div>
            </div>
        </div>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <script>
            function deletePost(e) {
                "use strict";
                if (confirm("削除すると復元できません。\n本当に削除しますか？")) {
                    document.getElementById("form__delete").submit();
                }
            }
        </script>
    <body>
        
    </body>
</html>
