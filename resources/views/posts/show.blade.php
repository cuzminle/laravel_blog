@extends('layouts.main')
@section('content')
    <div><a href="{{route('posts.edit', $post->id)}}">edit</a></div>
    <div>
            <h1>{{$post->id}}. {{$post->title}}</h1>
            <h3>{{$post->content}}</h3>
            <h6>{{$post->likes}}</h6>
    </div>
    <form action="{{route('posts.delete', $post->id)}}" method="post">
        @csrf
        @method('delete')
        <button class="btn btn-danger" type="submit">Delete</button>
    </form>
    <div><a href="{{route('posts.index')}}">Back</a></div>
@endsection
   