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
            {{-- Rows will be populated by DataTables --}}
        </tbody>
    </table>

</div>

<script>
    $.ajax({
        url: '{{ route('categories.list') }}',
        type: 'GET',
        success: function(res){
            if(res){
                console.log(res); // Xử lý dữ liệu trả về
            }
        },
        error: function(xhr, status, error) {
            console.error("Error: " + error); // In ra lỗi nếu có
        }
    });

    $(document).ready(function() {
        $.noConflict();
        $('#categoriesTable').DataTable({
            "processing": true,
            "serverSide": true,
            // "ajax": "{{ route('categories.list') }}",
            "ajax" : {
                url: "{{route('categories.list')}}",
                method: "POST"
            }
            "columns": [
                { "data": "id" },
                { "data": "title" },
                { "data": "description" },
                {
                    "data": "image",
                    "render": function(data, type, row) {
                        return '<img src="{{ asset('upload/categories') }}/' + data + '" alt="' + row.title + '" width="100">';
                    }
                },
                {
                    "data": "status",
                    "render": function(data, type, row) {
                        return data == 1 ? 'Hiển Thị' : 'Ẩn';
                    }
                },
                {
                    "data": "id",
                    "render": function(data, type, row) {
                        return `
                            <a href="{{ url('admin/categories/${data}/edit') }}" class="btn btn-primary btn-sm">Sửa</a>
                            <form action="{{ url('admin/categories/${data}') }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                            </form>
                        `;
                    },
                    "orderable": false
                }
            ],
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
</script>

@endsection
