@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Gam</h1>
                <form action="/admin/games/edit" method="POST">
                @csrf
                <input type="hidden" name="gameid" id="gameid" value="{{ $game->_id}}">
                    <div class="form-group">
                        <label for="videogame_game">Videogames </label>
                        <input class="form-control" type="text" name="videogame_game" id="videogame_game" value="{{ $game->videogame_game }}">
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input class="form-control" type="string" name="year" id="year" value="{{ $game->year }}">
                    </div>
                    <div class="form-group">
                        <label for="rating">Rating</label>
                        <input class="form-control" type="string" name="rating" id="rating" value="{{ $game->rating }}">
                    </div>
                    
                    <a href="/admin/games/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection