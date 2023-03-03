<?php

namespace App\Http\Controllers;

use App\Models\ModelCar;
use App\Models\Vendor;
use Illuminate\Http\Request;

class ModelCarController extends Controller
{
    public function index() {
        $data = ModelCar::all();
        return response()->json($data);
    }
}
