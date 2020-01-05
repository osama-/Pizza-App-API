<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\Resource;

class Order extends JsonResource
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
            'totalEUR'=> $this->getTotalEURAttribute(),
            'totalUSD'=>$this->getTotalUSDAttribute(),
            'creationDate'=> $this->created_at!= null ? $this->created_at->format('Y-m-d'):"",
            'order_items'=> new OrderItemCollection($this->orderItems)


        ];
    }
}
