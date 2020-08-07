@extends(' layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Videogames</h1>

                <div class="row">
                @foreach($games as $games)
                <div class="card col-md-3">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>Title:</b><br>{{ $games->videogame_game }} </h5>
                        <p class="card-text"><b>Release Year:</b> {{ $games->year }}</p>
                        <a href="/games/{{ $games->_id }}" class="btn btn-primary">View</a>
                    </div>
                </div>
                    @endforeach

                    <div class="col-md-12">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mx-auto" role="group" aria-label="First group">
                                @php
                                    $cpage = request('pg') == 0 ? 1 : request('pg');
                                @endphp                                
                                <a href="/games?pg={{$cpage - 1}}" class="btn btn-secondary { $cpage == 1 ? 'disabled' : '' }">&lt</a>
                                @for ($i = 1; $i <= ceil($gameCount/12); $i++)
                                <a href="/games?pg={{$i}}"  class="btn btn-secondary {{ $cpage == $i ? 'disabled' : '' }}">{{$i}} </a>
                                @endfor
                                <a href="/games?pg={{$cpage + 1}}" class="btn btn-secondary {{ $cpage == ceil($gameCount/12) ? 'disabled' : '' }}">&gt</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

