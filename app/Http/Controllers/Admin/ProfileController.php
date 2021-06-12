<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Music;
use App\User;
use App\Skin;

use Auth;

class ProfileController extends Controller
{
    public function edit(Request $request) {
        $user = Auth::user();
        return view('admin.profileedit', ['user' => $user]);
    }
    
    public function update(Request $request) {
        
        $user = Auth::user();
        $form = $request->all();

        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/profile');
            $user->profile_image = basename($path);
          } else {
              $user->profile_image = null;
          }
        
        unset($form['_token']);
        unset($form['image']);
        
        $user->fill($form)->save();

        return redirect('admin/profileedit');
    }

    // skinsテーブル
    public function skin(Request $request) 
    {    
        // $this->validate($request, Skin::$rules);
        $user = Auth::user();

        $user->skin_id = $request->skin_id;
        $user->save();

        return redirect('admin/mypage');
    }
    
    public function name(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->save();

        return redirect('admin/profileedit');
    }
}


