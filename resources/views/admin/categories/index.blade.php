@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-5 p-5 bg-white shadow-lg rounded-lg">
    <div class="text-center mb-4">
        <b><span style="text-transform: uppercase; font-size: 35px">Phân loại Danh mục</span></b>
    </div>

    <table id="categoriesTable" class="display table table-striped">
        <thead>
            <tr style="text-align: center">
                <th style="width: 5%">ID</th>
                <th style="width: 15%">Tên Danh Mục</th>
                <th style="width: 45%">Mô Tả</th>
                <th style="width: 10%">Hình Ảnh</th>
                <th style="width: 10%">Trạng Thái</th>
                <th style="width: 25%">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->title }}</td>
                <td>{{ $category->description }}</td>
                <td><img src="{{ asset('upload/categories/' . $category->image) }}" alt="{{ $category->title }}" width="100"></td>
                <td>{{ $category->status == 1 ? 'Hiển Thị' : 'Ẩn' }}</td>
                <td style="text-align: center">
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">Sửa</a>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" onclick="setDeleteAction('{{ route('categories.destroy', $category->id) }}')">Xóa</button>
                </td>
            </tr>
            @endforeach
            <!-- Modal -->
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
                            Bạn có chắc chắn muốn xóa danh mục <b>{{ $category->title }}</b> không?
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

        </tbody>
    </table>

</div>

<script>
    $(document).ready(function() {
    $('#categoriesTable').DataTable({
        "language": {
            "lengthMenu": "Hiển thị _MENU_ mục mỗi trang",
            "zeroRecords": "Không tìm thấy kết quả nào",
            "info": "Hiển thị trang _PAGE_ của _PAGES_",
            "infoEmpty": "Không có dữ liệu",
            "infoFiltered": "(lọc từ _MAX_ mục)",
            "search": "Tìm kiếm:",
            "paginate": {
                "first": "Đầu",
                "last": "Cuối",
                "next": "Tiếp",
                "previous": "Trước"
            },
        }
    });
});

    function setDeleteAction(action) {
        var form = document.getElementById('deleteForm');
        form.action = action;
    }
</script>

@endsection
