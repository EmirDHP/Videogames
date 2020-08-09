<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class PubsController extends Controller
{
// Index Pub
    public function PubIndex() {
        $collection = (new MongoDB\Client)->VidegamesE->Pub;
        $pubsCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $pubs = $collection->find([], [ "limit" => 12, "skip" => ($page - 1) * 12 ]);    
        return view('Publishers.Index', ["pubs" => $pubs, "pubsCount" => $pubsCount ]);
    }

    public function PubDetails($id) {
        $collection = (new MongoDB\Client)->VidegamesE->Pub;
        $pubs = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id) ]);
        return view("Publishers.Details", ["pubs" => $pubs]);
    }
// Admin Pubs 

    public function IndexAdmin()
    {
        $collections = (new MongoDB\Client)->VidegamesE->Pub;
        $pub = $collections->find();
        return view('Admin.pub.index', ['pub' => $pub]);
    }
    
    public function Create() {
        $collection = (new MongoDB\Client)->VidegamesE->Pub;
        $pub = $collection->find();
        return view('Admin.pub.create', [ "pub" => $pub ]);
    }

    public function Publi()
    {
        $pub = [
            "publisher_name" => request("publisher_name"),
            "description" => request("description")
        ];
        $collection = (new MongoDB\Client)->VidegamesE->Pub;
        $insertOneResult = $collection->insertOne($pub);
        if ($insertOneResult->getInsertedCount() == 1); 
        return redirect("/admin/pub/");
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->VidegamesE->Pub;
        $pub = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.pub.Edit', [ "pub" => $pub ]);
    }   

    public function Update(){
        $collection = (new MongoDB\Client)->VidegamesE->Pub;
        $pub = [
            "publisher_name" => request("publisher_name"),
            "description" => request("description")
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("pubid"))
        ], [
            '$set' => $pub
        ]);
        return redirect('/admin/pub/');
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->VidegamesE->Pub;
        $pub = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.pub.delete', [ "pub" => $pub ]);
    }

    public function Remove(){
        $collection = (new MongoDB\Client)->VidegamesE->Pub;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("pubid"))
        ]);
        return redirect('/admin/pub/');
    }

    public function Show($id)
    {
        $collection = (new MongoDB\Client)->VidegamesE->Pub;
        $pub = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Admin.pub.details', ["pub" => $pub]);
    }
}