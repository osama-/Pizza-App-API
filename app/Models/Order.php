<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='order';
    protected $fillable=['user_id','delivey_notes','usd_delivery_charges','eur_delivery_charges' ];
    public  function  orderItems(){
        return $this->hasMany('App\Models\OrderItem','order_id','id');
    }

    protected $attributes = array(
        'usd_delivery_charges' => 1,
    );
    public  function getTotalUSDAttribute(){
    return $this->orderItems->sum('totalPricUSD')+$this->usd_delivery_charges ;
}
    public  function getTotalEURAttribute(){
        return $this->orderItems->sum('totalPricEUR')+$this->eur_delivery_charges;
    }
    protected $appends = array('totalUSD','totalEUR');
    public  function  user(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
