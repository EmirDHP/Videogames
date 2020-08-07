@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Details</h1>
                <div class="card">
                    
                    <div class="card-body">
                        <h5 class="card-title">{{ $game->videogame_game}}</h5>
                        <p class="card-text"><b>: </b> {{ $game->genre_id }}</p>
                    </div>
                    <ul class="list-group list-group-flash">
                     <li class= "list-group-item"><b>Platform:</b> {{ $game->platform_id }}</li> 
                     <li class= "list-group-item" ><b>Publisher:</b>  {{ $game->publisher_id }}</li> 
                     <li class= "list-group-item"><b>Year:</b>  {{ $game->year}}</li> 
                    </ul>
                        <div class="card-body">
                        <a href="/admin/games/edit/{{ $game->_id }}" class="card-link">Edit</a>
                        <a href="/admin/games/delete/{{ $game->_id }}" class="card-link">Delete</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection