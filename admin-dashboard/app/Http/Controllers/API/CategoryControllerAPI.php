<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // 1. Lấy danh sách danh mục
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    // 2. Lấy một danh mục theo ID
    public function show($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message' => 'Danh mục không tồn tại'], 404);
        }
        return response()->json($category);
    }

    // 3. Thêm danh mục mới
    public function store(Request $request)
    {
        $request->validate([
            'tendm' => 'required|string|max:255',
        ]);

        $category = Category::create([
            'tendm' => $request->tendm
        ]);

        return response()->json($category, 201);
    }

    // 4. Cập nhật danh mục
    public function update(Request $request, $id)
    {
        $request->validate([
            'tendm' => 'required|string|max:255',
        ]);

        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message' => 'Danh mục không tồn tại'], 404);
        }

        $category->update(['tendm' => $request->tendm]);

        return response()->json($category);
    }

    // 5. Xóa danh mục
    public function destroy($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message' => 'Danh mục không tồn tại'], 404);
        }

        $category->delete();
        return response()->json(['message' => 'Xóa danh mục thành công']);
    }
}

