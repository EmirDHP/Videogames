@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Movie</h1>
                <form action="/admin/games/edit" method="POST">
                @csrf
                <input type="hidden" name="gameid" id="movieid" value="{{ $game->_id}}">
                    <div class="form-group">
                        <label for="videogame_game">Videogames </label>
                        <input class="form-control" type="text" name="videogame_game" id="videogame_game" value="{{ $game->videogame_game }}">
                    </div>
                    <div class="form-group">
                        <label for="genre">Genre</label>
                        <input class="form-control" type="text" name="genre" id="genre" value="{{ $game->genre }}">
                    </div>
                    <div class="form-group">
                        <label for="publisher">Publisher</label>
                        <input class="form-control" type="text" name="publisher" id="publisherid" value="{{ $game->publisher }}">
                    </div>
                    <div class="form-group">
                        <label for="platform">Platform</label>
                        <input class="form-control" type="text" name="platform" id="platformid" value="{{ $game->platform }}">
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input class="form-control" type="int" name="year" id="year" value="{{ $game->year }}">
                    </div>
                    <a href="/admin/games/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection