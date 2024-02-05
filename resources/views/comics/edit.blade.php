@extends('layouts.app')
@section('main')
    <div class="container">
        <h1>Modify comic: {{ $comic->title }}</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="title" value="{{ old('title', $comic->title) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Thumb</label>
                <input type="text" class="form-control" name="thumb" value="{{ old('thumb', $comic->thumb )}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="text" class="form-control" name="price" value="{{ old('price', $comic->price) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Series</label>
                <input type="text" class="form-control" name="series" value="{{ old('series', $comic->series )}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Sale Date</label>
                <input type="text" class="form-control" name="sale_date" value="{{ old('sale_date', $comic->sale_date)}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Type</label>
                <input type="text" class="form-control" name="type" value="{{ old('type', $comic->type) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ old('description', $comic->description) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna Home Page</a>
    </div>
    </form>
    </div>
@endsection
