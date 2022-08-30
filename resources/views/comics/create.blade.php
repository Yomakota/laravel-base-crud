@extends('layouts.app')

@section('main_content')
    <h1>
        Create your product
    </h1>

    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10">
            </textarea>
        </div>
        <div>
            <label for="thumb">Url Thumb</label>
            <input type="text" id="thumb" name="thumb">
        </div>
        <div>
            <label for="series">Series</label>
            <input type="text" id="series" name="series">
        </div>
        <div>
            <label for="sale_date">Sale Date</label>
            <input type="text" id="sale_date" name="sale_date">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" id="price" name="price">
        </div>
        <div>
            <label for="type">Type</label>
            <input type="text" id="type" name="type">
        </div>
        <button>Save</button>
    </form>
@endsection
