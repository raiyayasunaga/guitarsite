<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cord extends Model
{
    protected $fillable = ["lyrics", "image_path"];
    public static $rules = array(
        'lyrics' => 'required',
    );
}
