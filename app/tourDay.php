<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tourDay extends Model
{
    protected $table = 'tour_day';
    protected $primaryKey = 'id_tour_day';

    //Account
    public function tour()
    {
        return $this->belongsTo('App\Tour', 'id_tour');
    }
}
