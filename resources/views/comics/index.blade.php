@extends('layouts.app')

@section('main_content')
    <div class="main-container">
        <h1>All comics</h1>
        @foreach ($comics as $item)
            <div class="products">
                <div><span>Title:</span>{{ $item->title }}</div>
                <div><span>Description:</span>{{ $item->description }}</div>
                <div>
                    <span>Thumb:</span>
                    <img src="{{ $item->thumb }}" alt="{{ $item->title }}">
                </div>
                <div><span>Price:</span>{{ $item->price }}</div>
                <div><span>Series:</span>{{ $item->series }}</div>
                <div><span>Sale Date:</span>{{ $item->sale_date }}</div>
                <div><span>Type:</span>{{ $item->type }}</div>
                <div>
                    <a href="{{ route('comics.show', [$item->id]) }}"> Details</a>
                </div>
                <div>
                    <a href="{{ route('comics.edit', [$item->id]) }}"> Edit</a>
                </div>
                <br>
            </div>
        @endforeach
    </div>
@endsection
