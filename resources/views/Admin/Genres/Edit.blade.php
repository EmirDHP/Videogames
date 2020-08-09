@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Genre</h1>
                <form action="/admin/genres/edit" method= "POST">
                @csrf
                <input type="hidden" name="genreid" id="genreid" value="{{ $genre->_id }}">
                <div class="form-group">
                        <label for="genre">Genre:</label>
                        <input class="form-control" type="text" name="genre" id="genreid" value="{{ $genre->genre}}">
                </div>
                <a href="/admin/genre/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection