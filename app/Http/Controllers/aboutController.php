<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;

use Brian2694\Toastr\Facades\Toastr;
use Session;

class aboutController extends Controller
{
    public function index()
    {

        return view('about');

    }
}
