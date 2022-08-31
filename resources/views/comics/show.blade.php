@extends('layouts.app')
@section('main_content')
    <div class="main-container">
        <h1>
            {{ $comics->title }}
        </h1>
        <div>
            <div class="p-3">
                <img src="{{ $comics->thumb }}" alt="{{ $comics->title }}">
            </div>
            <div class="p-1"><span class="fw-bold fs-5">Description:</span>{{ $comics->description }}</div>
            <div class="p-1"><span class="fw-bold fs-5">Price:</span>{{ $comics->price }}</div>
            <div class="p-1"><span class="fw-bold fs-5">Series:</span>{{ $comics->series }}</div>
            <div class="p-1"><span class="fw-bold fs-5">Sale Date:</span>{{ $comics->sale_date }}</div>
            <div class="p-1"><span class="fw-bold fs-5">Type:</span>{{ $comics->type }}</div>
            <br>
        </div>
    </div>
@endsection
