@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Genres</h1>
                <a type="button" class="btn btn-success" class="text-right" href="/admin/genres/create">New Genre</a>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($genre as $genre)
                    <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $genre["genre"] }}</td>
                        <td>
                            <a type="button" class="btn btn-info" href="/admin/genres/{{ $genre->_id }}">Details</a> |
                            <a type="button" class="btn btn-secondary" href="/admin/genres/edit/{{ $genre->_id }}">Edit</a> |
                            <a type="button" class="btn btn-danger" href="/admin/genres/delete/{{ $genre->_id }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection