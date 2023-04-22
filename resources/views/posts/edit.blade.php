@extends('layouts.main')
@section('content')
    <div class="w-50">
        <form action="{{route('posts.update', $post->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">title</label>
              <input type="text" name="title" class="form-control" value="{{$post->title}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">text</label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1"  rows="3">{{$post->content}}</textarea>
              </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
    </div>
@endsection
   
