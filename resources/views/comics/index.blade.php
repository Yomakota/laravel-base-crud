@extends('layouts.app')

@section('main_content')
    <h1>All comics</h1>

    @foreach ($comics as $item)
        <div>
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
            <br>
        </div>
    @endforeach
@endsection
