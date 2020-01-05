<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table='orderItem';

    protected $fillable=['order_id','product_id','quantity','usd_unit_price','eur_unit_price'];

    public  function  order(){
        return $this->belongsTo('App\Models\Order','order_id','id');
    }
    public  function  product(){
        return $this->belongsTo('App\Models\Product','product_id','id');
    }

    public function getTotalPricUSDAttribute()
    {
        return ($this->quantity * $this->usd_unit_price);
    }

    public function getTotalPricEURAttribute()
    {
        return ($this->quantity * $this->eur_unit_price);
    }

    protected $attributes = array(
        'quantity' => 1,
    );

    protected $appends = array('totalPricUSD','totalPricEUR');
}
