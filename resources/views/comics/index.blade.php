@extends('layouts.app')

@section('main_content')
    <div class="container fw-bold">
        <h1 class="text-uppercase text-center bg-danger">All comic books</h1>
        <div class="row row-cols-5 justify-content-center">
            @foreach ($comics as $item)
                <div class="col shadow-lg m-3">
                    <div>
                        <img class="card-img-top p-3" src="{{ $item->thumb }}" alt="{{ $item->title }}">
                    </div>
                    <div class="text-center">
                        <div>{{ $item->title }}</div>
                        <div>{{ $item->series }}</div>
                        <div>
                            <a href="{{ route('comics.show', [$item->id]) }}"> DETAILS</a>
                        </div>
                        <div>
                            <a href="{{ route('comics.edit', [$item->id]) }}"> EDIT</a>
                        </div>
                        <div>
                            <form action="{{ route('comics.destroy', [$item->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-link fw-bold p-0" type="submit" value="DELETE"
                                    onClick="return confirm('Are you sure to delete this comic book?')">
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
