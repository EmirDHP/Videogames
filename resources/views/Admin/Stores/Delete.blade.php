@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete Store</h1>
                <form action="/admin/stores/delete" method="POST">
                    @csrf
                    @method('DELETE')
                <input type="hidden" name="storeid" id="storeid" value="{{ $store->_id}}">
                    <div class="form-group">
                        <label for="store_name">Store Name</label>
                        <input class="form-control" type="text" name="store_name" id="store_name" value="{{ $store->store_name }}" disabled>
                    </div>
                    
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input class="form-control" type="text" name="location" id="location" value="{{ $store->location }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="city">City</label>
                        <input class="form-control" type="text" name="city" id="city" value="{{ $store->city }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="videogames_available">Videogames Available</label>
                        <input class="form-control" type="text" name="videogames_available" id="videogames_available" value="{{ $store->videogames_available }}" disabled>
                    </div>
                    <a href="/admin/stores/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</button>
                    
                </form>
            </div>
        </div>
    </div>
@endsection