@extends('layouts.admin')
@section('content')
    <div>{{ $post->id }}. {{ $post->title }}</div>
    <div>{{ $post->content }}</div>
    <div>
        <form action="{{ route("admin.post.edit", $post->id) }}">
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
    <div>
        <form action="{{ route("admin.post.destroy", $post->id) }}" method="post">
            @csrf
            @method("delete")
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
