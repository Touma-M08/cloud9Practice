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
        <h1>Blog Name</h1>
        <form action="/posts" method="post">
            {{ csrf_field() }}
            <div class="title">
                <h2 class="title">Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" />
            </div>
            
            <div class="body">
                <h2>body</h2>
                <textarea name="post[body]" placeholder="今日も一日お疲れ様でした。" ></textarea>
            </div>
            
            <input type="submit" value="store" />
            
            <div class="back">
                <a href="/">back</a>
            </div>
        </form>
    </body>
</html>