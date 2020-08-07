@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
            <div class="col-md-12">
                <h1>Games</h1>
                <a class="text-right" href="/admin/games/create">Add a new game</a>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Videogame Name</th>
                            <th scope="col">Year</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Platform</th>
                            <th scope="col">Publisher</th>
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
                                <td>{{ $gam["genre_id"] }}</td>
                                <td>{{ $gam["platform_id"] }}</td>
                                <td>{{ $gam["publisher_id"] }}</td>
                                <td>{{ $gam["rating"] }}</td>
                                <td>
                                    <a href="/admin/games/{{ $gam->_id }}}">Details</a> |
                                    <a href="/admin/games/edit/{{ $gam->_id }}">Edit</a> |
                                    <a href="/admin/games/delete/{{ $gam->_id }}">Delete</a>
                                </td>
                        @endforeach                                        
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection