@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete Publisher</h1>
                <form action="/admin/pub/delete" method="POST">
                    @csrf
                    @method('DELETE')
                <input type="hidden" name="pubid" id="pubid" value="{{ $pub->_id}}">
                    <div class="form-group">
                        <label for="publisher_name">Publisher</label>
                        <input class="form-control" type="text" name="publisher_name" id="publisher_name" value="{{ $pub->publisher_name }}" disabled>
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input class="form-control" type="text" name="description" id="description" value="{{ $pub->description }}" disabled>
                    </div>
                    <a href="/admin/pub/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</button>
                    
                </form>
            </div>
        </div>
    </div>
@endsection