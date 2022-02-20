<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotel';
    protected $primaryKey = 'id_hotel';
    // public $timestamps = false;
    const UPDATED_AT = null;
    //account
    public function account()
    {
        return $this->belongsTo('App\User', 'id_account');
    }
    public function room(){
        return $this->hasMany('App\Room','id_room','id_hotel');
    }

}
