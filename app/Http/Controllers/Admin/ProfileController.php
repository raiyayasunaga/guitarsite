<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Music;
use App\User;
use App\Cord;
use Image;
use Auth;

class ProfileController extends Controller
{
    public function profile() {
        $user = Auth::user();
        return view('admin.profile', ['user' => $user]);
    }

    public function edit(Request $request) {
        $user = Auth::user();
        return view('admin.profileedit', ['user' => $user]);
    }
    
    public function update($id, UserRequest $request) {
        $user = Auth::user();
        $form = $request->all();
    
        $profileImage = $request->file('profile_image');
        if ($profileImage != null) {
            $form['profile_image'] = $this->saveProfileImage($profileImage, $id); // return file name
        }
    
        unset($form['_token']);
        unset($form['_method']);
        //ユーザーそれぞれのデータの値を保存できる作業 
        $user->user_id = Auth::id();
        
        $user->fill($form)->save();

        return redirect('admin/profile');
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


