<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table='size';
    protected $fillable=['name' ];
    public  function  orderItems(){
        return $this->hasMany('App\Models\Product','size_id','id');
    }
}
