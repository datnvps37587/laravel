<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        return response()->json(Comment::all(), 200);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'noidung' => 'required|string',
            'id_khachhang' => 'required|integer',
            'id_sanpham' => 'required|integer',
        ]);

        $comment = Comment::create($data);
        return response()->json($comment, 201);
    }

    public function show($id)
    {
        $comment = Comment::findOrFail($id);
        return response()->json($comment, 200);
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->update($request->all());
        return response()->json($comment, 200);
    }

    public function destroy($id)
    {
        Comment::destroy($id);
        return response()->json(['message' => 'Deleted successfully'], 200);
    }
}
