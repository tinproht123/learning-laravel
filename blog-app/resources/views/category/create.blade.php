@extends('layouts.app')
@section('content')
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h2>Create new Category</h2>
                    <div class="card-body">
                        <form action="{{ route('category.create') }}">
                            <div class="form-group mb-3">
                                <label for="title" class="form-label">
                                    Title of new category
                                </label>
                                <input type="text" id="title" name="title" required autofocus />
                            </div>
                            <div class="form-group mb-3">
                                <label for="description" class="form-label">
                                    Description
                                </label>
                                <textarea name="description" id="description" cols="30" rows="10" required></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection