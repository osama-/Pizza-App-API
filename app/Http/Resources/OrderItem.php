<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderItem extends JsonResource
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
            'id'=>$this->id,
            'order_id'=>$this->order_id,
            'product_id'=> $this->product_id,
            'product_name'=> $this->product->name,
            'product_image'=> $this->product->photo,
            'quantity'=>$this->quantity,
            'usd_unit_price'=> $this->usd_unit_price,
            'eur_unit_price'=>$this->eur_unit_price,
            'totalPricUSD'=> $this->totalPricUSD ,
            'totalPricEUR'=> $this->totalPricEUR ,
        ];
    }
}
