@extends('components.layout')
@section('content')
     @include('postHeader')


        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            @if($posts->count())
            <x-postFeaturedCard :post="$posts[0]" />

            
            
            <div class="lg:grid lg:grid-cols-2">
            @if($posts->count()>1)
            @foreach($posts->skip(1) as $post)
            <x-postCard :post="$post"/>
            @endforeach
                
        </div>
        @endif
        @else
        <p class="text-center">No posts yet.Please check later</p>
        @endif

            
                
        </div>
    </main>
        


@endsection