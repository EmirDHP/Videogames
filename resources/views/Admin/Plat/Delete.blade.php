@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete Platform</h1>
                <form action="/admin/plat/delete" method="POST">
                    @csrf
                    @method('DELETE')
                <input type="hidden" name="platid" id="platid" value="{{ $plat->_id}}">
                    <div class="form-group">
                        <label for="platform_name">Platform</label>
                        <input class="form-control" type="text" name="platform_name" id="platform_name" value="{{ $plat->platform_name }}" disabled>
                    </div>
                    
                    <a href="/admin/plat/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</button>
                    
                </form>
            </div>
        </div>
    </div>
@endsection