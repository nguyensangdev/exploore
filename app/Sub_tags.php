<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_tags extends Model
{
    protected $table = 'sub_tags';
    protected $primaryKey = 'id_sub_tags';

    //Tags
    public function Tags()
    {
        return $this->belongsTo('App\Tags', 'id_tags');
    }
    //News
    public function News()
    {
        return $this->belongsTo('App\News', 'id_news');
    }
}
