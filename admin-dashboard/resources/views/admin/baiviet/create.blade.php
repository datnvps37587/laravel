@extends('layouts.app')

@section('content')
<h1>Thêm Bài Viết</h1>
<form action="{{ route('baiviet.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Tiêu đề:</label>
    <input type="text" name="tieude" required>
    <br>
    <label>Nội dung:</label>
    <textarea name="noidung" required></textarea>
    <br>
    <label>Danh mục:</label>
    <select name="id_danhmuc" required>
        @foreach ($danhmucs as $danhmuc)
            <option value="{{ $danhmuc->id }}">{{ $danhmuc->tendm }}</option>
        @endforeach
    </select>
    <br>
    <label>Hình ảnh:</label>
    <input type="file" name="hinh">
    <br>
    <label>
        <input type="checkbox" name="anhien" value="1"> Hiển thị
    </label>
    <br>
    <button type="submit">Thêm</button>
</form>
@endsection
