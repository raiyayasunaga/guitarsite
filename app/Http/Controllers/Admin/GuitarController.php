<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Music;
use App\User;
use Image;

use Auth;


// ユーザー情報


class GuitarController extends Controller
{
    public function add() {
        return view('admin.create');
    }

    public function close(Request $request) {
        $music = Music::find($request->id);
        $music->public = false;

        $music->save();

        return redirect('admin/mypage');
    }

    public function open(Request $request) {
        $music = Music::find($request->id);
        $music->public = true;

        $music->save();
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

      return redirect('admin/mypage');
    }

    public function cord() {
        return view('admin.cord');
    }

    public function home(Request $request) {
        $cond_title = $request->cond_title;
        $category = $request->category;

        // プロフィール用のコード
        $user = Auth::user();

        if ($cond_title != '') {
            // 検索されたら検索結果を取得する
            $posts = Music::where('title', 'like', '%'.$cond_title.'%')
                ->orderBy('id', 'asc')
                ->get();
        } else {
            // それ以外はすべてのニュースを取得する
            $posts = Music::all();
        }

        if ($category != '') {
            // 検索されたら検索結果を取得する
            $posts = Music::where('category', 'like', '%'.$category.'%')
                ->orderBy('id', 'asc')
                ->get();
        } else {
            // それ以外はすべてのニュースを取得する
            $posts = Music::all();
        }


        return view('admin.home', ['posts' => $posts, 'cond_title' => $cond_title, 'category' => $category, 'user' => $user]);
    }

    public function mypage(Request $request) {
        $user = Auth::user();
        $cond_title = $request->cond_title;
        $category = $request->category;

        $music = Music::where('user_id', Auth::id()) //$userによる投稿を取得
            ->orderBy('created_at', 'desc') // 投稿作成日が新しい順に並べる
            ->get(); // ページネーション; 


        return view('admin.mypage', ['posts' => $music, 'cond_title' => $cond_title, 'user' => $user]);
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
      return redirect('admin/mypage/');
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

        // 該当するデータを上書きして保存する)
        $music->fill($music_form)->save();

        return redirect('admin/mypage');
    }

    private function saveProfileImage($image, $id) {
        // get instance
        $img = \Image::make($image);
        // resize
        $img->fit(100, 100, function($constraint){
            $constraint->upsize(); 
        });
        // save
        $file_name = 'profile_'.$id.'.'.$image->getClientOriginalExtension();
        $save_path = 'public/profiles/'.$file_name;
        Storage::put($save_path, (string) $img->encode());
        // return file name
        return $file_name;
    }

    public function test() {
        return view('admin.test');
    }

}
