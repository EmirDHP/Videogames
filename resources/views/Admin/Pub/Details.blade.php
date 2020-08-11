@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Details</h1>
                <div class="card">
                    
                    <div class="card-body">
                        <h5 class="card-title">{{ $pub->publisher_name }}</h5>
                    </div>
                    <ul class="list-group list-group-flash">
                     <li class= "list-group-item" ><b>Publisher Name:</b>  {{ $pub->publisher_name }}</li> 
                     <li class= "list-group-item"><b>Description:</b>  {{ $pub->description }}</li> 
                    </ul>
                        <div class="card-body">
                        <a href="/admin/pub/" class="btn btn-secondary btn-md active" role="button" aria-pressed="true">Back</a>
                        <a type="button" class="btn btn-secondary" href="/admin/pub/edit/{{ $pub->_id }}" class="card-link">Edit</a>
                        <a type="button" class="btn btn-danger" href="/admin/pub/delete/{{ $pub->_id }}" class="card-link">Delete</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection