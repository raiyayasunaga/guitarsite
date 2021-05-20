<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cord extends Model
{
    public static $rules = array(
        'id' => 'required',
        'image_path' => 'required',
        'lyrics' => 'required',
    );
}
