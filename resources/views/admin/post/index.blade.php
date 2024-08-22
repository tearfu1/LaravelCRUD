@extends('layouts.admin')
@section('content')
    @foreach($posts as $post)
        <div><a href="{{route('admin.post.show',$post->id)}}">{{ $post->id }}. {{ $post->title }}</a></div>
    @endforeach
    <div>
        {{ $posts->withQueryString()->links() }}
    </div>
@endsection
