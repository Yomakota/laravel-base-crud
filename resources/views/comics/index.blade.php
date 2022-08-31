@extends('layouts.app')

@section('main_content')
    <div class="main-container fw-bold">
        <h1>All comic books</h1>
        <div class="row row-cols-4 justify-content-center">
            @foreach ($comics as $item)
                <div class="p-4">
                    <div>
                        <img src="{{ $item->thumb }}" alt="{{ $item->title }}">
                    </div>
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
                            <input class="btn btn-link" type="submit" value="DELETE"
                                onClick="return confirm('Are you sure to delete this comic book?')">
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
