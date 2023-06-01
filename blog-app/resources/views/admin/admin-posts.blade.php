@extends('layouts.admin')
@section('content')
    <h3>Recent Posts: </h3>
    <ul>
        @foreach ($recent_posts as $post)
            <li>$post->title</li>
        @endforeach
    </ul>
@endsection