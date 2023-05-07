@extends('layouts.app')
@section('content')

<main class="container">
    <h3>Search posts by category</h3>
    <div>
        @foreach ($categories as category)
            <a href="">{{ $category->title }}</a>
        @endforeach
    </div>
</main>

@endsection