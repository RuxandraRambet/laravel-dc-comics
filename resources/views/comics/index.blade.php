@extends('layouts.app')
@section('main')
    <div class="container">
        <h1>Comics</h1>
        <a href="{{ route('comics.create') }}">Create a New Comic</a>
        <ul>
            @foreach ($comics as $comic)
                <li>{{ $comic->title }} - <a href="{{ route('comics.show', $comic->id) }}" alt="Comic">View Details</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
