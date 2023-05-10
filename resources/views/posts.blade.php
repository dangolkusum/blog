@extends('layout')
@section('content')
        @foreach($posts as $post)
        
        
        <a href="/post/{{$post->slug}}"><h1>{{$post->title}}</h1></a>
        <p>
            <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a>
        </p>
        
        <p>
            {{$post->excerpt}}
        </p>
        @endforeach
        
@endsection