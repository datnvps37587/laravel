<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json(Product::all(), 200);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'tensp' => 'required|string|max:255',
            'mota' => 'nullable|string',
            'hinh' => 'nullable|string',
            'gia' => 'required|integer',
            'giamgia' => 'nullable|integer',
            'soluong' => 'required|integer',
            'id_danhmuc' => 'required|integer',
            'id_nhacungcap' => 'required|integer',
        ]);

        $product = Product::create($data);
        return response()->json($product, 201);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product, 200);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return response()->json($product, 200);
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return response()->json(['message' => 'Deleted successfully'], 200);
    }
}
