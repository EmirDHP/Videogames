<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class GamesController extends Controller
{
    public function ProductStore() {
        $collection = (new MongoDB\Client)->VideogamesE->Games;
        $gameCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $games = $collection->find([], [ "limit" => 12, "skip" => ($page - 1) * 12 ]);    
        return view('Products.index', ["products" => $games, "productCount" => $gameCount ]);
    }
}