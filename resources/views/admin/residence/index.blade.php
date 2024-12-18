@extends('layouts.app')

@section('content')
    <div class="text-center mb-4">
        <b><span style="text-transform: uppercase; font-size: 35px">Danh Sách Nơi Lưu Trú</span></b>
    </div>
    <a href="{{ route('residences.create') }}" class="btn btn-success mb-3"><b style="color: white">Thêm mới</b></a>

    @if (count($residences) == 0)
        <div class="alert alert-warning text-center">
            Hiện chưa có nơi Lưu trú nào đươc tạo!
        </div>
    @else
    <table id="myTable" class="display table table-striped">
        <thead>
            <tr style="text-align: center">
                <th>ID</th>
                <th>Tên</th>
                <th>Địa Chỉ</th>
                <th>Giá Một Đêm</th>
                <th>Đánh Giá</th>
                <th>Trạng Thái</th>
                <th>Ảnh bìa</th>
                <th>Chức Năng</th>
            </tr>
        </thead>
        <tbody>
            @forelse($residences as $residence)
            @php
                $apiProvince = json_decode(file_get_contents('https://esgoo.net/api-tinhthanh/1/0.htm'), true);
                $provinces = $apiProvince['data'];

                $apiDistrict = json_decode(file_get_contents("https://esgoo.net/api-tinhthanh/2/{$residence->province}.htm"), true);
                $districts = $apiDistrict['data'];

                $apiWard = json_decode(file_get_contents("https://esgoo.net/api-tinhthanh/3/{$residence->district}.htm"), true);
                $wards = $apiWard['data'];
            @endphp
                <tr>
                    <td>{{ $residence->id }}</td>
                    <td>{{ $residence->name }}</td>
                    <td>{{ $residence->address }},
                        {{ collect($provinces)->firstWhere('id', $residence->province)['full_name'] ?? 'N/A' }}
                        ,
                        {{ collect($districts)->firstWhere('id', $residence->district)['full_name'] ?? 'N/A' }}
                        ,
                        {{ collect($wards)->firstWhere('id', $residence->ward)['full_name'] ?? 'N/A' }}
                    </td>
                    <td>{{ number_format($residence->price_per_night, 0) }} VND</td>
                    <td>{{ $residence->rating }}</td>
                    <td>{{ $residence->status ? 'Hoạt Động' : 'Ngừng Hoạt Động' }}</td>
                    <td><img src="{{ asset('upload/residences/' . $residence->image) }}" alt="{{ $residence->title }}" width="100" loading="lazy"></td>
                    <td>
                        <a href="{{ route('residences.edit', $residence->id) }}" class="btn btn-info btn-sm">Sửa</a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" onclick="setDeleteForm('{{ route('residences.destroy', $residence->id) }}')">Xóa</button>
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
