@extends('layouts.app')

@section('content')
<div class="container card card-primary">
    <div class="card-header" style="display: flex; justify-content: center; align-items: center;">
        <h4 class="card-title">Thêm Danh mục mới</h4>
    </div>

    <!-- Hiển thị thông báo thành công -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Hiển thị thông báo lỗi -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title">Tên Danh Mục:</label>
            <input type="text" class="form-control" name="title" value="{{ old('title') }}" required>
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Mô Tả:</label>
            <textarea class="form-control" name="description" id="description" rows="4" required>{{ old('description') }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">Hình Ảnh:</label>
            <input type="file" class="form-control-file" name="image" required>
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="status">Trạng Thái:</label>
            <select class="form-control" name="status" required>
                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Hiển Thị</option>
                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Ẩn</option>
            </select>
            @error('status')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Thêm Danh Mục</button>
    </form>
</div>
@endsection
