@extends('layouts.app')

@section('content')

<div class="admin d-flex">
        <!-- Nội dung chính -->
            <div class="container">
                <div class="category-list mt-4 d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold">DANH SÁCH DANH MỤC</h4>
                    <a href="{{ route('categories.create') }}" class="btn btn-primary">Thêm danh mục</a>
                </div>
                <div class="table-responsive border-1">
                    <table class="table table-hover align-middle">
                        <thead class="table-primary">
                            <tr>
                                <th>ID danh mục</th>
                                <th>Tên danh mục</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>#{{ $category->id }}</td>
                                <td>{{ $category->tendm }}</td>
                                <td>
                                    <a href="{{ route('categories.edit', $category->id) }}">
                                        <span class="badge bg-success text-success p-2">
                                            <i class="bi bi-pencil"></i> Sửa
                                        </span>
                                    </a>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="badge bg-danger text-danger p-2 border-0">
                                            <i class="bi bi-trash3"></i> Xoá
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
@endsection
