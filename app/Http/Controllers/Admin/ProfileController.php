<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Music;
use App\User;
use App\Skin;
use Storage; 
use Image;
use Auth;

class ProfileController extends Controller
{
    public function edit(Request $request) {
        $user = Auth::user();
        return view('admin.profileedit', ['user' => $user]);
    }
    
    public function updata(Request $request) {
        $user = Auth::user();

        $profileImage = Storage::disk('s3');
        if ($profileImage != null) {
            $form['s3'] = $this->saveProfileImage($profileImage, Auth::id()); // return file name
        }
    
        unset($form['_token']);
        unset($form['_method']);
        //ユーザーそれぞれのデータの値を保存できる作業 
        
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
}


