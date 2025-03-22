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
                @if(session('success'))
    <p>{{ session('success') }}</p>
@endif
                <div class="table-responsive border-1">
                    <table class="table table-hover align-middle">
                        <thead class="table-primary">
    <tr>
        <th>Tiêu đề</th>
        <th>Nội dung</th>
        <th>Danh mục</th>
        <th>Hình ảnh</th>
        <th>Ẩn/Hiện</th>
    </tr>
</thead>
    @foreach ($baiviet as $item)
    <tr>
        <td>{{ $item->tieude }}</td>
        <td>{{ Str::limit($item->noidung, 100) }}</td>
        <td>{{ $item->danhMuc->tendm }}</td>
        <td>
            @if ($item->hinh)
                
                <img src="{{ asset('/storage/app/public/' . $item->hinh) }}" width="100">
            @endif
        </td>
        <td>{{ $item->anhien ? 'Hiện' : 'Ẩn' }}</td>
    </tr>
    @endforeach
</table>
</div>



@endsection
