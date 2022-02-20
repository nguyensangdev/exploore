<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room';
    protected $primaryKey = 'id_room';

    //hotel
    public function hotel()
    {
        return $this->belongsTo('App\Hotel', 'id_hotel');
    }
}
