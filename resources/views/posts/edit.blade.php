@extends('layouts.app')
@section('content')
    <div class="w-50 mx-auto">
        <form action="{{route('posts.update', $post->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">title</label>
              <input type="text" name="title" class="form-control" value="{{$post->title}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">content</label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1"  rows="3">{{$post->content}}</textarea>
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">image</label>
              <input type="text" name="image" class="form-control" id="image" value="{{$post->image}}">
            </div>
            <label for="category">Category</label>
            <select class="form-control mb-3 mt-3" id="category" name="category_id">
              @foreach ($categories as $category)
                <option 
                {{$category->id === $post->category->id ? 'selected' : ''}}
                value="{{$category->id}}">{{$category->title}}</option>
              @endforeach
            </select>
            <label for="tag">Tag</label>
            <select multiple class="form-control mb-3 mt-3" id="tag" name="tags[]">
              @foreach ($tags as $tag)
                <option 
                @foreach ($post->tags as $postTag)
                  {{$tag->id === $postTag->id ? 'selected' : ''}}
                @endforeach
                value="{{$tag->id}}">{{$tag->title}}</option>
              @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
    </div>
@endsection
   
