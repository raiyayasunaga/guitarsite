<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Music;

class GuitarController extends Controller
{
    public function add() {
        return view('admin.create');
    }

    public function create(Request $request) {
        // 以下を追記
      // Varidationを行う

      $this->validate($request, Music::$rules);

      $music = new Music;
      $form = $request->all();

      // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
      if ($request->remove == 'true') {
        $music_form['image_path'] = null;
    } elseif ($request->file('image')) {
        $path = $request->file('image')->store('public/image');
        $music_form['image_path'] = basename($path);
    } else {
        $music_form['image_path'] = $music->image_path;
    }
    
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      unset($music_form['remove']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);

      // データベースに保存する
      $music->fill($form);
      $music->save();

      return redirect('admin/home');
    }
    
    public function playing() {
        return view('admin.playing');
    }

    public function cord() {
        return view('admin.cord');
    }

    public function home(Request $request) {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            // 検索されたら検索結果を取得する
            $posts = Music::where('title', 'like', '%'.$cond_title.'%')->get();
        } else {
            // それ以外はすべてのニュースを取得する
            $posts = Music::all();
        }
        return view('admin.home', ['posts' => $posts, 'cond_title' => $cond_title]);
    }

    public function mypage(Request $request) {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            // 検索されたら検索結果を取得する
            $posts = Music::where('title', 'like', '%'.$cond_title.'%')->get();
        } else {
            // それ以外はすべてのニュースを取得する
            $posts = Music::all();
        }
        return view('admin.mypage', ['posts' => $posts, 'cond_title' => $cond_title]);
    }

    public function delete(Request $request)
  {
      // 該当するNews Modelを取得
      $music = Music::find($request->id);
      // 削除する
      $music->delete();
      return redirect('admin/home/');
  }  
}
