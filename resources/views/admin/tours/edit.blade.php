@extends('layouts.app')

@section('content')
    <div class="text-center mb-4">
        <b><span style="text-transform: uppercase; font-size: 35px">Chỉnh Sửa Tour</span></b>
    </div>
    <hr>
    <!-- Hiển thị thông báo thành công -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('tours.update', $tour->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="form-group col">
                <label for="title">Tên Tour:</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $tour->title }}">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group col">
                <label for="category_id">Danh Mục:</label>
                <select name="category_id" id="category_id" class="form-control">
                    <option value="" {{ $tour->category_id == '' ? 'selected' : '' }}>-- Chọn danh mục --</option>
                    @foreach ($categories as $category)
                        @if ($category->parent_id == 0)
                            <option class="text-uppercase font-weight-bold" value="{{ $category->id }}" disabled>{{ $category->title }}</option>
                            @foreach ($categories as $sub_category)
                                @if ($sub_category->parent_id == $category->id)
                                    <option value="{{ $sub_category->id }}" {{ $tour->category_id == $sub_category->id ? 'selected' : '' }}>
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

            <div class="form-group col">
                <label for="status">Trạng Thái:</label>
                <select class="form-control" name="status" id="status">
                    <option value="1" {{ $tour->status == '1' ? 'selected' : '' }}>Hiển Thị</option>
                    <option value="0" {{ $tour->status == '0' ? 'selected' : '' }}>Ẩn</option>
                </select>
                @error('status')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div><hr>

        <div class="row">
            <div class="form-group col">
                <label for="start_date">Ngày Bắt Đầu:</label>
                <input type="date" class="form-control" name="start_date" id="start_date" value="{{ $tour->start_date }}">
                @error('start_date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group col">
                <label for="end_date">Ngày Kết Thúc:</label>
                <input type="date" class="form-control" name="end_date" id="end_date" value="{{ $tour->end_date }}">
                @error('end_date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group col">
                <label for="tour_from">Điểm Khởi Hành:</label>
                <input type="text" class="form-control" name="tour_from" id="tour_from" value="{{ $tour->tour_from }}">
                @error('tour_from')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group col">
                <label for="tour_to">Điểm Đến:</label>
                <input type="text" class="form-control" name="tour_to" id="tour_to" value="{{ $tour->tour_to }}">
                @error('tour_to')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div><hr>

        <div class="row">
            <div class="form-group col">
                <label for="price">Giá Tour:</label>
                <input type="text" class="form-control" name="price" id="price" value="{{ $tour->price }}">
                @error('price')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group col">
                <label for="quantity">Số Lượng Chỗ:</label>
                <input type="number" class="form-control" name="quantity" id="quantity" value="{{ $tour->quantity }}">
                @error('quantity')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group col">
                <label for="vehicle">Phương Tiện:</label>
                <input type="text" class="form-control" name="vehicle" id="vehicle" value="{{ $tour->vehicle }}">
                @error('vehicle')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group col">
                <label for="residence">Lưu trú:</label>
                <input type="text" class="form-control" name="residence" id="residence" value="{{ $tour->residence }}">
                @error('residence')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="description">Mô Tả:</label>
            <textarea class="ckeditor form-control" name="description" id="description" rows="5">{{ $tour->description }}</textarea>
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="row">
            <div class="form-group col">
                <label for="status">Ảnh bìa hiện tại:</label>
                <div>
                    <img src="{{ asset('upload/tours/' . $tour->image) }}" alt="{{ $tour->title }}" width="150">
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

        <div class="text-center">
            <button type="submit" class="btn btn-primary px-4 py-2 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Cập Nhật Tour
            </button>
        </div>
    </form>
@endsection
