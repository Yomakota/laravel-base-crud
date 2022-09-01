@extends('layouts.app')
@section('main_content')
    <h1 class="bg-danger text-uppercase text-center text-white p-3">
        {{ $comics->title }}
    </h1>
    <div class="container">
        <div>
            <div class="p-3 text-center">
                <img src="{{ $comics->thumb }}" alt="{{ $comics->title }}">
            </div>
            <div class="p-1"><span class="fw-bold fs-5">Description: </span>{{ $comics->description }}</div>
            <div class="p-1"><span class="fw-bold fs-5">Price: </span>{{ $comics->price }} euro</div>
            <div class="p-1"><span class="fw-bold fs-5">Series: </span>{{ $comics->series }}</div>
            <div class="p-1"><span class="fw-bold fs-5">Sale Date: </span>{{ $comics->sale_date }}</div>
            <div class="p-1"><span class="fw-bold fs-5">Type: </span>{{ $comics->type }}</div>
        </div>
    </div>
@endsection
