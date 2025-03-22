@extends('layouts.app')
@section('content')

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="container">
                <div class="category-list mt-4 d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold">DANH SÁCH DANH MỤC</h4>
                </div>
                <div class="table-responsive border-1">
                    <table class="table table-hover align-middle">
                        <thead class="table-primary">    
                            <tr>
        <th>ID</th>
        <th>Bài viết</th>
        <th>Khách hàng</th>
        <th>Nội dung</th>
        <th>Trạng thái</th>
        <th>Ngày tạo</th>
        <th>Hành động</th>
    </tr>
    </thead>
    @foreach ($comments as $comment)
    <tr>
        <td>{{ $comment->id }}</td>
        <td>{{ $comment->baiviet->tieude ?? 'Bài viết đã bị xóa' }}</td>
        <td>{{ $comment->khachhang->ten ?? 'Khách ẩn danh' }}</td>
        <td>{{ $comment->noidung }}</td>
        <td>{{ $comment->anhien ? 'Hiện' : 'Ẩn' }}</td>
        <td>{{ $comment->ngaytao }}</td>
        <td>
            <form action="{{ route('admin.comment.delete', $comment->id) }}" method="POST" style="display:inline">
                @csrf
                <button type="submit" onclick="return confirm('Xóa bình luận này?')">Xóa</button>
            </form>
            <form action="{{ route('admin.comment.toggle', $comment->id) }}" method="POST" style="display:inline">
                @csrf
                <button type="submit">{{ $comment->anhien ? 'Ẩn' : 'Hiện' }}</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
