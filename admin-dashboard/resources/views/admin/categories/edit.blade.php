@extends('layouts.app')

@section('content')
<div class="container mt-4">
                    <h4 class="fw-bold">Sửa danh mục</h4>    
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Tên danh mục cần sửa: #{{ $category->id }}-{{ $category->tendm }}</label> 
            <input type="text" class="form-control" id="name" name="tendm" required>
        </div>
        <button type="submit" class="btn btn-primary">Cập Nhật</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Quay Lại</a>
    </form>
</div>
@endsection
