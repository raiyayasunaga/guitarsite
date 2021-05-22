<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
// use Illuminate\Http\User;使うか分からない
use App\Http\Controllers\Controller;
use App\Music;
use App\User;
use App\Cord;
use Auth;


// ユーザー情報


class GuitarController extends Controller
{

    // ユーザーによって表示変える方

    public function add() {
        return view('admin.create');
    }

    // 渡されていない
    public function vue(Request $request) {

      $this->validate($request, Cord::$rules);

      Cord::create($request->only("lyrics"));

      return redirect('admin/home');
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
    } elseif ($request->file('img')) {
        $path = $request->file('img')->store('public/img');
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
      //ユーザーそれぞれのデータの値を保存できる作業 
      $music->user_id = Auth::id();
      $music->save();

      return redirect('admin/home');
    }

    public function cord() {
        return view('admin.cord');
    }

    public function home(Request $request) {
        $cond_title = $request->cond_title;


        if ($cond_title != '') {
            // 検索されたら検索結果を取得する
            $posts = Music::where('title', 'like', '%'.$cond_title.'%')
                ->orderBy('id', 'asc')
                ->get();
        } else {
            // それ以外はすべてのニュースを取得する
            $posts = Music::all();
        }


        return view('admin.home', ['posts' => $posts, 'cond_title' => $cond_title, 'cords' => Cord::all()]);
    }

    public function mypage(Request $request) {
        //  $auths = Auth::user();
        // 'auth' => $auths
        $cond_title = $request->cond_title;

        $music = Music::where('user_id', Auth::id()) //$userによる投稿を取得
            ->orderBy('created_at', 'desc') // 投稿作成日が新しい順に並べる
            ->paginate(10); // ページネーション; 
        
        // if ($cond_title != '') {
        //     // 検索されたら検索結果を取得する
        //     $music = Music::where('title', 'like', '%'.$cond_title.'%')->get();
        // } else {
        //     // それ以外はすべてのニュースを取得する
        //     $music = Music::where('user_id', Auth::id());
        // }

        return view('admin.mypage', ['posts' => $music, 'cond_title' => $cond_title,]);
    }

    public function playing(Request $request) {
        $music = Music::find($request->id);
        
        // 名前から予測していく
        return view('admin.playing', ['music' => $music]);
    }

    public function delete(Request $request)
    {
      // 該当するNews Modelを取得
      $music = Music::find($request->id);
      // 削除する
      $music->delete();
      return redirect('admin/home/');
    }

    public function edit(Request $request)
    {

        $music = Music::find($request->id);

      if (empty($music)) {
        abort(404);    
      }
      return view('admin.mypageedit', ['music_form' => $music]);
    }
    
    public function update(Request $request)
    {
        // Validationをかける
        $this->validate($request, Music::$rules);
        // News Modelからデータを取得する
        $music = Music::find($request->id);
        // 送信されてきたフォームデータを格納する
        $music_form = $request->all();
        unset($music_form['_token']);

        // 該当するデータを上書きして保存する
        $music->fill($music_form)->save();

        return redirect('admin/mypage');
    }
    public function profile() {
        return view('admin.profile');
    }
}
