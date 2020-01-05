<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OauthAccessToken extends Model
{
    protected $table='oauth_access_tokens';
    public  function  user(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
