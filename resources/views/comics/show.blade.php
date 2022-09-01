@extends('layouts.app')
@section('main_content')
    <h1 class="bg-danger text-uppercase text-center text-white p-3">
        {{ $comics->title }}
    </h1>
    <div class="p-2">
        <a class="btn btn-outline-success fs-3" href="{{ route('comics.index') }}">Back to products</a>
    </div>
    <div class="container p-3">
        <div class="row p-4 justify-content-center">
            <div class="col-4">
                <img src="{{ $comics->thumb }}" alt="{{ $comics->title }}" class="w-75">
            </div>
            <div
                class="col-4 bg-success opacity-75 fs-3 d-flex flex-column align-items-center justify-content-center text-start ">
                <div>
                    <span class="fw-bold">Price:</span>
                    <span>{{ $comics->price }}</span>
                </div>
                <div>
                    <span class="fw-bold">Series:</span>
                    <span>{{ $comics->series }}</span>
                </div>
                <div>
                    <span class="fw-bold">Sale Date:</span>
                    <span>{{ $comics->sale_date }}</span>
                </div>
                <div>
                    <span class="fw-bold">Type:</span>
                    <span>{{ $comics->type }}</span>
                </div>
            </div>
        </div>
        <div class="col-12 bg-danger fs-4 p-4">
            <span class="fw-bold fs-5">Description: </span>
            {{ $comics->description }}
        </div>
    </div>
    {{-- <div>
            <div class="p-3 text-center">
                <img class="card-img-top" src="{{ $comics->thumb }}" alt="{{ $comics->title }}">
            </div>
            <div class="p-1"><span class="fw-bold fs-5">Description: </span>{{ $comics->description }}</div>
            <div class="p-1"><span class="fw-bold fs-5">Price: </span>{{ $comics->price }} euro</div>
            <div class="p-1"><span class="fw-bold fs-5">Series: </span>{{ $comics->series }}</div>
            <div class="p-1"><span class="fw-bold fs-5">Sale Date: </span>{{ $comics->sale_date }}</div>
            <div class="p-1"><span class="fw-bold fs-5">Type: </span>{{ $comics->type }}</div>
        </div> --}}

    </div>
@endsection
