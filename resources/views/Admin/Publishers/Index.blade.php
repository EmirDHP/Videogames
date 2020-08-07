@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Publisher</h1>
                <a class="text right" href="/admin/publishers/create">Add New publisher</a>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Publisher</th>
                        <th scope="col">Description</th>

                        </tr>   
                    </thead>
                    <tbody>
                        @foreach($publisher as $publisher)
                        <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $publisher->publisher }}</td>
                        <td>{{ $publisher->description }}</td>
                        <td>
                            <a href="/admin/publishers/{{ $platform->_id }}">Details</a> |
                            <a href="/admin/publishers/edit/{{ $platform->_id }}">Edit</a> |
                            <a href="/admin/publishers/delete/{{ $platform->_id }}">Delete</a>
                        </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection