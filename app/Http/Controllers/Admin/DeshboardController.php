<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class DeshboardController extends Controller
{
   public function index(){
   	return view('admin.index');
   }
   public function showProfile(){

      $user = User::find(Auth::user()->id);
      return view('admin.profile',compact('user'));
   }
      public function updateProfile(Request $request){
         $this->validate($request,[
            'name' => 'required',
            'userid' =>'required',
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
        if(Storage::disk('public')->exists('user/'.$user->image)){
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


}
