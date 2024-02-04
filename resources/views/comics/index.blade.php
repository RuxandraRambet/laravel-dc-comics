@extends('layouts.app')
@section('main')
    <div class="container">
        <h1>Comics</h1>
        <a href="{{ route('comics.create') }}">Create a New Comic</a>
        <ul>
            @foreach ($comics as $comic)
                <li>{{ $comic->series }} - <a href="{{ route('comics.show', $comic->id) }}" alt="Comic">View Details</a> - <a href="{{ route('comics.edit', $comic->id) }}" alt="Comic">Edit Details</a>
                    <form action="{{ route('comics.destroy', $comic->id)}}" method="Post">
                        @csrf
                        @method('Delete')
                        <input type="submit" value="Delete" class="btn btn-outline-danger">
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
