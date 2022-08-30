@extends('layouts.app')

@section('main_content')
    <div class="main-container">
        <h1>
            Create your product
        </h1>
        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="title" name="title">
                <label for="title">Title</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="series" name="series">
                <label for="series">Series</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="type" name="type">
                <label for="type">Type</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="price" name="price">
                <label for="price">Price</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="sale_date" name="sale_date">
                <label for="sale_date">Date Sale</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="thumb" name="thumb">
                <label for="thumb">URL Thumb</label>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <input class="btn btn-primary" type="submit" value="Save">
        </form>
    </div>
@endsection
