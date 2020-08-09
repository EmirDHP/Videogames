@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
            <div class="col-md-12">
                <h1>Platfomrs</h1>
                <a type="button" class="btn btn-success" href="/admin/plat/create">New Platform</a>
            </div>
            <br>
            <div class="col-md-12">
            <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Platfom Name</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($plat as $plat)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $plat["platform_name"] }}</td>
                                <td>
                                    <a type="button" class="btn btn-info" href="/admin/plat/{{ $plat->_id }}">Details</a> |
                                    <a type="button" class="btn btn-secondary" href="/admin/plat/edit/{{ $plat->_id }}">Edit</a> |
                                    <a type="button" class="btn btn-danger" href="/admin/plat/delete/{{ $plat->_id }}">Delete</a>
                                </td>
                        @endforeach                                        
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection