<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;

class CommentController extends Controller
{
    public function index(){
        $comments = Comment::all();
        return view('admin.comments.index',compact('comments'));
    }
   public function delete($id)
   {
    $comment = Comment::find($id);
    $comment->delete();
     Toastr::success('success','Comment Successfully Deleted!!!');
        return redirect()->back();
   }
}