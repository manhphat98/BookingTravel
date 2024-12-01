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

    <form action="{{ route('tours.update', $tour->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Đảm bảo sử dụng PUT -->
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
                    <option value="">-- Chọn danh mục --</option>
                    @foreach($categories as $key => $val)
                        <option value="{{ $val->id }}" {{ $tour->category_id == $val->id ? 'selected' : '' }}>
                            {!! str_repeat('-- ', $val->level - 1) !!} {{ $val->title }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

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
        </div>

        <div class="row">
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
        </div>

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
        </div>

        <div class="row">
            <div class="form-group col">
                <label for="vehicle">Phương Tiện:</label>
                <input type="text" class="form-control" name="vehicle" id="vehicle" value="{{ $tour->vehicle }}">
                @error('vehicle')
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
        </div>

        <div class="form-group">
            <label for="description">Mô Tả:</label>
            <textarea class="ckeditor form-control" name="description" id="description" rows="5">
                {{ $tour->description }}
            </textarea>
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
            <button type="submit" class="btn btn-primary">Cập Nhật Tour</button>
        </div>
    </form>

    <script>
        document.getElementById('validatedCustomFile').addEventListener('change', function(){
        var fileName = this.files[0].name;
        var label = document.getElementById('fileLabel');
        label.textContent = fileName;
    });
    </script>
@endsection
