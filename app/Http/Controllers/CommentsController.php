<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
      public function index()
    {
        return Comment::all();
    }

    public function edit(Request $request, Comment $comment)
    {
        $comment->update($request->all());
        return response()->json($comment);
    }

    public function delete(Comment $comment)
    {
        $comment->delete();

        return response()->json(null, 204);
    }

    public function store(Request $request)
    {
        return Comment::create($request->all());
    }

    public function show(Comment $comment)
    {
        return $comment;
    }
    


}

