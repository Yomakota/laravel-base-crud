@extends('layouts.app')

@section('main_content')
    <div class="home-container position-relative text-uppercase text-white">
        <h1 class="bg-danger text-center p-3 opacity-75">Homepage</h1>
        <div class="d-flex justify-content-around position-absolute top-50 start-50 translate-middle w-100">
            <div class="bg-success opacity-75">
                <a class="btn btn-outline-light p-5 fs-3" href="{{ route('comics.index') }}">discover our products</a>
            </div>
            <div class="bg-success opacity-75">
                <a class="btn btn-outline-light p-5 fs-3" href="{{ route('comics.create') }}">Create your
                    product</a>
            </div>
        </div>
    </div>
@endsection
