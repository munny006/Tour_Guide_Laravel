<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class DeshboardController extends Controller
{
   public function index(){
   	return view('admin.index');
   }
   public function showProfile(){

      $user = User::find(Auth::user()->id);
      return view('admin.profile',compact('user'));
   }
      public function updateProfile(){
         
      }
}
