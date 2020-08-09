@extends('layouts.app')

@section('content')
 <div class="container">
      <div class="row">
                <div class="col-md-12">
                    <div class="card-body">
                    <h5 class="card-title">{{ $stores->store_name }}</h5>
                        <p class="card-text"><b>Location:</b> {{ $stores->location}}</p>
                        <p class="card-text"><b>City:</b> {{ $stores->city}}</p>
                        <p class="card-text"><b>Videogame Available:</b> {{ $stores->videogames_available}}</p>
                    </div>
                </div>
        </div>
   </div>
@endsection