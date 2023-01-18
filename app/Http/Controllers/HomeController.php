<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::latest()->take(6)->published()->get();
        return view('index',compact('posts'));
    }
    public function posts(){
        $posts = Post::latest()->published()->paginate(10);
        $categories = Category::take(10)->get();
        return view('posts',compact('posts','categories'));
    }
  public function post($slug){
        $post = Post::where('slug',$slug)->published()->first();
        $categories = Category::take(10)->get();
        $posts = Post::latest()->take(3)->published()->get();
        return view('post',compact('post','categories','posts'));
    }

      public function categories(){
        $categories = Category::all();
        
        return view('categories',compact('categories'));
    }

    public function categoryPost($slug){
             $category = Category::where('slug',$slug)->first();
             $post = $category->posts->published()->get();
             return view('categoryPost',compact('post'));
    }

}
