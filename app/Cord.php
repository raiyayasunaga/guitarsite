<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cord extends Model
{
    // $fillableは全て取得してくれる事。
    protected $fillable = ["lyrics", "image_path"];
    // Musicモデルにあったから取り敢えず持ってきた
    protected $guarded = array('id');
    public static $rules = array(
        'lyrics' => 'required',
    );

    
}
