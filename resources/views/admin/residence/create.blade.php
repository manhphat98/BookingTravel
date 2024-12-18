@extends('layouts.app')

@section('content')
    <div class="text-center mb-4">
        <b><span style="text-transform: uppercase; font-size: 35px">Thêm Nơi Lưu Trú</span></b>
    </div>
    <hr>
    <!-- Hiển thị thông báo thành công -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('residences.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group col-md-6">
                <label for="name">Tên Nơi Lưu Trú:</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="status">Trạng Thái:</label>
                <select class="form-control" name="status" id="status">
                    <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Hoạt Động</option>
                    <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Ngừng Hoạt Động</option>
                </select>
                @error('status')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div><hr>

        <div class="form-group">
            <div class="row">
                <div class="col-md-1">
                    <label for="address">Địa Chỉ:</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="address" id="address" placeholder="Số nhà, tên đường" value="{{ old('address') }}">
                </div>
                <div class="col-md-5">
                    <label id="result"></label>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <label for="province">Tỉnh/Thành phố</label>
                    <select class="form-control" id="province" name="province" >
                        <option value="">Chọn tỉnh/thành</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="district">Quận/Huyện</label>
                    <select class="form-control" id="district" name="district" >
                        <option value="">Chọn quận/huyện</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="ward">Phường/Xã</label>
                    <select class="form-control" id="ward" name="ward" >
                        <option value="">Chọn phường/xã</option>
                    </select>
                </div>
            </div>
            @error('address')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div><hr>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="price_per_night">Giá Một Đêm:</label>
                <input type="text" class="form-control" name="price_per_night" id="price" value="{{ old('price_per_night') }}">
                @error('price_per_night')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label for="rating">Đánh Giá:</label>
                <input type="number" class="form-control" name="rating" id="rating" min="0" max="5" step="0.5" value="{{ old('rating') }}">
                @error('rating')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label for="image">Hình Ảnh:</label>
                <div class="custom-file">
                    <input name="image" type="file" class="custom-file-input" id="validatedCustomFile">
                    <label class="custom-file-label" for="validatedCustomFile" id="fileLabel">Chọn ảnh...</label>
                </div>
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="description">Mô Tả:</label>
            <textarea class="ckeditor form-control" name="description" id="description" rows="5">{{ old('description') }}</textarea>
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary px-4 py-2 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Thêm Nơi Lưu Trú
            </button>
        </div>
    </form>
@endsection

