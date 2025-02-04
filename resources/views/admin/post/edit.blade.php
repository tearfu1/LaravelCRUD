@extends('layouts.admin')
@section('content')
    <div>
        <form action="{{ route("admin.post.update",$post->id )}}" method="post">
            @csrf
            @method("patch")
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Your beautiful title"
                       value="{{ $post->title }}">
                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" name="content" id="content"
                          placeholder="Your beautiful title">{{ $post->content }}</textarea>
                @error('content')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="Your beautiful image link"
                       value="{{ $post->image }}">
                @error('image')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select class="form-control" name="category_id" id="category_id">
                    @foreach($categories as $category)
                        <option
                            {{ $category->id === $post->category_id ? "selected" : ""}} value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                <select multiple class="form-control" id="tags" name="tags[]">
                    @foreach($tags as $tag)
                        <option
                            @foreach($post->tags as $postTag)
                                {{ $postTag->id == $tag->id ? "selected": ""}}
                            @endforeach
                            value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                </select>
                @error('tags')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection
