<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeliveryCharge extends Model
{
    protected $table='deliveryCharges';
    protected $fillable=['usd_delivery_charge','eur_delivery_charge' ];
}
