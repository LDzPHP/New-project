<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{   
    public function index()
    {
        $comment = Comment::find(2);
        dd($comment->customer);
    }
    
    public function store(Request $request)
    {   
        $validatedData = $request->validate([
            'author' => 'string|required',
            'body' => 'required|max:255',
            'customer_id' => 'required',
        ]);

        $comment = new Comment([
            'author' => $validatedData['author'],
            'body' => $validatedData['body'],
            'customer_id' => $validatedData['customer_id'],
        ]);
        $comment->save();

        return redirect()->back();
    }
}