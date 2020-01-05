<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DeliveryCharge extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'usd_delivery_charges'=> $this->usd_delivery_charge,
            'eur_delivery_charges'=>$this->eur_delivery_charge,
        ];
    }
}
