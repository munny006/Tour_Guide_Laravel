<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommentReply;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;

class CommentReplyController extends Controller
{
    public function store(Request $request, $comment){
        $this->validate($request,['message'=>'required']);
        $commentreply = new CommentReply();
        $commentreply->comment_id = $comment;
        $commentreply->user_id = Auth::id();
        $commentreply->message = $request->message;
        $commentreply->save();

        Toastr::success('Comment Reply Successfully');
    return redirect()->back();
    }
}
