<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';
    protected $fillable=['product_category_id','name','usd_price','eur_price','description','photo','size_id' ];

    public  function  orderItems(){
        return $this->hasMany('App\Models\OrderItem','product_id','id');
    }
    public  function  size(){
        return $this->belongsTo('App\Models\Size','size_id','id');
    }
}
