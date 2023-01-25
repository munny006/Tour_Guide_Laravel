<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
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
        
        return view('posts',compact('posts'));
    }
  public function post($slug){
        $post = Post::where('slug',$slug)->published()->first();
       
        $posts = Post::latest()->take(3)->published()->get();
        return view('post',compact('post','posts'));
    }

      public function categories(){
        $categories = Category::all();
        
        return view('categories',compact('categories'));
    }

    public function categoryPost($slug){
             $category = Category::where('slug',$slug)->first();
             $posts = $category->posts()->published()->paginate(10);
             //$categories = Category::all();
             
             return view('categoryPost',compact('posts'));
    }

    public function search(Request $request){

        $this->validate($request,['search'=>'required']);
        $search = $request->search;
        $posts = Post::where('title','like',"%$search%")->paginate(10);
        $posts->appends(['search'=>$search]);
        //$categories = Category::all();
        return view('search',compact('posts','search'));

    }

    public function tagPosts($name)
    {
        $tags= Tag::where('name','like',"%$name%")->paginate(10); 
        $tags->appends(['search'=>$name])->paginate(10);
        return view('tagPosts',compact('tags'));
    }

}

