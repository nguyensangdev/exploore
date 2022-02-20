<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'message';
    protected $primaryKey = 'id_message';
    const UPDATED_AT = null;

    //Account
    public function account()
    {
        return $this->belongsTo('App\User', 'id_account');
    }
}
