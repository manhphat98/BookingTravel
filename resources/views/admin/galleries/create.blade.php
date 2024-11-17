@extends('layouts.app')

@section('content')
<!-- Trigger Button for Modal -->
<div class="text-center mb-4">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addImageModal">
        <i class="fas fa-plus-circle"></i> Thêm ảnh mới
    </button>
</div>

<!-- Image List Section -->
<div class="text-center mb-4 mt-3">
    <b><span style="text-transform: uppercase; font-size: 35px">Danh sách Ảnh</span></b>
</div>
@if (count($galleries) == 0)
        <div class="alert alert-warning text-center">
            Hiện chưa có Danh mục nào đươc tạo!
        </div>
    @else
<table id="myTable" class="display table table-striped">
    <thead>
        <tr class="text-center">
            <th>ID</th>
            <th>Tên Danh Mục</th>
            <th>Hình Ảnh</th>
            <th>Trạng Thái</th>
            <th>Chức năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($galleries as $gallery)
        <tr>
            <td>{{ $gallery->id }}</td>
            <td>{{ $gallery->title }}</td>
            <td><img src="{{ asset('upload/galleries/' . $gallery->image) }}" alt="{{ $gallery->title }}" width="100"></td>
            <td>{{ $gallery->status == 1 ? 'Hiển Thị' : 'Ẩn' }}</td>
            <td class="text-center">
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" onclick="setDeleteAction('{{ route('gallery.destroy', $gallery->id) }}')">Xóa</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif

<!-- Modal for Adding Image -->
<div class="modal fade" id="addImageModal" tabindex="-1" role="dialog" aria-labelledby="addImageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addImageModalLabel">Thêm ảnh mới</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Image Upload Form -->
                <form id="galleryForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title" class="font-weight-bold">Tên ảnh:</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" placeholder="Nhập tên ảnh">
                        <span class="text-danger" id="titleError"></span>
                    </div>
                    <div class="form-group">
                        <label for="tour_id" class="font-weight-bold">Tour:</label>
                        <select name="tour_id" id="tour_id" class="form-control">
                            <option value="{{ $tour->id }}">{{ $tour->title }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image" class="font-weight-bold">Hình ảnh:</label>
                        <div class="custom-file">
                            <input name="image[]" type="file" multiple required class="custom-file-input" id="validatedCustomFile">
                            <label class="custom-file-label" for="validatedCustomFile" id="fileLabel">Chọn ảnh...</label>
                        </div>
                        <span class="text-danger" id="imageError"></span>
                    </div>
                    <div class="text-center mt-4">
                        <button type="button" id="submitGallery" class="btn btn-primary px-4 py-2">
                            Thêm ảnh Tour
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel"><b>Xác nhận xóa</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Bạn có chắc chắn muốn xóa ảnh <b id="deleteTitle"></b> không?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                <form id="deleteForm" method="POST" action="">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        // Set delete action in delete modal
        window.setDeleteAction = function(actionUrl) {
            $('#deleteForm').attr('action', actionUrl);
        };

        // Submit new image form via AJAX
        $('#submitGallery').click(function (e) {
            e.preventDefault();
            var formData = new FormData($('#galleryForm')[0]);
            $('.text-danger').text('');
            $('#alert-error').addClass('d-none').text('');

            $.ajax({
                type: 'POST',
                url: '{{ route('gallery.store') }}',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    $('#addImageModal').modal('hide');
                    location.reload(); // Reload page to show new image
                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        if (errors.title) {
                            $('#titleError').text(errors.title[0]);
                        }
                        if (errors.image) {
                            $('#imageError').text(errors.image[0]);
                        }
                    } else {
                        $('#alert-error').removeClass('d-none').text('Đã có lỗi xảy ra, vui lòng thử lại.');
                    }
                }
            });
        });

        // Display file name in custom file input
        document.getElementById('validatedCustomFile').addEventListener('change', function () {
            var fileName = this.files[0].name;
            document.getElementById('fileLabel').textContent = fileName;
        });
    });
</script>

@endsection
