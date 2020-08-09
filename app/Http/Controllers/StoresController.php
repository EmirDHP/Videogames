<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class StoresController extends Controller
{   
// Index Users
    public function StoresIndex() {
        $collection = (new MongoDB\Client)->VidegamesE->Stores;
        $storesCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $stores = $collection->find([], [ "limit" => 12, "skip" => ($page - 1) * 12 ]);    
        return view('Stores.Index', ["stores" => $stores, "storesCount" => $storesCount ]);
    }

    public function StoresDetails($id) {
        $collection = (new MongoDB\Client)->VidegamesE->Stores;
        $stores = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id) ]);
        return view("Stores.Details", ["stores" => $stores]);
    }

// AdminStore

    public function IndexAdmin()
    {
        $collections = (new MongoDB\Client)->VidegamesE->Stores;
        $store = $collections->find();
        return view('Admin.stores.index', ['store' => $store]);
    }
    
    public function Create() {
        $collection = (new MongoDB\Client)->VidegamesE->Stores;
        $store = $collection->find();
        return view('Admin.stores.create', [ "store" => $store ]);
    }

    public function Store()
    {
        $store = [
            "store_name" => request("store_name"),
            "location" => request("location"),
            "city" => request("city"),
            "videogames_available" => request("videogames_available")
        ];
        $collection = (new MongoDB\Client)->VidegamesE->Stores;
        $insertOneResult = $collection->insertOne($store);
        if ($insertOneResult->getInsertedCount() == 1); 
        return redirect("/admin/stores/");
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->VidegamesE->Stores;
        $store = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.stores.edit', [ "store" => $store ]);
    }   

    public function Update(){
        $collection = (new MongoDB\Client)->VidegamesE->Stores;
        $store = [
            "store_name" => request("store_name"),
            "location" => request("location"),
            "city" => request("city"),
            "videogames_available" => request("videogames_available")
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("storeid"))
        ], [
            '$set' => $store
        ]);
        return redirect('/admin/stores/');
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->VidegamesE->Stores;
        $store = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.stores.Delete', [ "store" => $store ]);
    }

    public function Remove(){
        $collection = (new MongoDB\Client)->VidegamesE->Stores;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("storeid"))
        ]);
        return redirect('/admin/stores/');
    }

    public function Show($id)
    {
        $collection = (new MongoDB\Client)->VidegamesE->Stores;
        $store = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Admin.stores.details', ["store" => $store]);
    }
}