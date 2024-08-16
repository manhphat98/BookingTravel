@extends('layouts.app')

@section('content')
<style>
    .error-message {
        color: red;
        font-style: italic;
        margin-left: 10px; /* Khoảng cách giữa Status và thông báo lỗi */
        display: inline-block;
    }
</style>

<div class="card card-primary">
    <div class="card-header" style="display: flex; justify-content: center; align-items: center;">
        <h4 class="card-title">Tạo Danh mục</h4>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên Danh mục
                    @error('title')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </label>
                <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Nhập tên Danh mục ..." value="{{ old('title') }}">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Mô tả</label>
                <input type="text" class="form-control" name="description" id="exampleInputPassword1" placeholder="Mô tả chút về loại Danh mục ..." value="{{ old('description') }}">
            </div>

            <div class="form-group">
                <label for="exampleInputFile">Hình ảnh
                    @error('image')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Chọn ảnh</label>
                    </div>
                </div>
            </div>

            <div class="form-check">
                <input type="checkbox" name="status" value="1" class="form-check-input" id="exampleCheck1" {{ old('status') ? 'checked' : '' }}>
                <label class="form-check-label" for="exampleCheck1">Status
                    @error('status')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </label>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer" style="display: flex; justify-content: center; align-items: center;">
            <button type="submit" class="btn btn-primary">Tạo</button>
        </div>
    </form>
</div>
@endsection
