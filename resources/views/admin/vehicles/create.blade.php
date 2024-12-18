@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <b><span style="text-transform: uppercase; font-size: 35px">Thêm phương tiện</span></b>
    </div>
    <hr>
    <form action="{{ route('vehicles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Dòng trên: Tên xe và Hãng -->
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Tên xe</label>
                    <input type="text" name="name" id="name" class="form-control">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Hãng</label>
                    <input type="text" name="brand" id="brand" class="form-control">
                    @error('brand')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group col-md-4">
                <label for="status">Trạng Thái:</label>
                <select class="form-control" name="status" id="status">
                    <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Hoạt Động</option>
                    <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Ngừng Hoạt Động</option>
                </select>
                @error('status')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Dòng dưới: Số liệu và Mô tả -->
        <div class="row">
            <!-- Cột trái: Số chỗ, Số lượng, Màu, Giá thuê -->
            <div class="col-md-4">
                <div class="form-group mb-3">
                    <label>Số chỗ</label>
                    <input type="number" name="seats" id="seats" class="form-control">
                    @error('seats')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Số lượng</label>
                    <input type="number" name="quantity" id="quantity" class="form-control">
                    @error('quantity')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Bảng màu</label>
                    <input type="text" name="color" id="color" class="form-control">
                    @error('color')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Giá thuê một ngày(VNĐ)</label>
                    <input type="text" name="price_per_day" id="price" class="form-control">
                    @error('price_per_day')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- Cột phải: Mô tả -->
            <div class="col-md-8">
                <div class="form-group">
                    <label for="description">Mô Tả:</label>
                    <textarea class="ckeditor form-control" name="description" id="description" rows="5">{{ old('description') }}</textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
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

        <!-- Nút Lưu -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary px-4 py-2 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Thêm Phương tiện
            </button>
        </div>
    </form>
</div>
@endsection
