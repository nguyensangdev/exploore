<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id_news';
//    public $timestamps = false;
    const UPDATED_AT = null;

    //account
    public function account()
    {
        return $this->belongsTo('App\User', 'id_account');
    }
}
