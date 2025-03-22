<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return response()->json(News::all(), 200);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'tieude' => 'required|string|max:255',
            'noidung' => 'required|string',
            'hinh' => 'nullable|string',
            'anhien' => 'boolean',
            'id_danhmuc' => 'required|integer',
        ]);

        $news = News::create($data);
        return response()->json($news, 201);
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return response()->json($news, 200);
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $news->update($request->all());
        return response()->json($news, 200);
    }

    public function destroy($id)
    {
        News::destroy($id);
        return response()->json(['message' => 'Deleted successfully'], 200);
    }
}

