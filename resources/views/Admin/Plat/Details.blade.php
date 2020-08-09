@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Details</h1>
                <div class="card">
                    
                    <div class="card-body">
                        <h5 class="card-title">{{ $plat->platform_name }}</h5>
                    </div>
                        <div class="card-body">
                        <a href="/admin/plat/" class="btn btn-secondary btn-md active" role="button" aria-pressed="true">Back</a>
                        <a type="button" class="btn btn-secondary" href="/admin/plat/edit/{{ $plat->_id }}" class="card-link">Edit</a>
                        <a type="button" class="btn btn-danger" href="/admin/plat/delete/{{ $plat->_id }}" class="card-link">Delete</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection