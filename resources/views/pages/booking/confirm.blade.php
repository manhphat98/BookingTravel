@extends('layout')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm border-0">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="card-header text-white text-center" style="border-radius: 8px; background-color: green">
                            <h3 class="text-uppercase" style="padding: 10px; color: white"><b>Xác Nhận Hóa Đơn</b></h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-4 text-center">
                                <img src="{{ asset('fontend/imgs/logo_BookingTravel.png') }}" alt="Logo" width="200">
                            </div>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Tên khách hàng:</th>
                                    <td>{{ $booking->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email:</th>
                                    <td>{{ $booking->email }}</td>
                                </tr>
                                <tr>
                                    <th>Số điện thoại:</th>
                                    <td>{{ $booking->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Tour:</th>
                                    <td>{{ $booking->tour->title }}</td>
                                </tr>
                                <tr>
                                    <th>Số lượng:</th>
                                    <td>{{ $booking->adults }} người lớn <i class="fa-solid fa-minus"></i> {{ $booking->children }} trẻ em</td>
                                </tr>
                                <tr>
                                    <th>Tổng tiền:</th>
                                    <td>{{ number_format($booking->total_price) }} VND</td>
                                </tr>
                                <tr>
                                    <th>Ghi chú:</th>
                                    <td>{{ $booking->note ?? 'Không có ghi chú' }}</td>
                                </tr>
                                <tr>
                                    <th>Trạng thái thanh toán:</th>
                                    <td>{{ $booking->payment_status }}</td>
                                </tr>
                                <tr>
                                    <th>Mã đặt Tour:</th>
                                    <td>{{ $booking->id }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('index') }}" class="btn btn-primary me-2">Trang chủ</a>
                            <a href="{{ route('booking.export', $booking->id) }}" class="btn btn-success">
                                Xuất Hóa Đơn
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('pages.include.footer')
@endsection

