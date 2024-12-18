@extends('layouts.app')

@section('content')
    <div class="text-center mb-4">
        <b><span style="text-transform: uppercase; font-size: 35px">Danh sách phương tiện</span></b>
    </div>

    <a href="{{ route('vehicles.create') }}" class="btn btn-success mb-3"><b style="color: white">Thêm mới</b></a>
    @if (count($vehicles) == 0)
        <div class="alert alert-warning text-center">
            Hiện chưa có Phương tiện nào đươc tạo!
        </div>
    @else

    <table id="myTable" class="display table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên xe</th>
                <th>Hãng</th>
                <th>Số chỗ</th>
                <th>Số lượng</th>
                <th>Màu</th>
                <th>Giá thuê (VNĐ)</th>
                <th>Hình ảnh</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @forelse($vehicles as $vehicle)
                <tr>
                    <td>{{ $vehicle->id }}</td>
                    <td>{{ $vehicle->name }}</td>
                    <td>{{ $vehicle->brand }}</td>
                    <td>{{ $vehicle->seats }}</td>
                    <td>{{ $vehicle->quantity }}</td>
                    <td>{{ $vehicle->color }}</td>
                    <td>{{ number_format($vehicle->price_per_day, 0, ',', '.') }}</td>
                    <td><img src="{{ asset('upload/vehicles/' . $vehicle->image) }}" alt="{{ $vehicle->title }}" width="100" loading="lazy"></td>
                    <td>
                        <a href="{{ route('vehicles.edit', $vehicle->id) }}" class="btn btn-info btn-sm">Sửa</a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" onclick="setDeleteForm('{{ route('vehicles.destroy', $vehicle->id) }}')">Xóa</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Không có nơi lưu trú nào!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
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
                    Bạn có chắc chắn muốn xóa Nơi lưu trú này không?
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
    @endif
@endsection
