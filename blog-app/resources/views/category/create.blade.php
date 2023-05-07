@extends('layouts.app')
@section('content')
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h2>Create new Category</h2>
                    <div class="card-body">
                        <form action="{{ route('category.create') }}">
                            <label for="title" class="form-label">
                                Title
                            </label>
                            <input type="text" id="title" name="title" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection