@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
            <div class="col-md-12">
                <h1>Stores</h1>
                <a type="button" class="btn btn-success" href="/admin/stores/create">New Store</a>
            </div>
            <br>
            <div class="col-md-12">
            <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Store Name</th>
                            <th scope="col">Location</th>
                            <th scope="col">City</th>
                            <th scope="col">Games Available</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($store as $store)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $store["store_name"] }}</td>
                                <td>{{ $store["location"] }}</td>
                                <td>{{ $store["city"] }}</td>
                                <td>{{ $store["videogames_available"] }}</td>
                                <td>
                                    <a type="button" class="btn btn-info" href="/admin/stores/{{ $store->_id }}">Details</a>
                                    <a type="button" class="btn btn-secondary" href="/admin/stores/edit/{{ $store->_id }}">Edit</a>
                                    <a type="button" class="btn btn-danger" href="/admin/stores/delete/{{ $store->_id }}">Delete</a>
                                </td>
                        @endforeach                                        
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection