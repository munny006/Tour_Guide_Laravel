<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
       return view('admin.post.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
        'title' =>'required',
        'image' =>'required|mimes:jpg,png,jpeg',
        'category'=> 'required',
        'tags' =>'required',
        'body' => 'required',
       ]);

       $slug       =  Str::slug($request->title,'-');

       //image & imagename
       $image      =  $request->image;
       $imageName = Str::slug($request->name,'-') .uniqid().'.'.$image->getClientOriginalExtension();

        //image upload
       if(!Storage::disk('public')->exists('post')){
        Storage::disk('public')->makeDirectory('post');
       }
//image cropped
       //$img = Image::make($image)->resize(752,null, function ($constraint) {
    //$constraint->aspectRatio();
    ///$constraint->upsize();
    //})->stream();
    //Storage::disk('public')->put('post/'.$imageName);
       $image->storeAs('post',$imageName,'public');
    $post = new Post();
    $post->title = $request->title;
    $post->user_id = Auth::id();

    $post->category_id =$request->category;
    $post->slug = $slug ;
    $post->image = $imageName ;
    $post->body =$request->body;
    $post->body =$request->body;
    if(isset($request->status)){
        $post->status =1;
    }
    $post->save();
    Toastr::success('Post Created Successfully');
    return redirect()->route('admin.post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
