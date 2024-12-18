@extends('layouts.app')

@section('content')
    <div class="text-center mb-4">
        <b><span style="text-transform: uppercase; font-size: 35px">Thêm Danh Mục Mới</span></b>
    </div>
    <hr>
    <!-- Hiển thị thông báo thành công -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group col">
                <label for="title">Tên Danh Mục:</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group col">
                <label for="status">Trạng Thái:</label>
                <select class="form-control" name="status" id="status">
                    <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Hiển Thị</option>
                    <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Ẩn</option>
                </select>
                @error('status')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="category_id">Danh Mục:</label>
            <select name="parent_id" id="parent_id" class="form-control">
                <option value="" {{ old('parent_id') == '' ? 'selected' : '' }}>-- Chọn danh mục --</option>
                @foreach ($categories as $key => $category)
                    @if ($category->parent_id == 0)
                        <option class="text-uppercase font-weight-bold" value="{{ $category->id }}" disabled>{{ $category->title }}</option>
                        @foreach ($categories as $key => $sub_category)
                            @if ($sub_category->parent_id == $category->id)
                                <option value="{{ $sub_category->id }}" {{ old('parent_id') == $sub_category->id ? 'selected' : '' }}>
                                    {{ $sub_category->title }}
                                </option>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </select>
            @error('category_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Mô Tả:</label>
            <textarea class="ckeditor form-control" name="description" id="description" rows="4">{{ old('description') }}</textarea>
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">Hình ảnh:</label>
            <div class="custom-file">
                <input name="image" type="file" class="custom-file-input" id="validatedCustomFile">
                <label class="custom-file-label" for="validatedCustomFile" id="fileLabel">Chọn ảnh...</label>
            </div>
            @error('image')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary px-4 py-2 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Thêm Danh Mục
            </button>
        </div>
    </form>

    <script>
        document.getElementById('validatedCustomFile').addEventListener('change', function () {
            var fileName = this.files[0].name;
            document.getElementById('fileLabel').textContent = fileName;
        });
    </script>
@endsection
