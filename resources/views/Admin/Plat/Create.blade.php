
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>New Platform</h1>
                <form action="/admin/plat/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="platform_name">Platform Name</label>
                        <input class="form-control" type="text" name="platform_name" id="platform_name">
                    </div>
                    <a href="/admin/plat/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create</>
                    </form>
            </div>
        </div>
    </div>
@endsection