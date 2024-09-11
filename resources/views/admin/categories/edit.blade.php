@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-5 p-5 bg-white shadow-lg rounded-lg">
    <div class="text-center mb-4">
        <b><span style="text-transform: uppercase; font-size: 35px">Cập nhật thông tin Danh mục</span></b>
    </div>
    <hr>

    <!-- Hiển thị thông báo thành công -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('categories.update', $categories->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div class="row">

            <div class="form-group col">
                <label for="title" >Tên Danh Mục:</label>
                <input type="text" class="form-control mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" name="title" value="{{ old('title', $categories->title) }}" required>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col">
                <label for="status">Trạng Thái:</label>
                <select class="form-control" name="status" required>
                    <option value="1" {{ old('status', $categories->status) == '1' ? 'selected' : '' }}>Hiển Thị</option>
                    <option value="0" {{ old('status', $categories->status) == '0' ? 'selected' : '' }}>Ẩn</option>
                </select>
                @error('status')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

        </div>

        <div class="form-group">
            <label for="description">Mô Tả:</label>
            <textarea class="ckeditor form-control" name="description" id="description" rows="4" required>{{ old('description', $categories->description) }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="status">Hình ảnh hiện tại:</label>
            <div>
                <img src="{{ asset('upload/categories/' . $categories->image) }}" alt="{{ $categories->title }}" width="150">
            </div>
        </div>

        <div class="form-group">
            <label for="status">Hình ảnh mới (nếu muốn thay đổi):</label>
            <div class="custom-file">
                <input name="image" type="file" class="custom-file-input" id="validatedCustomFile">
                <label class="custom-file-label" for="validatedCustomFile" id="fileLabel">Chọn ảnh...</label>
            </div>
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            {{-- Hiện tên file ảnh --}}
            <script>
                document.getElementById('validatedCustomFile').addEventListener('change', function(){
                var fileName = this.files[0].name;
                var label = document.getElementById('fileLabel');
                label.textContent = fileName;
            });
            </script>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary px-4 py-2 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cập Nhật Danh Mục</button>
        </div>

    </form>
</div>

@endsection
