@extends('layouts.main')
@section('content')
    @foreach($posts as $post)
        <div><a href="{{route('post.show',$post->id)}}">{{ $post->id }}. {{ $post->title }}</a></div>
    @endforeach
    <div>
        {{ $posts->withQueryString()->links() }}
    </div>
@endsection
