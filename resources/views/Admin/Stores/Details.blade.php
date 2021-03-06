@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Details</h1>
                <div class="card">
                    
                    <div class="card-body">
                        <h5 class="card-title">{{ $store->store_name }}</h5>
                    </div>
                    <ul class="list-group list-group-flash">
                     <li class= "list-group-item"><b>Location:</b>  {{ $store->location }}</li> 
                     <li class= "list-group-item"><b>City:</b>  {{ $store->city }}</li> 
                     <li class= "list-group-item"><b>Stores available:</b>  {{ $store->videogames_available }}</li> 
                    </ul>
                        <div class="card-body">
                        <a href="/admin/stores/" class="btn btn-secondary btn-md active" role="button" aria-pressed="true">Back</a>
                        <a type="button" class="btn btn-secondary" href="/admin/stores/edit/{{ $store->_id }}" class="card-link">Edit</a>
                        <a type="button" class="btn btn-danger" href="/admin/stores/delete/{{ $store->_id }}" class="card-link">Delete</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection