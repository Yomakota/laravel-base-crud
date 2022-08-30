@extends('layouts.app')
@section('main_content')
    <div class="main-container">
        <h1>
            {{ $comics->title }}
        </h1>
        <div>
            <div><span>Description:</span>{{ $comics->description }}</div>
            <div>
                <span>Thumb:</span>
                <img src="{{ $comics->thumb }}" alt="{{ $comics->title }}">
            </div>
            <div><span>Price:</span>{{ $comics->price }}</div>
            <div><span>Series:</span>{{ $comics->series }}</div>
            <div><span>Sale Date:</span>{{ $comics->sale_date }}</div>
            <div><span>Type:</span>{{ $comics->type }}</div>
            <br>
        </div>
    </div>
@endsection
