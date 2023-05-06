@extends('layouts.app')
@section('content')
    <main>
        <div class="container">
            <a href={{ route('blogs.create') }} class='btn btn-success rounded rounded-pill mb-3'>Create new Post</a>
            <div>
                <h4>Your posts</h4>
                <ul class="list-group">
                    @foreach ($posts as $post)
                        <li class="list-group-item">
                            <h3>{{ $post->title }}</h3>
                            @foreach ($post->categories as $category)
                            <div class='badge rounded-pill bg-primary'>{{ $category->title }}</div>
                            @endforeach
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
@endsection
