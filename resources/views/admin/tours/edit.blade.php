@extends('layouts.app')

@section('content')

    <div class="text-center mb-4">
        <b><span style="text-transform: uppercase; font-size: 35px">Chỉnh sửa Tour</span></b>
    </div>
    <hr>
    <!-- Hiển thị thông báo thành công -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form cập nhật tour -->
    <form action="{{ route('tours.update', $tours->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT') <!-- Phương thức PUT dùng cho cập nhật -->

        <div class="row">
            <div class="form-group col">
                <label for="title">Tên Tour:</label>
                <input type="text" class="form-control" name="title" value="{{ old('title', $tours->title) }}">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col">
                <label for="category_id">Danh Mục:</label>
                <select name="category_id" id="category_id" class="form-control">
                    <option value="" {{ isset($category) && $category->category_id == '' ? 'selected' : '' }}>-- Chọn danh mục --</option>
                    @foreach($categories as $key => $val)
                        <option value="{{ $val->id }}" {{ isset($category) && $category->category_id == $val->id ? 'selected' : '' }}>
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
                @error('category_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="form-group col">
                <label for="start_date">Ngày Bắt Đầu:</label>
                <input type="date" class="form-control" name="start_date" value="{{ old('start_date', $tours->start_date) }}">
                @error('start_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col">
                <label for="end_date">Ngày Kết Thúc:</label>
                <input type="date" class="form-control" name="end_date" value="{{ old('end_date', $tours->end_date) }}">
                @error('end_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="form-group col">
                <label for="tour_from">Điểm Khởi Hành:</label>
                <input type="text" class="form-control" name="tour_from" value="{{ old('tour_from', $tours->tour_from) }}">
                @error('tour_from')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col">
                <label for="tour_to">Điểm Đến:</label>
                <input type="text" class="form-control" name="tour_to" value="{{ old('tour_to', $tours->tour_to) }}">
                @error('tour_to')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="form-group col">
                <label for="price">Giá Tour:</label>
                <input type="text" class="form-control" name="price" id="price" value="{{ old('price', $tours->price) }}">
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col">
                <label for="quantity">Số Lượng Chỗ:</label>
                <input type="number" class="form-control" name="quantity" value="{{ old('quantity', $tours->quantity) }}">
                @error('quantity')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="form-group col">
                <label for="vehicle">Phương Tiện:</label>
                <input type="text" class="form-control" name="vehicle" value="{{ old('vehicle', $tours->vehicle) }}">
                @error('vehicle')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col">
                <label for="status">Trạng Thái:</label>
                <select class="form-control" name="status">
                    <option value="1" {{ old('status', $tours->status) == '1' ? 'selected' : '' }}>Hiển Thị</option>
                    <option value="0" {{ old('status', $tours->status) == '0' ? 'selected' : '' }}>Ẩn</option>
                </select>
                @error('status')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="description">Mô Tả:</label>
            <textarea class="ckeditor form-control" name="description" rows="4">{{ old('description', $tours->description) }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="status">Ảnh bìa hiện tại:</label>
            <div>
                <img src="{{ asset('upload/tours/' . $tours->image) }}" alt="{{ $tours->title }}" width="150">
            </div>
        </div>

        <div class="form-group">
            <label for="image">Ảnh bìa mới (nếu muốn thay đổi):</label>
            <div class="custom-file">
                <input name="image" type="file" class="custom-file-input" id="validatedCustomFile">
                <label class="custom-file-label" for="validatedCustomFile" id="fileLabel">Chọn ảnh...</label>
            </div>
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <!-- Hiện tên file ảnh -->
            <script>
                document.getElementById('validatedCustomFile').addEventListener('change', function(){
                var fileName = this.files[0].name;
                var label = document.getElementById('fileLabel');
                label.textContent = fileName;
            });
            </script>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Cập nhật Tour</button>
        </div>
    </form>


@endsection
