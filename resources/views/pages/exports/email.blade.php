<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Xác nhận đặt Tour</title>
</head>
<body>
<p>Xin chào {{ $booking->name }},</p>
<p>Cảm ơn bạn đã thanh toán thành công cho tour <strong>{{ $booking->tour->title }}</strong>.</p>
<p>Vui lòng kiểm tra file đính kèm để xem chi tiết hóa đơn.</p>
<b>Cảm ơn bạn đã sử dụng dịch vụ của chúng tôi!</b>
<hr>
<b class="text-uppercase">BookingTravel Team</b>
</body>
</html>
