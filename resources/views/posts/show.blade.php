@extends('layouts.main')
@section('content')
<div class="w-50 mx-auto">
    <div>
            <h1>{{$post->id}}. {{$post->title}}</h1>
            <h3>{{$post->content}}</h3>
            <img src="{{$post->image}}" class="card-img-top">
            <h6>{{$post->likes}}</h6>
    </div>
        <form class="d-inline" action="{{route('posts.delete', $post->id)}}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
        <div class="d-inline mt-3"><a class="btn btn-primary" href="{{route('posts.edit', $post->id)}}">edit</a></div>
        <div class="d-inline mt-3"><a class="btn btn-primary" href="{{route('posts.index')}}">Back</a></div>
</div>
    
@endsection
   