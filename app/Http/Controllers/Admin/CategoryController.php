<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name'=>'required',
            'description' =>'sometimes',
            'image' =>'required|mimes:jpg,png,bmp,jpeg'

        ]);
        //image
        $image = $request->image;
        $imageName = Str::slug($request->name,'-') .uniqid().'.'.$image->getClientOriginalExtension();
        if(!Storage::disk('public')->exists('category')){
            Storage::disk('public')->makeDirectory('category');

        }

        //store

        $image->storeAs('category',$imageName,'public');


        $category = new Category();
        $category->name = $request->name;
        $category->slug =Str::slug($request->name,'-');
        $category->description = $request->description;
        $category->image = $imageName;
        $category->save();
        Toastr::success('Category Created Successfully');
        return redirect()->back();
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

        if($request->name == Category::find($id)->name){
           $this->validate($request,[
            'name'=>'required',
            'description' =>'sometimes',
            'image' =>'sometimes|mimes:jpg,png,bmp,jpeg'

        ]);

       }
       else{
         $this->validate($request,[
            'name'=>'required',
            'description' =>'sometimes',
            'image' =>'sometimes|mimes:jpg,png,bmp,jpeg'
             ]);
       }

       $category = Category::find($id);
       if($category->image !=null){
              //image
        $image = $request->image;
        $imageName = Str::slug($request->name,'-') .uniqid().'.'.$image->getClientOriginalExtension();
        if(!Storage::disk('public')->exists('category')){
            Storage::disk('public')->makeDirectory('category');

        }
        //delete
        if(Storage::disk('public')->exists('category/'.$category->image)){
            Storage::disk('public')->delete('category/'.$category->image);
        }
        //store
        $image->storeAs('category',$imageName,'public');
    }
    else{
        $imageName = $category->image;
    }

    $category->name = $request->name;
    $category->slug =Str::slug($request->name,'-');
    $category->description = $request->description;
    $category->image = $imageName;
    $category->save();
    Toastr::success('Category Updated Successfully');
    return redirect()->back();
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $category = Category::find($id);
      Storage::disk('public')->delete('category/'.$category->image);
     $category->delete();
     Toastr::success('Category Deleted Successfully');
     return redirect()->back();
 }
}
