@extends('layouts.app')

@section('content')
 <div class="container">
      <div class="row">
                <div class="col-md-12">
                    <div class="card-body">
                    <h5 class="card-title">{{ $games->videogame_game }}</h5>
                        <p class="card-text"><b>Release Year:</b> {{ $games->year}}</p>
                        <p class="card-text"><b>Rating:</b> {{ $games->rating}}</p>
                    </div>
   <!-- ////////////////////////////////////////// -->
                <div id="starRating" class="card-footer">
                    <p>Rating: </p>
                    <span class="fa-2x text-warning">
                        <i class="far fa-star" onclick="setStarRating(2)" onmouseleave="starRating(document.getElementById('ratingval').value);" onmouseover="starRating(2);"></i>
                    </span>
                    <span class="fa-2x text-warning">
                        <i class="far fa-star" onclick="setStarRating(4)" onmouseleave="starRating(document.getElementById('ratingval').value);" onmouseover="starRating(4);"></i>
                    </span>
                    <span class="fa-2x text-warning">
                        <i class="far fa-star" onclick="setStarRating(6)" onmouseleave="starRating(document.getElementById('ratingval').value);" onmouseover="starRating(6);"></i>
                    </span>
                    <span class="fa-2x text-warning">
                        <i class="far fa-star" onclick="setStarRating(8)" onmouseleave="starRating(document.getElementById('ratingval').value);" onmouseover="starRating(8);"></i>
                    </span>
                    <span class="fa-2x text-warning">
                        <i class="far fa-star" onclick="setStarRating(10)" onmouseleave="starRating(document.getElementById('ratingval').value);" onmouseover="starRating(10);"></i>
                    </span>
                    @php
                        $rating = (array)$games->ratingg;
                        if (count($rating) == 0)
                            $avg = 0;
                        else
                            $avg = array_sum($rating) / count($rating);
                    @endphp
                    
                    <input type="number" name="ratingval" id="ratingval" min="0" max="10" hidden value="{{ $avg }}">
                </div>

            </div>
        </div>
    </div>
                        <script>
                            function starRating(ratingg) {
                                var elStars = document.getElementById("starRating").getElementsByTagName("i");
                                for (var i = 0; i < elStars.length; i++) {
                                    elStars[i].setAttribute("class", "far fa-star");
                                }
                                for (i = 1; i <= Math.ceil(ratingg/2); i++){
                                    let elStar = elStars[i - 1];
                                    if (i == Math.ceil(ratingg/2) && ratingg % 2 == 1){
                                        elStar.setAttribute("class", "fas fa-star-half-alt")
                                    } else {
                                        elStar.setAttribute("class", "fas fa-star")
                                    }
                                }
                            }
                            function setStarRating(ratingg){
                                const gamesID = "{{ $games->_id }}"
                                var formData = {
                                    id: gamesID,
                                    ratingg: ratingg
                                }
                                axios.post("/api/rating",formData)
                                    .then(function (response) {
                                        document.getElementById("ratingval").value = response.data.avg;
                                        starRating(response.data.avg);
                                    })
                                    .catch(function (error) {
                                        console.log(error);
                                    })
                            }
                            (function () {
                                starRating(document.getElementById("ratingval").value);
                            })();
                        </script>
@endsection