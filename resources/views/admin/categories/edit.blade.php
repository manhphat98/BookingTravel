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
            <label for="parent_id">Phân Mục:</label>
            <select name="parent_id" id="parent_id" class="form-control">
                <option value="0">-- Chọn Danh Mục Cha --</option>
                @foreach($categories as $key =>$val)
                    <option {{$val->id == $category->id ? 'select' : ''}} value="{{ $val->id }}">
                        @php
                            $str = '';
                            for ($i = 0; $i < $val->level; $i++) {
                                if ($val->level == 1) {
                                    $str = '🌐 ';
                                }else{
                                    $str .= '-- ';
                                }
                            }
                        @endphp
                            {!! $str . $val->title !!}
                    </option>
                @endforeach
            </select>
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
