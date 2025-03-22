<?php

namespace App\Http\Controllers;

use App\Models\BaiViet;
use App\Models\DanhMucBaiViet;
use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    public function index()
    {
        $baiviet = BaiViet::with('danhMuc')->get();
        return view('admin.baiviet.index', compact('baiviet'));
    }

    public function create()
    {
        $danhmucs = DanhMucBaiViet::all();
        return view('admin.baiviet.create', compact('danhmucs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tieude' => 'required',
            'noidung' => 'required',
            'id_danhmuc' => 'required|exists:danhmucbaiviet,id',
            'hinh' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imagePath = null;
        if ($request->hasFile('hinh')) {
            $imagePath = $request->file('hinh')->store('baiviet_images', 'public');
        }

        BaiViet::create([
            'tieude' => $request->tieude,
            'noidung' => $request->noidung,
            'hinh' => $imagePath,
            'anhien' => $request->has('anhien') ? 1 : 0,
            'id_danhmuc' => $request->id_danhmuc
        ]);

        return redirect()->route('baiviet.index')->with('success', 'Bài viết đã được tạo!');
    }
}
