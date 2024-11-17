@extends('layouts.app')

@section('content')
    <div class="text-center mb-4">
        <b><span style="text-transform: uppercase; font-size: 35px">Danh sách Danh mục</span></b>
    </div>

    @if (count($categories) == 0)
        <div class="alert alert-warning text-center">
            Hiện chưa có Danh mục nào đươc tạo!
        </div>
    @else
        <table id="myTable" class="display table table-striped">
            <thead>
                <tr style="text-align: center">
                    <th>ID</th>
                    <th>Tên Danh Mục</th>
                    <th>Thuộc Danh mục</th>
                    <th>Mô Tả</th>
                    <th>Hình Ảnh</th>
                    <th>Trạng Thái</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr id="category-{{ $category->id }}">
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->parent ? $category->parent->title : 'Không có' }}</td>
                    <td title="{{ $category->description }}">{{ Str::limit($category->description, 200, '...') }}</td>
                    <td><img src="{{ asset('upload/categories/' . $category->image) }}" alt="{{ $category->title }}" width="100"
                             onerror="this.onerror=null;this.src='{{ asset('images/default.png') }}';"></td>
                    <td>{{ $category->status == 1 ? 'Hiển Thị' : 'Ẩn' }}</td>
                    <td style="text-align: center">
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">Sửa</a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" onclick="setDeleteAction('{{ route('categories.destroy', $category->id) }}', {{ $category->id }})">Xóa</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <!-- Modal Xác Nhận Xóa -->
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
                    Bạn có chắc chắn muốn xóa danh mục "<b id="categoryTitle">{{$category->title}}</b>" không?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Xóa</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let deleteUrl = '';
        let categoryId = '';

        function setDeleteAction(url, id, title) {
            deleteUrl = url;
            categoryId = id;
            document.getElementById('categoryTitle').innerText = title;
        }

        $(document).ready(function () {
            $('#myTable').DataTable();
            $('#confirmDeleteBtn').click(function () {
                $.ajax({
                    url: deleteUrl,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        _method: 'DELETE'
                    },
                    success: function (response) {
                        $('#deleteModal').modal('hide');
                        $('#myTable').DataTable().row('#category-' + categoryId).remove().draw();
                        alert('Xóa danh mục thành công.');
                    },
                    error: function (xhr) {
                        alert('Đã xảy ra lỗi, vui lòng thử lại.');
                    }
                });
            });
        });
    </script>
@endsection
