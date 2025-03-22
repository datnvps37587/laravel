@extends('layouts.app')

@section('content')
<div class="container">
                <div class="category-list mt-4 d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold">DANH SÁCH BÀI VIẾT</h4>
                    <span>                    
                        <a href="{{ route('baiviet.create') }}" class="btn btn-primary">Thêm bài viết</a>
                        <a href="{{ route('danhmuc.create') }}" class="btn btn-primary">Thêm danh mục</a>
                    </span>
                </div>
        <form action="{{ route('danhmuc.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="tendm">Tên danh mục:</label>
        <input type="text" name="tendm" id="tendm" required>
        <br>

        <label for="mota">Mô tả:</label>
        <textarea name="mota" id="mota"></textarea>
        <br>

        <label for="hinh">Hình ảnh:</label>
        <input type="file" name="hinh" id="hinh">
        <br>

        <label for="thutu">Thứ tự:</label>
        <input type="number" name="thutu" id="thutu">
        <br>

        <label for="anhien">Ẩn/Hiện:</label>
        <select name="anhien" id="anhien">
            <option value="1">Hiện</option>
            <option value="0">Ẩn</option>
        </select>
        <br>

        <button type="submit">Thêm</button>
    </form>
    </div>
    @endsection
