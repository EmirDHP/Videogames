<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class PublishersController extends Controller
{
    public function PublisherIndex() {
        $collection = (new MongoDB\Client)->VidegamesE->Publishers;
        $publishersCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $publishers = $collection->find([], [ "limit" => 12, "skip" => ($page - 1) * 12 ]);    
        return view('Publisher.Index', ["publisher" => $publishers, "gameCount" => $publishersCount ]);
    }

// Admin Pubisher

    public function IndexAdmin()
    {
        $collections = (new MongoDB\Client)->VidegamesE->Publisher;
        $publisher = $collections->find();
        return view('Admin.publishers.index', ['publisher' => $publisher]);
    }
    
    public function Create() {
        $collection = (new MongoDB\Client)->VidegamesE->Publisher;
        $publisher = $collection->find();
        return view('Admin.publishers.create', [ "publisher" => $publisher ]);
    }

    public function Plublisher()
    {
        $publisher = [
            "publisher" => request("publisher"),
            "description" => request("description")
        ];
        $collection = (new MongoDB\Client)->VidegamesE->Plublisher;
        $insertOneResult = $collection->insertOne($publisher);
        if ($insertOneResult->getInsertedCount() == 1); 
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->VidegamesE->Plublisher;
        $publisher = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.publishers.Edit', [ "publisher" => $publisher ]);
    }   

    public function Update(){
        $collection = (new MongoDB\Client)->VidegamesE->Plublisher;
        $publisher = [
            "publisher" => request("publisher")
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("publisherid"))
        ], [
            '$set' => $publisher
        ]);
        return redirect('/admin/publisher/');
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->VidegamesE->Plublisher;
        $publisher = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.publishers.Delete', [ "publisher" => $publisher ]);
    }

    public function Remove(){
        $collection = (new MongoDB\Client)->VidegamesE->Plublisher;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("publisherid"))
        ]);
        return redirect('/admin/publishers/');
    }

    public function Show($id)
    {
        $collection = (new MongoDB\Client)->VidegamesE->Plublisher;
        $publisher = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Admin.publishers.details', ["publisher" => $publisher]);
    }
}