@extends('layouts.app')

@section('main_content')
    <h1 class="bg-danger text-uppercase text-center text-white p-3">
        Create your product
    </h1>
    <div class="container">
        <form class="p-3" action="{{ route('comics.store') }}" method="post">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                <label for="title">Title</label>
            </div>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
                <label for="series">Series</label>
            </div>
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
                <label for="type">Type</label>
            </div>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                <label for="price">Price</label>
            </div>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
                <label for="sale_date">Date Sale</label>
            </div>
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
                <label for="thumb">URL Thumb</label>
            </div>
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
            </div>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input class="btn btn-primary" type="submit" value="Save">
        </form>
    </div>
@endsection
