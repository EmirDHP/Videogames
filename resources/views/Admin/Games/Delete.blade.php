@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete Game</h1>
                <form action="/admin/games/delete" method="POST">
                    @csrf
                    @method('DELETE')
                <input type="hidden" name="gameid" id="gameid" value="{{ $game->_id}}">
                    <div class="form-group">
                        <label for="videogame_game">Videogame</label>
                        <input class="form-control" type="text" name="videogame_game" id="videogame_game" value="{{ $game->videogame_game }}" disabled>
                    </div>
                    
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input class="form-control" type="text" name="year" id="year" value="{{ $game->year }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="rating">Rating</label>
                        <input class="form-control" type="text" name="rating" id="rating" value="{{ $game->rating }}" disabled>
                    </div>
                    <a href="/admin/games/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</button>
                    
                </form>
            </div>
        </div>
    </div>
@endsection