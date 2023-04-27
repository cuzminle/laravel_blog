@extends('layouts.main')
@section('content')
    <div>
        @foreach ($posts as $post)
        <div class="card mx-auto mt-3" style="width: 50rem;">
            <img src="{{$post->image}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$post->id}}. {{$post->title}}</h5>
              <p class="card-text">{{$post->content}}</p>
              <h6>{{$post->likes}}</h6>
              <a href="{{route('posts.show', $post->id)}}" class="btn btn-primary">Show</a>
            </div>
          </div>
          @endforeach
    </div>
    <div>
      {{$posts->withQueryString()->links()}}
    </div>
@endsection
   
