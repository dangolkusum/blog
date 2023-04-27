<html>
    <title>MY blog</title>
    <link rel="stylesheet" href="../resources/app.css">
    <body>
        @foreach($posts as $post)
        <a href="/post/{{$post->id}}"><h1>{{$post->title}}</h1></a>
        <p>
            {{$post->excerpt}}
        </p>
        @endforeach
        

        
    </body>
</html>