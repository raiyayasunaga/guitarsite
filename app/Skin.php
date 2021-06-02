<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skin extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'skin_id' => 'required',
    );

    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
