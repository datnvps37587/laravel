<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // Lấy dữ liệu từ bảng "danhmuc"
        return view('admin.categories.index', compact('categories'));
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'tendm' => 'required|string|max:255',
        ]);

        $category = Category::findOrFail($id);
        $category->tendm = $request->tendm;
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Cập nhật danh mục thành công!');
    }
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
    
        return redirect()->route('categories.index')->with('success', 'Xóa danh mục thành công!');
    }
    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tendm' => 'required|string|max:255'
        ]);
    
        category::create([
            'tendm' => $request->tendm
        ]);
    
        return redirect()->route('categories.index')->with('success', 'Danh mục đã được thêm!');
    }
    
    

}
