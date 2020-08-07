@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete Movie</h1>
                <form action="/admin/games/delete" method="POST">
                    @csrf
                    @method('DELETE')
                <input type="hidden" name="movieid" id="movieid" value="{{ $game->_id}}">
                    <div class="form-group">
                        <label for="videogame_game">Videogame</label>
                        <input class="form-control" type="text" name="title_name" id="title_name" value="{{ $movie->title_name }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="genres">Genre:</label>
                        <input class="form-control" type="Text" name="genres" id="genres" value="{{ $game->genres }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="publisher">Publisher</label>
                        <input class="form-control" type="text" name="publisher" id="publisher" value="{{ $game->publisher }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="platform">Platform</label>
                        <input class="form-control" type="text" name="platform" id="quality" value="{{ $game->platform }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input class="form-control" type="text" name="year" id="year" value="{{ $games->year }}" disabled>
                    <a href="/admin/games/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</button>

                </form>
            </div>
        </div>
    </div>
@endsection