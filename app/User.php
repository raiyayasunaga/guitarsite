<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
        'email_verifed', 'email_verify_token',
        'profile_image', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function musics()
    {
        return $this->hasMany('App\Music'); 
    }

    public function skin()
    {
        return $this->belongsTo('App\Skin');
    }

    public function favorites()
    {
        return $this->hasMany('App\Favorite');
    }

    public function join_favorites_music()
    {
        return $this->hasManyThrough(
            'App\Music', //リレーションして取りたいテーブル「music」
            'App\Favorite', //経由するテーブル「favorites」
            'user_id', //favoritesテーブルをusersテーブルと結ぶための外部キー
            'id', // musicテーブルの外部キー
            null, // usersテーブルのローカルキー
            'music_id' //favoritesとmusicを結ぶために使うキー
        );
    }


}
