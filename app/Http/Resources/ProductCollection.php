<?php

namespace App\Http\Resources;
use App\Models;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $deliveryCharge = Models\DeliveryCharge::first();
         return [
        'data' => $this->collection,
             'usd_delivery_charges'=>$deliveryCharge->usd_delivery_charge,
             'eur_delivery_charges'=>$deliveryCharge->eur_delivery_charge,
    ];
    }
}
