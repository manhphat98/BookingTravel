@extends('layouts.app')

@section('content')
<div class="text-center mb-4">
    <b><span style="text-transform: uppercase; font-size: 35px">Danh sách Tour</span></b>
</div>

@if (count($bookings) == 0)
    <div class="alert alert-warning text-center">
        Hiện chưa có Khách hàng đặt Tour
    </div>
@else
    <table class="table table-striped display" id="myTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên khách hàng</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Tour</th>
                <th>Số lượng</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
                <th>Ngày đặt</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
            <tr>
                <td>{{ $booking->id }}</td>
                <td>{{ $booking->name }}</td>
                <td>{{ $booking->email }}</td>
                <td>{{ $booking->phone }}</td>
                <td>{{ $booking->tour->title ?? 'N/A' }}</td>
                <td>
                    {{ $booking->adults }} Người lớn
                    @if ($booking->children)
                        <br><hr>
                        {{ $booking->children }} trẻ em
                    @endif
                </td>
                <td>{{ number_format($booking->total_price, 0, ',', '.') }} VNĐ</td>
                <td>
                    <span class="badge
                        {{
                            $booking->status == 'Chờ xử lý' ? 'badge-warning' :
                            ($booking->status == 'Xác nhận' ? 'badge-info' :
                            ($booking->status == 'Đã hủy' ? 'badge-danger' : 'badge-secondary'))
                        }}">
                        {{ $booking->status }}
                    </span>
                    <span class="badge {{ $booking->payment_status == 'Đã thanh toán' ? 'badge-success' : 'badge-warning' }}">
                        {{ $booking->payment_status }}
                    </span>
                </td>
                <td>{{ $booking->created_at->format('d/m/Y H:i') }}</td>
                <td>
                    <span><a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-sm btn-primary">Chi tiết</a></span>
                    <br>
                    <span><a href="#" class="btn btn-sm btn-danger">Xóa</a></span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endif
@endsection
