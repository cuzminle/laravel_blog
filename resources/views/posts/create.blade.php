@extends('layouts.main')
@section('content')
    <div class="w-25 mx-auto">
        <form action="{{route('posts.store')}}" method="post">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">title</label>
              <input 
              value="{{old('title')}}"
              type="text" name="title" class="form-control" id="title">
              @error('title')
                <p class="text-danger">{{$message}}</p>
              @enderror
            </div>
            <div class="mb-3">
              <label for="text" class="form-label">content</label>
              <textarea class="form-control" name="content" id="text" rows="3">{{old('content')}}</textarea>
              @error('content')
                <p class="text-danger">{{$message}}</p>
              @enderror
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">image</label>
              <input value="{{old('image')}}" type="text" name="image" class="form-control" id="image">
            </div>
            <label for="category">Category</label>
            <select class="form-control mb-3 mt-3" id="category" name="category_id">
              @foreach ($categories as $category)
                <option 
                {{old('category_id') == $category->id ? 'selected' : ''}}
                value="{{$category->id}}">{{$category->title}}</option>
              @endforeach
            </select>
            <label for="tag">Tag</label>
            <select multiple class="form-control mb-3 mt-3" id="tag" name="tags[]">
              @foreach ($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->title}}</option>
              @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Create</button>
          </form>
    </div>
@endsection
   
