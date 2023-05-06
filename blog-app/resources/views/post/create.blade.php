@extends('layouts.app')
@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a class="mb-3" href={{ route('blogs.index') }}><< Back</a>
                <div class="card">
                    <h2 class="card-header text-center">Create new post</h2>
                    <div class="card-body">
                        <form action="{{ route('blogs.store') }}" method="POST">
                            @csrf
                            {{-- Title and Category of the post --}}
                            <div class="row">
                                <div class="form-group mb-3 col-md-8">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" id="title" name="title" class="form-control" required autofocus />
                                </div>
                                <div class="form-group mb-3 col-md-4">
                                    <label for="category" class="form-label">Category</label>
                                    <select id="category" name="category" class="form-select">
                                    @foreach ($categories as $category)
                                        <option value='{{ $category->title }}'>{{ $category->title }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- Body of the post --}}
                            <div class="form-group mb-3">
                                <label for="body" class="form-label">Please write your content of the post here:</label>
                                <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="mx-auto">
                                <button type="submit" class="btn btn-success ">Add Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

