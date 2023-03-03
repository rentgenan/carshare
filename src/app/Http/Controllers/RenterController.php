<?php

namespace App\Http\Controllers;

use App\Http\Requests\RenterCreateRequest;
use App\Http\Resources\RenterResource;
use App\Models\Renter;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class RenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Renter::all();
        // return response()->json($data);

        // $data = Renter::find(5)->operationsMoney;
        // return response()->json($data);

        return RenterResource::collection(Renter::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * test
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RenterCreateRequest $request)
    {
        $createdRenter = Renter::Create($request->validated());

        return new RenterResource($createdRenter);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new RenterResource(Renter::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RenterCreateRequest $request, Renter $renter)
    {
        $renter->update($request->validated());

        return new RenterResource($renter);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Renter $renter)
    {
        $renter->delete();

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
