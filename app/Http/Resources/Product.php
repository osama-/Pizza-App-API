<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'usd_price'=> $this->usd_price,
            'eur_price'=>$this->eur_price,
            'description'=> $this->description,
            'photo'=>$this->photo,
            'size'=> $this->size!= null ? $this->size->name:"" ,
        ];
    }

}
