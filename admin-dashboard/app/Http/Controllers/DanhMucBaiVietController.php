<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhMucBaiViet;

class DanhMucBaiVietController extends Controller
{
    // Hiển thị danh sách danh mục
    public function index()
    {
        $danhmucs = DanhMucBaiViet::all();
        return view('admin.baiviet.danhmuc.index', compact('danhmucs'));
    }

    // Hiển thị form thêm danh mục

    public function create()
    {
        return view('admin.baiviet.danhmuc.create');
    }
    
    // Lưu danh mục vào database
    public function store(Request $request)
    {
        $request->validate([
            'tendm' => 'required|max:100',
            'mota' => 'nullable|max:255',
            'hinh' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'thutu' => 'nullable|integer',
            'anhien' => 'boolean',
        ]);

        // Upload ảnh nếu có
        $hinhPath = null;
        if ($request->hasFile('hinh')) {
            $hinhPath = $request->file('hinh')->store('danhmuc', 'public');
        }

        // Tạo danh mục mới
        DanhMucBaiViet::create([
            'tendm' => $request->tendm,
            'mota' => $request->mota,
            'hinh' => $hinhPath,
            'thutu' => $request->thutu ?? 0,
            'anhien' => $request->anhien ?? 1,
        ]);

        return redirect()->route('danhmuc.index')->with('success', 'Thêm danh mục thành công!');
    }
}
