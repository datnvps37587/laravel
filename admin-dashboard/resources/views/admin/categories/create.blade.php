@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Thêm Danh Mục</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="tendm" class="form-label">Tên Danh Mục:</label>
        <input type="text" id="tendm" name="tendm" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Thêm</button>
</form>

</div>
@endsection
