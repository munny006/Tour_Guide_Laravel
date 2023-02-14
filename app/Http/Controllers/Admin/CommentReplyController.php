<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CommentReply;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
class CommentReplyController extends Controller
{
       public function index(){
        $reply_comments =CommentReply::all();
        return view('admin.reply-comments.index',compact('reply_comments'));
    }


   public function delete($id)
   {
    $reply_comment =CommentReply::find($id);

    
    $reply_comment->delete();
     Toastr::success('success','Comment Successfully Deleted!!!');
        return redirect()->back();
   }
}
