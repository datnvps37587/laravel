@extends('layouts.app')

@section('content')
<div class="container">
                <div class="category-list mt-4 d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold">DANH SÁCH DANH MỤC BÀI VIẾT</h4>
                    <a href="{{ route('danhmuc.create') }}" class="btn btn-primary">Thêm danh mục</a>
                </div>
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <div class="table-responsive border-1">
                    <table class="table table-hover align-middle">
                        <thead class="table-primary">
                            <tr>
            <th>ID</th>
            <th>Tên danh mục</th>
            <th>Mô tả</th>
            <th>Hình ảnh</th>
            <th>Thứ tự</th>
            <th>Ẩn/Hiện</th>
            
        </thead>
        @foreach ($danhmucs as $dm)
        <tr>
            <td>{{ $dm->id }}</td>
            <td>{{ $dm->tendm }}</td>
            <td>{{ $dm->mota }}</td>
            <td><img src="{{ asset('storage/' . $dm->hinh) }}" width="50"></td>
            <td>{{ $dm->thutu }}</td>
            <td>{{ $dm->anhien ? 'Hiện' : 'Ẩn' }}</td>
        </tr>
        @endforeach
    </table>
@endsection