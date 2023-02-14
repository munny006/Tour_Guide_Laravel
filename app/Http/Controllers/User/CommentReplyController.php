<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CommentReply;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;

class CommentReplyController extends Controller
{
   public function index(){
        $reply_comments =CommentReply::where('user_id',Auth::id())->get();
        return view('user.reply-comments.index',compact('reply_comments'));
    }


   public function delete($id)
   {
    $reply_comment =CommentReply::find($id);
   
    if($reply_comment->user_id == Auth::id()){
        
         $reply_comment->delete();
    Toastr::success('success','Comment Successfully Deleted!!!');
    return redirect()->back();
    }
    else{
        Toastr::error('success','You Can not Delete this comment ');
    return redirect()->back();
    }
     // Toastr::success('success','Comment Successfully Deleted!!!');
     //    return redirect()->back();
   }
}
