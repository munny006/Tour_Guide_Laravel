<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Modeles\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
   	return view('user.index');
   }
   public function likedPosts(){
    return view('user.likedPosts');
   }
}
