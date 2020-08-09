@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
            <div class="col-md-12">
                <h1>Games</h1>
                <a type="button" class="btn btn-success" href="/admin/games/create">New Videogame</a>
            </div>
            <br>
            <div class="col-md-12">
            <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Videogame Name</th>
                            <th scope="col">Year</th>
                            <th scope="col">Rating</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($game as $gam)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $gam["videogame_game"] }}</td>
                                <td>{{ $gam["year"] }}</td>
                                <td>{{ $gam["rating"] }}</td>
                                <td>
                                    <a type="button" class="btn btn-info" href="/admin/games/{{ $gam->_id }}">Details</a> |
                                    <a type="button" class="btn btn-secondary" href="/admin/games/edit/{{ $gam->_id }}">Edit</a> |
                                    <a type="button" class="btn btn-danger" href="/admin/games/delete/{{ $gam->_id }}">Delete</a>
                                </td>
                        @endforeach                                        
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection