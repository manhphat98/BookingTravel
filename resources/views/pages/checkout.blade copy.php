@extends('layout')

@section('content')
<div class="container my-3">
    <div class="card p-4 shadow">
        <div class="row">

            <!-- Hình ảnh Tour -->
            <div class="col-md-6">
                <img src="{{ asset('upload/tours/' . $tour->image) }}" alt="{{ $tour->title }}" class="img-fluid rounded shadow" style="max-height: 400px; width: 100%; object-fit: cover;">
            </div>

            <!-- Thông tin Tour -->
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="2">
                                <h2><strong>{{ $tour->title }}</strong></h2>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Thời gian chuyến đi:</strong></td>
                            <td>{{ $tour->start_date }} đến {{ $tour->end_date }}</td>
                        </tr>
                        <tr>
                            <td><strong>Thời lượng:</strong></td>
                            <td>{{ $tour->duration }} ngày</td>
                        </tr>
                        @if($tour->promotion)
                        <tr>
                            <td><strong>Khuyến mãi:</strong></td>
                            <td>{{ $tour->promotion }}</td>
                        </tr>
                        @endif
                        <tr>
                            <td><strong>Phương tiện:</strong></td>
                            <td>{{ $tour->vehicle }}</td>
                        </tr>
                        <tr>
                            <td><strong>Điểm khởi hành:</strong></td>
                            <td>{{ $tour->tour_from }}</td>
                        </tr>
                        <tr>
                            <td><strong>Điểm đến:</strong></td>
                            <td>{{ $tour->tour_to }}</td>
                        </tr>
                        <tr style="background-color: #3E9FFD; color: white">
                            <td class="text-center" colspan="2">
                                <p><b id="Price">{{ number_format($tour->price, 0, ',', '.') }}</b> VNĐ</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Form đặt tour và phương thức thanh toán -->
        <div class="row mt-4" style="border: 1px solid; border-radius: 10px; margin: 20px; padding: 20px">
            <!-- Form thông tin -->
            <form id="bookingForm" action="{{ route('payment') }}" method="POST">
                @csrf
                <div class="col-md-6">
                    <h3 class="text-uppercase mb-3 text-center"><i class="fa-solid fa-user"></i> <b>Thông tin liên hệ</b></h3>
                    <input type="hidden" name="tour_id" value="{{ $tour->id }}">

                    <!-- Họ tên, Email, Số điện thoại -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="name" class="form-label">Họ và Tên:</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="phone" class="form-label">Số điện thoại:</label>
                            <input type="text" id="phone" name="phone" class="form-control" required>
                        </div>
                    </div><br>

                    <!-- Số lượng người lớn và trẻ em -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="adults" class="form-label">Số lượng người lớn:</label>
                            <input type="number" id="adults" name="adults" class="form-control" min="1" value="1" required>
                        </div>
                        <div class="col-md-6">
                            <label for="children" class="form-label">Số lượng trẻ em:</label>
                            <input type="number" id="children" name="children" class="form-control" min="0" value="0" required>
                        </div>
                    </div><br>

                    <!-- Ghi chú -->
                    <div class="mb-3">
                        <label for="note" class="form-label">Ghi chú:</label>
                        <textarea id="note" name="note" class="form-control"></textarea>
                    </div>

                    <div class="d-flex justify-content-end align-items-center" style="padding-top: 20px">
                        <p style="font-size: 18px; text-align: right"><strong>
                                Thành tiền: <b class="text-danger" name="totalPrice" id="totalPrice">{{ number_format($tour->price, 0, ',', '.') }}</b> VNĐ
                            </strong></p>
                    </div>
                </div>

                <div class="col-md-6">
                    <h3 class="text-uppercase mb-3 text-center"><i class="fa-solid fa-credit-card"></i> <b>Phương thức thanh toán</b></h3>
                    <p><strong>Chọn phương thức thanh toán:</strong></p>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-primary btn-block">Thanh toán tại quầy</a>

                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('payment.momo', ['tour_id' => $tour->id]) }}" class="btn btn-pink btn-block">Momo</a>
                            <a href="{{ route('payment.bank', ['tour_id' => $tour->id]) }}" class="btn btn-info btn-block">Ngân hàng</a>
                        </div>
                    </div>
                </div>

            </form>
            <form action="{{ route('payment.vnpay') }}" method="POST">
                @csrf
                {{-- <input type="hidden" id="totalPrice" name="totalVnpay"> --}}
                <button type="submit" class="btn btn-danger btn-block" name="redirect">VNPay</button>
            </form>
        </div>
    </div>
    @include('pages.include.footer')
    @endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $(document).on("input", "#adults, #children", function() {
        var adults = parseInt($("#adults").val().trim()) || 0;
        var children = parseInt($("#children").val().trim()) || 0;

        // Lấy giá tiền và loại bỏ các ký tự không phải số
        var gia_tien = parseInt($("#Price").text().replace(/[^0-9]/g, "")) || 0;

        // Tính tổng
        var total = (adults * gia_tien) + (children * gia_tien * 0.7);

        // Hiển thị tổng tiền với định dạng
        $("#totalPrice").text(total.toLocaleString("vi-VN"));
    });
</script>
