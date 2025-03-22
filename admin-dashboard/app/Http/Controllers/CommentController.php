<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BinhLuanBV;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = BinhLuanBV::with(['baiviet', 'khachhang'])->orderBy('ngaytao', 'desc')->get();
        return view('admin.comments.index', compact('comments'));
    }

    public function destroy($id)
    {
        BinhLuanBV::destroy($id);
        return redirect()->route('admin.comments.index')->with('success', 'Đã xóa bình luận!');
    }

    public function toggle($id)
    {
        $comment = BinhLuanBV::findOrFail($id);
        $comment->anhien = !$comment->anhien;
        $comment->save();
        return redirect()->route('admin.comments.index')->with('success', 'Cập nhật trạng thái bình luận!');
    }
}
