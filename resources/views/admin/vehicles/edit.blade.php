@extends('layouts.app')

@section('content')
    <div class="text-center mb-4">
        <b><span style="text-transform: uppercase; font-size: 35px">Chỉnh sửa phương tiện</span></b>
    </div>
    <hr>
    <!-- Hiển thị thông báo thành công -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('vehicles.update', $vehicle->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- Dòng trên: Tên xe và Hãng -->
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Tên xe</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$vehicle->name}}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Hãng</label>
                    <input type="text" name="brand" id="brand" class="form-control" value="{{$vehicle->brand}}">
                    @error('brand')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group col-md-4">
                <label for="status">Trạng Thái:</label>
                <select class="form-control" name="status" id="status">
                    <option value="1" {{ $vehicle->status == '1' ? 'selected' : '' }}>Hoạt Động</option>
                    <option value="0" {{ $vehicle->status == '0' ? 'selected' : '' }}>Ngừng Hoạt Động</option>
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
                    <input type="number" name="seats" id="seats" class="form-control" value="{{$vehicle->seats}}">
                    @error('seats')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Số lượng</label>
                    <input type="number" name="quantity" id="quantity" class="form-control" value="{{$vehicle->quantity}}">
                    @error('quantity')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Bảng màu</label>
                    <input type="text" name="color" id="color" class="form-control" value="{{$vehicle->color}}">
                    @error('color')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Giá thuê một ngày(VNĐ)</label>
                    <input type="text" name="price_per_day" id="price" class="form-control" value="{{$vehicle->price_per_day}}">
                    @error('price_per_day')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- Cột phải: Mô tả -->
            <div class="col-md-8">
                <div class="form-group">
                    <label for="description">Mô Tả:</label>
                    <textarea class="ckeditor form-control" name="description" id="description" rows="5">{{ $vehicle->description }}</textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col">
                <label for="status">Ảnh bìa hiện tại:</label>
                <div>
                    <img src="{{ asset('upload/vehicles/' . $vehicle->image) }}" alt="{{ $vehicle->title }}" width="150">
                </div>
            </div>

            <div class="form-group col">
                <label for="status">Ảnh bìa mới (nếu muốn thay đổi):</label>
                <div class="custom-file">
                    <input name="image" type="file" class="custom-file-input" id="validatedCustomFile">
                    <label class="custom-file-label" for="validatedCustomFile" id="fileLabel">Chọn ảnh...</label>
                </div>
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Nút Lưu -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary px-4 py-2 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Cập nhật Phương tiện
            </button>
        </div>
    </form>
@endsection
