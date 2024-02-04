@extends('layouts.app')
@section('main')
    <div class="container">
        <h1>Modify comic: {{$comic->title}}</h1>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="title" value="{{$comic->title}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Thumb</label>
                <input type="text" class="form-control" name="thumb" value="{{$comic->thumb}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="text" class="form-control" name="price" value="{{$comic->price}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Series</label>
                <input type="text" class="form-control" name="series" value="{{$comic->series}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Sale Date</label>
                <input type="text" class="form-control" name="sale_date" value="{{$comic->sale_date}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Type</label>
                <input type="text" class="form-control" name="type" value="{{$comic->type}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10">{{$comic->description}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna Home Page</a>
        </div>
        </form>
    </div>
@endsection
