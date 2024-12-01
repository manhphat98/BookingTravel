@extends('layouts.app')

@section('content')
    <div class="text-center mb-4">
        <b><span style="text-transform: uppercase; font-size: 35px">Danh sách Tour</span></b>
    </div>

    @if (count($tours) == 0)
        <div class="alert alert-warning text-center">
            Hiện chưa có Tour nào đươc tạo!
        </div>
    @else

        <table id="myTable" class="display table table-striped">
            <thead>
                <tr style="text-align: center">
                    <th>ID</th>
                    <th>Tên Tour</th>
                    <th>Danh mục</th>
                    <th>Mô Tả</th>
                    <th>Phương Tiện</th>
                    <th>Giá</th>
                    <th>Điểm Khởi Hành</th>
                    <th>Điểm Đến</th>
                    <th>Mã Tour</th>
                    <th>Thời Gian Bắt Đầu</th>
                    <th>Thời Gian Kết Thúc</th>
                    <th>Số Lượng</th>
                    <th>Ảnh bìa</th>
                    <th>Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tours as $tour)
                <tr>
                    <td>{{ $tour->id }}</td>
                    <td>{{ Str::limit($tour->title, 50) }}</td>
                    <td>{{ $tour->category->title ?? 'Không có danh mục' }}</td>
                    <td>{{ Str::limit($tour->description, 50) }}</td>
                    <td>{{ $tour->vehicle }}</td>
                    <td>{{ number_format($tour->price, 0, ',', '.') }} VND</td>
                    <td>{{ $tour->tour_from }}</td>
                    <td>{{ $tour->tour_to }}</td>
                    <td>{{ $tour->tour_code }}</td>
                    <td>{{ Carbon\Carbon::parse($tour->start_date)->format('d-m-Y') }}</td>
                    <td>{{ Carbon\Carbon::parse($tour->end_date)->format('d-m-Y') }}</td>
                    <td>{{ $tour->quantity }}</td>
                    <td><img src="{{ asset('upload/tours/' . $tour->image) }}" alt="{{ $tour->title }}" width="100" loading="lazy"></td>
                    <td style="text-align: center">
                        <a href="{{ route('gallery.edit', [$tour->id]) }}" class="btn btn-info btn-sm">Ảnh</a>
                        <a href="{{ route('tours.edit', $tour->id) }}" class="btn btn-primary btn-sm">Sửa</a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" onclick="setDeleteForm('{{ route('tours.destroy', $tour->id) }}')">Xóa</button>
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
                    Bạn có chắc chắn muốn xóa tour không?
                </div>
                <div class="modal-footer">
                    <form id="deleteForm" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function setDeleteForm(actionUrl) {
            document.getElementById('deleteForm').action = actionUrl;
        }

        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
@endsection
