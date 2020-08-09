@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Store</h1>
                <form action="/admin/stores/edit" method="POST">
                @csrf
                <input type="hidden" name="storeid" id="storeid" value="{{ $store->_id}}">
                    <div class="form-group">
                        <label for="videogame_game">Store </label>
                        <input class="form-control" type="text" name="store_name" id="store_name" value="{{ $store->store_name }}">
                    </div>
                    <div class="form-group">
                        <label for="location">Location </label>
                        <input class="form-control" type="text" name="location" id="location" value="{{ $store->location }}">
                    </div>
                    <div class="form-group">
                        <label for="city">City </label>
                        <input class="form-control" type="text" name="city" id="city" value="{{ $store->city }}">
                    </div>
                    <div class="form-group">
                        <label for="videogames_available">videogames Available </label>
                        <input class="form-control" type="text" name="videogames_available" id="videogames_available" value="{{ $store->videogames_available }}">
                    </div>
                    
                    <a href="/admin/stores/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection