@extends('layouts.app')

@section('content')
    <div class="text-center mb-4">
        <b><span style="text-transform: uppercase; font-size: 35px">Thêm Danh Mục Mới</span></b>
    </div>
    <hr>

    <form id="categoryForm" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div class="row">
            <div class="form-group col">
                <label for="title">Tên Danh Mục:</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                <span class="text-danger" id="titleError"></span>
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
            <label for="parent_id">Danh Mục:</label>
            <select name="parent_id" id="parent_id" class="form-control">
                <option value="" {{ old('parent_id', isset($category) ? $category->parent_id : '') == '' ? 'selected' : '' }}>-- Chọn danh mục --</option>
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
                    </option>
                @endforeach
            </select>
        </div>



        <div class="form-group">
            <label for="description">Mô Tả:</label>
            <textarea class="ckeditor form-control" name="description" id="description" rows="4">{{ old('description') }}</textarea>
            <span class="text-danger" id="descriptionError"></span>
        </div>

        <div class="form-group">
            <label for="image">Hình ảnh:</label>
            <div class="custom-file">
                <input name="image" type="file" class="custom-file-input" id="validatedCustomFile">
                <label class="custom-file-label" for="validatedCustomFile" id="fileLabel">Chọn ảnh...</label>
            </div>
            <span class="text-danger" id="imageError"></span>
        </div>

        <div class="text-center">
            <button type="button" id="submitCategory" class="btn btn-primary px-4 py-2 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Thêm Danh Mục
            </button>
        </div>
    </form>

<script>
    $(document).ready(function () {
        $('#submitCategory').click(function (e) {
            e.preventDefault();

            // Khởi tạo formData để gửi dữ liệu file và các input
            var formData = new FormData($('#categoryForm')[0]);

            // Reset lỗi cũ
            $('.text-danger').text('');
            $('#alert-success').addClass('d-none');

            $.ajax({
                type: 'POST',
                url: '{{ route('categories.store') }}',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.success) {
                        toastr.success(response.message);
                        location.reload();
                    }
                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        $('#titleError').text(errors.title ? errors.title[0] : '');
                        $('#statusError').text(errors.status ? errors.status[0] : '');
                        $('#descriptionError').text(errors.description ? errors.description[0] : '');
                        $('#imageError').text(errors.image ? errors.image[0] : '');
                    } else {
                        alert('Đã có lỗi xảy ra, vui lòng thử lại.');
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
