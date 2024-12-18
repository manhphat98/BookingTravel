@extends('layouts.app')

@section('content')
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

    <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div class="row">

            <div class="form-group col">
                <label for="title" >Tên Danh Mục:</label>
                <input type="text" class="form-control mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" name="title" value="{{ old('title', $category->title) }}" required>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col">
                <label for="status">Trạng Thái:</label>
                <select class="form-control" name="status" required>
                    <option value="1" {{ old('status', $category->status) == '1' ? 'selected' : '' }}>Hiển Thị</option>
                    <option value="0" {{ old('status', $category->status) == '0' ? 'selected' : '' }}>Ẩn</option>
                </select>
                @error('status')
                    <div class="text-danger">{{ $message }}</div>
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
            <textarea class="ckeditor form-control" name="description" id="description" rows="4" required>{{ old('description', $category->description) }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="status">Ảnh bìa hiện tại:</label>
            <div>
                <img src="{{ asset('upload/categories/' . $category->image) }}" alt="{{ $category->title }}" width="150">
            </div>
        </div>

        <div class="form-group">
            <label for="status">Ảnh bìa mới (nếu muốn thay đổi):</label>
            <div class="custom-file">
                <input name="image" type="file" class="custom-file-input" id="validatedCustomFile">
                <label class="custom-file-label" for="validatedCustomFile" id="fileLabel">Chọn ảnh...</label>
            </div>
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Cập Nhật Danh mục</button>
        </div>

    </form>
{{-- Hiện tên file ảnh --}}
<script>
    document.getElementById('validatedCustomFile').addEventListener('change', function(){
    var fileName = this.files[0].name;
    var label = document.getElementById('fileLabel');
    label.textContent = fileName;
});
</script>

@endsection
