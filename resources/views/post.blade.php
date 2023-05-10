
@extends('layout')
@section('content')
       <h1> {{$post->title}}</h1>
       <p>
            <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a>
        </p>
        <p>
            {{$post->body}}
        </p>

        <p>
            <a href="{{url()->previous()}}">go back</a>
        </p>
       
@endsection