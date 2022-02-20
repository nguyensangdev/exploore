<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    protected $primaryKey = 'id_comment';
//    public $timestamps = false;
    const UPDATED_AT = null;

    //Hotel
    public function hotel()
    {
        return $this->belongsTo('App\Hotel', 'id_hotel');
    }

    //Tour
    public function tour()
    {
        return $this->belongsTo('App\Tour', 'id_tour');
    }
    //news
    public function news()
    {
        return $this->belongsTo('App\News', 'id_news');
    }
    //account
    public function account()
    {
        return $this->belongsTo('App\User', 'id_account');
    }
}
