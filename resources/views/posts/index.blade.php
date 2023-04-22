@extends('layouts.main')
@section('content')
    <div>
        @foreach ($posts as $post)
            <h1>{{$post->id}}. <a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h1>
        @endforeach
    </div>
@endsection
   
