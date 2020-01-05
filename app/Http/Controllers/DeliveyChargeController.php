<?php

namespace App\Http\Controllers;

use App\Http\Resources\DeliveryCharge as DeliveryChargeResource;
use App\Models;
use Illuminate\Http\Request;

class DeliveyChargeController extends Controller
{
    public function index(){
        $deliveryCharge = Models\DeliveryCharge::first();
        return response()->json(new DeliveryChargeResource($deliveryCharge), 200);
    }
}
