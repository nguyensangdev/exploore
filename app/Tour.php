<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tour';
    protected $primaryKey = 'id_tour';
    const UPDATED_AT = null;
    //Hotel
    public function district()
    {
        return $this->belongsTo('App\District', 'id_district');
    }

    function tourDay(){
        return $this->hasMany('App\tourDay','id_tour_day','tour_id');
    }

    public function setCreatedAtAttribute($value) {
        $this->attributes['created_at'] = \Carbon\Carbon::now();
    }

}
