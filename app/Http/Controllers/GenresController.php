<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class GenresController extends Controller
{
// Index Genre
public function GenreIndex() {
    $collection = (new MongoDB\Client)->VidegamesE->Genre;
    $genreCount = $collection->count();
    $page = request("pg") == 0 ? 1 : request("pg");
    $genres = $collection->find([], [ "limit" => 12, "skip" => ($page - 1) * 12 ]);    
    return view('Genres.Index', ["genres" => $genres, "genreCount" => $genreCount ]);
}

public function GenreDetails($id) {
    $collection = (new MongoDB\Client)->VidegamesE->Genre;
    $genres = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id) ]);
    return view("Genres.Details", ["genres" => $genres]);
}

// AdminGenre

    public function IndexAdmin()
    {
        $collections = (new MongoDB\Client)->VidegamesE->Genre;
        $genre = $collections->find();
        return view('Admin.genres.index', ['genre' => $genre]);
    }
    
    public function Create() {
        $collection = (new MongoDB\Client)->VidegamesE->Genre;
        $genre = $collection->find();
        return view('Admin.genres.create', [ "genre" => $genre ]);
    }

    public function Genre()
    {
        $genre = [
            "genre" => request("genre")
        ];
        $collection = (new MongoDB\Client)->VidegamesE->Genre;
        $insertOneResult = $collection->insertOne($genre);
        if ($insertOneResult->getInsertedCount() == 1); 
        return redirect("/admin/genre/");
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->VidegamesE->Genre;
        $genre = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.genres.edit', [ "genre" => $genre ]);
    }   

    public function Update(){
        $collection = (new MongoDB\Client)->VidegamesE->Genre;
        $genre = [
            "genre" => request("genre")
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("genreid"))
        ], [
            '$set' => $genre
        ]);
        return redirect('/admin/genre/');
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->VidegamesE->Genre;
        $genre = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.genres.Delete', [ "genre" => $genre ]);
    }

    public function Remove(){
        $collection = (new MongoDB\Client)->VidegamesE->Genre;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("genreid"))
        ]);
        return redirect('/admin/genre/');
    }

    public function Show($id)
    {
        $collection = (new MongoDB\Client)->VidegamesE->Genre;
        $genre = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Admin.genres.details', ["genre" => $genre]);
    }
}