<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;
class Ratinga extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $collection = (new MongoDB\Client)->VidegamesE->Stores;
        $ratings = (array)$collection->findOne([
            "_id" => new MongoDB\BSON\ObjectId($request->id)
        ])->ratingg;
        array_push($ratings, $request->ratingg);
        $UpdateOneResult = $collection->updateOne([
            "_id" => new MongoDB\BSON\ObjectId($request->id)
        ],[
            '$set' => [ "ratingg" => $ratings ]
        ]);
        $avg = array_sum($ratings) / count($ratings);
        return response()->json([
            "avg" => $avg
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
