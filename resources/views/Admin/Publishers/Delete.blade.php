@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete</h1>
                <form action="/admin/publisher/delete" method= "POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="pub" id="publisherid" value="{{ $publisher->_id }}">
                <div class="form-group">
                        <label for="publisher">publisher</label>
                        <input class="form-control" type="text" name="publisher" id="publisher" value="{{ $publisher->publisher }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input class="form-control" type="Text" name="description" id="description" value="{{ $publisher->description }}" disabled>
                    </div>
                    <a href="/admin/publishers/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection