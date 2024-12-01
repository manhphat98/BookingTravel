@extends('layouts.app')

@section('content')
    <div class="text-center mb-4">
        <b><span style="text-transform: uppercase; font-size: 35px">Thêm Tour Mới</span></b>
    </div>
    <hr>

    <form id="tourForm" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div class="row">
            <div class="form-group col">
                <label for="title">Tên Tour:</label>
                <input type="text" class="form-control" name="title" id="title">
                <span class="text-danger" id="titleError"></span>
            </div>

            <div class="form-group col">
                <label for="category_id">Danh Mục:</label>
                <select name="category_id" id="category_id" class="form-control">
                    <option value="" {{ isset($category) && $category->category_id == '' ? 'selected' : '' }}>-- Chọn danh mục --</option>
                    @foreach($categories as $key => $val)
                    <option value="{{ $val->id }}" {{ old('parent_id', isset($category) ? $category->parent_id : '') == $val->id ? 'selected' : '' }}>
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
                    </option>                    @endforeach
                </select>
                <span class="text-danger" id="categoryError"></span>
            </div>

        </div>

        <div class="row">
            <div class="form-group col">
                <label for="start_date">Ngày Bắt Đầu:</label>
                <input type="date" class="form-control" name="start_date" id="start_date">
                <span class="text-danger" id="startDateError"></span>
            </div>

            <div class="form-group col">
                <label for="end_date">Ngày Kết Thúc:</label>
                <input type="date" class="form-control" name="end_date" id="end_date">
                <span class="text-danger" id="endDateError"></span>
            </div>
        </div>

        <div class="row">
            <div class="form-group col">
                <label for="tour_from">Điểm Khởi Hành:</label>
                <input type="text" class="form-control" name="tour_from" id="tour_from">
                <span class="text-danger" id="tourFromError"></span>
            </div>

            <div class="form-group col">
                <label for="tour_to">Điểm Đến:</label>
                <input type="text" class="form-control" name="tour_to" id="tour_to">
                <span class="text-danger" id="tourToError"></span>
            </div>
        </div>

        <div class="row">
            <div class="form-group col">
                <label for="price">Giá Tour:</label>
                <input type="text" class="form-control" name="price" id="price" >
                <span class="text-danger" id="priceError"></span>
            </div>

            <div class="form-group col">
                <label for="quantity">Số Lượng Chỗ:</label>
                <input type="number" class="form-control" name="quantity" id="quantity">
                <span class="text-danger" id="quantityError"></span>
            </div>
        </div>

        <div class="row">
            <div class="form-group col">
                <label for="vehicle">Phương Tiện:</label>
                <input type="text" class="form-control" name="vehicle" id="vehicle">
                <span class="text-danger" id="vehicleError"></span>
            </div>

            <div class="form-group col">
                <label for="status">Trạng Thái:</label>
                <select class="form-control" name="status" id="status">
                    <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Hiển Thị</option>
                    <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Ẩn</option>
                </select>
                <span class="text-danger" id="statusError"></span>
            </div>
        </div>

        <div class="form-group">
            <label for="description">Mô Tả:</label>
            <textarea class="ckeditor form-control" name="description" id="description" rows="5"></textarea>
            <span class="text-danger" id="descriptionError"></span>
        </div>

        <div class="form-group">
            <label for="image">Ảnh bìa:</label>
            <div class="custom-file">
                <input name="image" type="file" class="custom-file-input" id="validatedCustomFile">
                <label class="custom-file-label" for="validatedCustomFile" id="fileLabel">Chọn ảnh...</label>
            </div>
            <span class="text-danger" id="imageError"></span>
        </div>

        <div class="text-center">
            <button type="button" id="submitTour" class="btn btn-primary">Thêm Tour</button>
        </div>
    </form>

    <script>
        $(document).ready(function () {
            $('#submitTour').click(function (e) {
                e.preventDefault(); // Ngăn việc gửi form mặc định

                for (instance in CKEDITOR.instances) {
                    CKEDITOR.instances[instance].updateElement();
                }


                // Khởi tạo formData để gửi dữ liệu file và các input
                var formData = new FormData($('#tourForm')[0]);

                // Reset lỗi cũ
                $('.text-danger').text('');
                $('#alert-error').addClass('d-none').text('');

                $.ajax({
                    type: 'POST',
                    url: '{{ route('tours.store') }}',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        if (response.success) {
                            toastr.success(response.message);
                            $('#tourForm')[0].reset();
                        }
                    },

                    error: function (xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            $('#titleError').text(errors.title ? errors.title[0] : '');
                            $('#categoryError').text(errors.category_id ? errors.category_id[0] : '');
                            $('#startDateError').text(errors.start_date ? errors.start_date[0] : '');
                            $('#endDateError').text(errors.end_date ? errors.end_date[0] : '');
                            $('#tourFromError').text(errors.tour_from ? errors.tour_from[0] : '');
                            $('#tourToError').text(errors.tour_to ? errors.tour_to[0] : '');
                            $('#priceError').text(errors.price ? errors.price[0] : '');
                            $('#quantityError').text(errors.quantity ? errors.quantity[0] : '');
                            $('#vehicleError').text(errors.vehicle ? errors.vehicle[0] : '');
                            $('#statusError').text(errors.status ? errors.status[0] : '');
                            $('#descriptionError').text(errors.description ? errors.description[0] : '');
                            $('#imageError').text(errors.image ? errors.image[0] : '');
                        } else {
                            toastr.error('Đã xảy ra lỗi, vui lòng thử lại.');
                        }
                    }
                });
            });

            // Hiển thị tên file khi chọn hình ảnh
            document.getElementById('validatedCustomFile').addEventListener('change', function () {
                var fileName = this.files[0].name;
                document.getElementById('fileLabel').textContent = fileName;
            });
        });
    </script>
@endsection
