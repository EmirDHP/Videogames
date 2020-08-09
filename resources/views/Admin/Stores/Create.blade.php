
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>New Game</h1>
                <form action="/admin/stores/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="store_name">Store</label>
                        <input class="form-control" type="text" name="store_name" id="store_name">
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input class="form-control" type="string" name="location" id="location">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input class="form-control" type="string" name="city" id="city">
                    </div>
                    <div class="form-group">
                        <label for="videogames_available">Videogames Available</label>
                        <input class="form-control" type="string" name="videogames_available" id="videogames_available">
                    </div>
                    <a href="/admin/stores/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create</>
                    </form>
            </div>
        </div>
    </div>
@endsection