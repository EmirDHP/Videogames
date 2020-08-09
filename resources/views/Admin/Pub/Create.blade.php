
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>New Game</h1>
                <form action="/admin/pub/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="publisher_name">Publisher Name</label>
                        <input class="form-control" type="text" name="publisher_name" id="publisher_name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input class="form-control" type="string" name="description" id="description">
                    </div>
                    <a href="/admin/pub/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create</>
                    </form>
            </div>
        </div>
    </div>
@endsection