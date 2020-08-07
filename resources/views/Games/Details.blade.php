@extends('layouts.app')

@section('content')
 <div class="container">
      <div class="row">
                <div class="col-md-12">
                    <div class="card-body">
                    <h5 class="card-title">{{ $games->videogame_game }}</h5>
                        <p class="card-text"><b>Release Year:</b> {{ $games->year}}</p>
                        <p class="card-text"><b>Genre:</b> {{ $games->genre_id}}</p>
                        <p class="card-text"><b>Platform:</b> {{ $games->platform_id}}</p>
                        <p class="card-text"><b>Publisher:</b> {{ $games->publisher_id}}</p>
                        <p class="card-text"><b>Rating:</b> {{ $games->rating}}</p>
                    </div>
                </div>
        </div>
   </div>
@endsection