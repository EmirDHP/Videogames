@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Movie</h1>
                <form action="/admin/plat/edit" method="POST">
                @csrf
                <input type="hidden" name="platid" id="platid" value="{{ $plat->_id}}">
                    <div class="form-group">
                        <label for="platform_name">Platform </label>
                        <input class="form-control" type="text" name="platform_name" id="platform_name" value="{{ $plat->platform_name }}">
                    </div>
                    
                    <a href="/admin/plat/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection