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
        @extends ("layouts.app")
        
        @section("content")
        <h1>Blog Name</h1>
        <p class="create">
            <a href="/posts/create">create</a>
        </p>
        <div class="posts">
            @foreach ($posts as $post)
                <div class="post">
                    <h2 class="title">
                        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                    </h2>
                    
                    <a href="/categories/{{$post->category->id}}">{{$post->category->name}}</a>
                    
                    <p class="body">{{$post->body}}</p>
                </div>
            @endforeach
        </div>
        
        <div class="paginate">
            {{ $posts->links() }}
        </div>
        @endsection
    </body>
</html>