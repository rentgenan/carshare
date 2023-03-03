<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarCreateRequest;
use App\Http\Resources\CarResource;
use App\Models\Car;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class CarController extends Controller
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

        return CarResource::collection(Car::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * test
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarCreateRequest $request)
    {
        $createdRenter = Car::Create($request->validated());

        return new CarResource($createdRenter);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new CarResource(Car::findOrFail($id)->modelsCar());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarCreateRequest $request, Car $car)
    {
        $car->update($request->validated());

        return new CarResource($car);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
