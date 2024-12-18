<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: DejaVu Sans; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 8px; border: 1px solid #ddd; text-align: left; }
        .header { text-align: center; margin-bottom: 30px; }
    </style>
</head>
<body>
    <div class="header">
        <h2>HÓA ĐƠN XÁC NHẬN</h2>
        <p>BookingTravel</p>
    </div>
    <table>
        <tr><th>Tên khách hàng:</th><td>{{ $booking->name }}</td></tr>
        <tr><th>Email:</th><td>{{ $booking->email }}</td></tr>
        <tr><th>Số điện thoại:</th><td>{{ $booking->phone }}</td></tr>
        <tr><th>Tour:</th><td>{{ $booking->tour->title }}</td></tr>
        <tr><th>Số người lớn:</th><td>{{ $booking->adults }}</td></tr>
        <tr><th>Số trẻ em:</th><td>{{ $booking->children }}</td></tr>
        <tr><th>Tổng tiền:</th><td>{{ number_format($booking->total_price) }} VND</td></tr>
        <tr><th>Ghi chú:</th><td>{{ $booking->note ?? 'Không có ghi chú' }}</td></tr>
        <tr><th>Trạng thái thanh toán:</th><td>{{ $booking->payment_status }}</td></tr>
        <tr><th>Mã đặt Tour:</th><td>{{ $booking->id }}</td></tr>
    </table>
</body>
</html>
