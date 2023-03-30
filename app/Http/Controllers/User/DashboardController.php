<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index(){
   	return view('user.index');
   }
   public function likedPosts(){
    return view('user.likedPosts');
   }

   public function showProfile(){
    // dd(Auth::user());
  $user = User::find(Auth::user()->id);
  return view('user.profile',compact('user'));
}
  public function updateProfile(Request $request){
     $this->validate($request,[
        'name' => 'required',
        'userid' =>'required|unique:users',
        'about' =>'sometimes',
        'image' =>'sometimes|mimes:jpg,png,jpeg'


     ]);
       $user = User::find(Auth::user()->id);
   if($request->image !=null){
          //image
    $image = $request->image;
    $imageName = Str::slug($request->name,'-') .uniqid().'.'.$image->getClientOriginalExtension();
    if(!Storage::disk('public')->exists('user')){
        Storage::disk('public')->makeDirectory('user');

    }
    //delete
    if($user->image !== 'default.jpg' && Storage::disk('public')->exists('user/'.$user->image)){
        Storage::disk('public')->delete('user/'.$user->image);
    }
    //store
    $image->storeAs('user',$imageName,'public');
}
else{
    $imageName = $user->image;
}

$user->name = $request->name;
$user->userid = $request->userid;
$user->image = $imageName;
$user->about = $request->about;
$user->save();
 Toastr::success('Details Updated Successfully');
return redirect()->back();
  }

public function changePassword(Request $request){
$this->validate($request,[
    'old_password' =>'required',
    'password' =>'required|confirmed',


]);

//cross check the old _password

   $oldPass = Auth::user()->password; // hashed
    if (Hash::check($request->old_password, $oldPass)) {
        // old pass shoud not be same as new pass
        if (!Hash::check($request->password, $oldPass)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();

            ///Logout

            return redirect('/');
        } else {
            Toastr::error('New password should not be same as old password :(');
            return redirect()->back();
        }
    } else {
        Toastr::error('Enter the correct old password :(');
        return redirect()->back();
    }

}

}
