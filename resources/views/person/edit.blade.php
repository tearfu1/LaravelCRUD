@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route("post.update",$post->id )}}" method="post">
            @csrf
            @method("patch")
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Your beautiful title"
                       value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" name="content" id="content"
                          placeholder="Your beautiful title">{{ $post->content }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="Your beautiful image link"
                       value="{{ $post->image }}">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection