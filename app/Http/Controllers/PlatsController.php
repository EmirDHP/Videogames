<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class PlatsController extends Controller
{
// Index Plat
  public function PlatIndex() {
    $collection = (new MongoDB\Client)->VidegamesE->Plat;
    $platfCount = $collection->count();
    $page = request("pg") == 0 ? 1 : request("pg");
    $platf = $collection->find([], [ "limit" => 12, "skip" => ($page - 1) * 12 ]);    
    return view('Platforms.Index', ["platf" => $platf, "platfCount" => $platfCount ]);
}

public function PlatDetails($id) {
    $collection = (new MongoDB\Client)->VidegamesE->Plat;
    $platf = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id) ]);
    return view("Platforms.Details", ["platf" => $platf]);
}
// Admin games 

    public function IndexAdmin()
    {
        $collections = (new MongoDB\Client)->VidegamesE->Plat;
        $plat = $collections->find();
        return view('Admin.plat.index', ['plat' => $plat]);
    }
    
    public function Create() {
        $collection = (new MongoDB\Client)->VidegamesE->Plat;
        $plat = $collection->find();
        return view('Admin.plat.create', [ "plat" => $plat ]);
    }

    public function Plat()
    {
        $plat = [
            "platform_name" => request("platform_name")
        ];
        $collection = (new MongoDB\Client)->VidegamesE->Plat;
        $insertOneResult = $collection->insertOne($plat);
        if ($insertOneResult->getInsertedCount() == 1); 
        return redirect("/admin/plat/");
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->VidegamesE->Plat;
        $plat = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.plat.Edit', [ "plat" => $plat ]);
    }   

    public function Update(){
        $collection = (new MongoDB\Client)->VidegamesE->Plat;
        $plat = [
            "platform_name" => request("platform_name")
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("platid"))
        ], [
            '$set' => $plat
        ]);
        return redirect('/admin/plat/');
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->VidegamesE->Plat;
        $plat = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.plat.delete', [ "plat" => $plat ]);
    }

    public function Remove(){
        $collection = (new MongoDB\Client)->VidegamesE->Plat;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("platid"))
        ]);
        return redirect('/admin/plat/');
    }

    public function Show($id)
    {
        $collection = (new MongoDB\Client)->VidegamesE->Plat;
        $plat = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Admin.plat.details', ["plat" => $plat]);
    }
}