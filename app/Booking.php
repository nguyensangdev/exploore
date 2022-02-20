<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'id_booking';
//    public $timestamps = false;
    const UPDATED_AT = null;

    //Account
    public function account()
    {
        return $this->belongsTo('App\User', 'id_account');
    }
    //Tour
    public function tour()
    {
        return $this->belongsTo('App\Tour', 'id_tour');
    }
    //news
    public function hotel()
    {
        return $this->belongsTo('App\Hotel', 'id_hotel');
    }
}
