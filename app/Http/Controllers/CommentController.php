<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\CommentReply;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;

class CommentController extends Controller
{
   public function store(Request $request,$post)
   {
        $this->validate($request,['comment' =>'required']);

        //store

        $comment = new Comment();
        $comment->post_id = $post;
        $comment->user_id = Auth::id();
        $comment->comment = $request->comment;
        $comment->save();

        //success msg show
        Toastr::success('success','The Comment created Successfullu!!!');
        return redirect()->back();
   }
}
