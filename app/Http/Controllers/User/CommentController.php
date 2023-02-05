<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CommentController extends Controller
{
 public function index(){
    $comments = Comment::where('user_id',Auth::id())->latest()->get();
    return view('user.comments.index',compact('comments'));
}
public function delete($id)
{
    $comment = Comment::find($id);
    if($comment->user_id == Auth::id()){
        $comment->delete();
    Toastr::success('success','Comment Successfully Deleted!!!');
    return redirect()->back();
    }
    else{
        Toastr::error('success','You Can not Delete this comment ');
    return redirect()->back();
    }
}
}
