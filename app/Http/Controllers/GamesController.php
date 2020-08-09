<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class GamesController extends Controller
{
    public function GamesIndex() {
        $collection = (new MongoDB\Client)->VidegamesE->Games;
        $gameCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $games = $collection->find([], [ "limit" => 12, "skip" => ($page - 1) * 12 ]);    
        return view('Games.Index', ["games" => $games, "gameCount" => $gameCount ]);
    }

    // public function AddComment() {
    //     $collection = (new MongoDB\Client)->VidegamesE->Games;
    //     $comment = [
    //         "user_id" => request('userid'),
    //         "comment" => request('comment'),
    //         "date" => date("Y-m-d H:i:s")            ];
    //     $games = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId(request('gamesid')) ]);
    //     $Comments = $games->Comments;
    //     if (count($Comments) == 0 || $Comments == null || empty($Comments)) {
    //         $Comments = [$comment];
    //     } else {
    //         $Comments = [$comment, ...$Comments];
    //     }
    //     $updateOneResult = $collection->updateOne([
    //         "_id" => new MongoDB\BSON\ObjectId(request('gamesid'))
    //     ],[
    //         '$set' => [ 'Comments' => $Comments ]
    //     ]);

    //     return redirect("/games/".request('gamesid'));
    // }

    public function GamesDetails($id) {
        $collection = (new MongoDB\Client)->VidegamesE->Games;
        $games = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id) ]);
        return view("Games.Details", ["games" => $games]);
    }

// Admin games 

    public function IndexAdmin()
    {
        $collections = (new MongoDB\Client)->VidegamesE->Games;
        $game = $collections->find();
        return view('Admin.games.index', ['game' => $game]);
    }
    
    public function Create() {
        $collection = (new MongoDB\Client)->VidegamesE->Games;
        $game = $collection->find();
        return view('Admin.games.create', [ "game" => $game ]);
    }

    public function Games()
    {
        $game = [
            "videogame_game" => request("videogame_game"),
            "year" => request("year"),
            "rating" => request("rating"),
        ];
        $collection = (new MongoDB\Client)->VidegamesE->Games;
        $insertOneResult = $collection->insertOne($game);
        if ($insertOneResult->getInsertedCount() == 1); 
        return redirect("/admin/games/");
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->VidegamesE->Games;
        $game = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.games.Edit', [ "game" => $game ]);
    }   

    public function Update(){
        $collection = (new MongoDB\Client)->VidegamesE->Games;
        $game = [
            "videogame_game" => request("videogame_game"),
            "year" => request("year"),
            "rating" => request("rating"),
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("gameid"))
        ], [
            '$set' => $game
        ]);
        return redirect('/admin/games/');
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->VidegamesE->Games;
        $game = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.games.delete', [ "game" => $game ]);
    }

    public function Remove(){
        $collection = (new MongoDB\Client)->VidegamesE->Games;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("gameid"))
        ]);
        return redirect('/admin/games/');
    }

    public function Show($id)
    {
        $collection = (new MongoDB\Client)->VidegamesE->Games;
        $game = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Admin.games.details', ["game" => $game]);
    }
}