<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Favorite;
use App\Music;

class FavoriteController extends Controller
{
    public function favoritecreate(Request $request)
    {
        // どんな処理を書いていけば良いのか、、
        $favorite = new Favorite;
        $favorite->user_id = $request->user_id;
        $favorite->music_id = $request->music_id;

        $favorite->save();

        session()->flash('msg_success', 'お気に入り登録しました！');
        return redirect('admin/home');
    }

    public function favorite(Request $request)
    {
        $favorites = Music::where('id', $request->music_id)->get();

        return view('admin.favorite', ['favorites' => $favorites]);
    }
    
}
