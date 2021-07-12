<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $guarded = array('id');

    public function musics()
    {
        $this->belongsToMany('App\Music');
    }
    
    public function user()
    {
        $this->belongTo('App/User');
    }
}
