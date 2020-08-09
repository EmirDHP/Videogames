@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
            <div class="col-md-12">
                <h1>Publishers</h1>
                <a type="button" class="btn btn-success" href="/admin/pub/create">New Publisher</a>
            </div>
            <br>
            <div class="col-md-12">
            <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Publisher Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pub as $pub)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $pub["publisher_name"] }}</td>
                                <td>{{ $pub["description"] }}</td>
                                <td>
                                    <a type="button" class="btn btn-info" href="/admin/pub/{{ $pub->_id }}">Details</a>
                                    <a type="button" class="btn btn-secondary" href="/admin/pub/edit/{{ $pub->_id }}">Edit</a>
                                    <a type="button" class="btn btn-danger" href="/admin/pub/delete/{{ $pub->_id }}">Delete</a>
                                </td>
                        @endforeach                                        
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection