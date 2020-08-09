
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>New Game</h1>
                <form action="/admin/games/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="videogame_game">Videogame</label>
                        <input class="form-control" type="text" name="videogame_game" id="videogame_game">
                    </div>
                    <!-- <div class="form-group">
                        <label for="genre">Genre</label>
                        <input class="form-control" type="text" name="genre" id="genreid">
                    </div> -->
                    <!-- <div class="form-group">
                        <label for="platform">Platform</label>
                        <input class="form-control" type="text" name="platform" id="platformid">
                    </div>
                    <div class="form-group">
                        <label for="publisher">Publisher</label>
                        <input class="form-control" type="text" name="publisher" id="publisherid">
                    </div> -->
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input class="form-control" type="string" name="year" id="year">
                    </div>
                    <div class="form-group">
                        <label for="rating">Rating</label>
                        <input class="form-control" type="string" name="rating" id="rating">
                    </div>
                    <a href="/admin/games/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create</>
                    </form>
            </div>
        </div>
    </div>
@endsection