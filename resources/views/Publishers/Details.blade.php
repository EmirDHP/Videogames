@extends('layouts.app')

@section('content')
 <div class="container">
      <div class="row">
                <div class="col-md-12">
                    <div class="card-body">
                    <h5 class="card-title">{{ $pubs->publisher_name }}</h5>
                        <p class="card-text"><b>Description:</b> {{ $pubs->description}}</p>
                    </div>
                </div>
        </div>
   </div>
@endsection