@extends('layouts.app')

@section('content')
 <div class="container">
      <div class="row">
                <div class="col-md-12">
                    <div class="card-body">
                    <h1>Genre</h1>
                    <h5 class="card-title">{{ $genres->genre }}</h5>
                    </div>
                </div>
        </div>
   </div>

@endsection