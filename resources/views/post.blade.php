
<html>
    <title>MY blog</title>
    <link rel="stylesheet" href="/app.css">
    <body>
        
       <h1> <a href="/posts/{{$post->id}}">{{$post->title}}</a></h1>
        <p>
            {{$post->excerpt}}
        </p>

        
    </body>
</html>