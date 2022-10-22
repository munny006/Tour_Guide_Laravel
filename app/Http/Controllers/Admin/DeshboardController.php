<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modeles\Admin;
use Illuminate\Http\Request;

class DeshboardController extends Controller
{
   public function index(){
   	return view('admin.index');
   }
}
