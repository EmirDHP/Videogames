@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add New publisher</h1>
                <form action="/admin/publisher/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="publisher">Publisher:</label>
                        <input class="form-control" type="text" name="publisher" id="publisher">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input class="form-control" type="text" name="description" id="description">
                    </div>
                    <a href="/admin/publishers/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create</>
                    </form>
            </div>
        </div>
    </div>
@endsection