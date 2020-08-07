<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class PlatformsController extends Controller
{
    public function PlatformsIndex() {
        $collection = (new MongoDB\Client)->VidegamesE->Platforms;
        $gameCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $platform = $collection->find([], [ "limit" => 12, "skip" => ($page - 1) * 12 ]);    
        return view('Platform.Index', ["platform" => $platform, "gameCount" => $gameCount ]);
    }

// AdminPlatform

    public function IndexAdmin()
    {
        $collections = (new MongoDB\Client)->VidegamesE->Platforms;
        $platforms = $collections->find();
        return view('Admin.platforms.index', ['platforms' => $platforms]);
    }
    
    public function Create() {
        $collection = (new MongoDB\Client)->VidegamesE->Platforms;
        $platforms = $collection->find();
        return view('Admin.platforms.create', [ "platforms" => $platforms ]);
    }

    public function Platforms()
    {
        $platform = [
            "platforms" => request("platforms")
        ];
        $collection = (new MongoDB\Client)->VidegamesE->Platforms;
        $insertOneResult = $collection->insertOne($platform);
        if ($insertOneResult->getInsertedCount() == 1); 
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->VidegamesE->Platforms;
        $platforms = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.platforms.Edit', [ "platforms" => $platforms ]);
    }   

    public function Update(){
        $collection = (new MongoDB\Client)->VidegamesE->Platforms;
        $platforms = [
            "platforms" => request("platforms")
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("platformsid"))
        ], [
            '$set' => $platforms
        ]);
        return redirect('/admin/platforms/');
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->VidegamesE->Platforms;
        $platforms = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.platforms.Delete', [ "platforms" => $platforms ]);
    }

    public function Remove(){
        $collection = (new MongoDB\Client)->VidegamesE->Platforms;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("platformsid"))
        ]);
        return redirect('/admin/platforms/');
    }

    public function Show($id)
    {
        $collection = (new MongoDB\Client)->VidegamesE->Platforms;
        $platforms = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Admin.platforms.details', ["platforms" => $platforms]);
    }
}