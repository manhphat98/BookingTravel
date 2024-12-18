<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Tour;
use Illuminate\Http\Request;
use App\Mail\InvoiceMail;
use Illuminate\Support\Facades\Mail;
use PDF;

class BookingController extends Controller
{
    public function index()//Giao diện bên Admin
    {
        // Lấy danh sách tất cả các bookings
        $bookings = Booking::with('tour')->get(); // Kèm thông tin tour

        return view('admin.booking.index', compact('bookings'));
    }

    public function update(Request $request, $id)
    {
        // Tìm kiếm booking bằng ID
        $booking = Booking::findOrFail($id);

        // Kiểm tra và validate dữ liệu từ request
        $request->validate([
            'note' => 'nullable|string|max:1000',
            'status' => 'required|string|in:Chờ xử lý,Xác nhận,Đã hủy',
            'payment_status' => 'required|string|in:Chưa thanh toán,Đã thanh toán,Hoàn tiền',
        ]);

        // Cập nhật thông tin Booking
        $booking->note = $request->input('note'); // Ghi chú
        $booking->status = $request->input('status'); // Trạng thái xác nhận
        $booking->payment_status = $request->input('payment_status'); // Trạng thái thanh toán
        $booking->updated_at = now(); // Cập nhật thời gian

        // Lưu thông tin cập nhật
        $booking->save();

        // Trả về thông báo và chuyển hướng lại trang danh sách hoặc chi tiết
        toastr()->success('Xác nhận Tour thành công!');
        return redirect()->route('booking.index');
    }

    public function edit($id)
    {
        $booking = Booking::find(($id));
        return view('admin.booking.edit', compact('booking'));
    }

    public function show($id)
    {
        // Tìm booking với ID
        $booking = Booking::with('tour')->findOrFail($id);

        // Trả về view xác nhận thông tin hóa đơn
        return view('pages.booking.confirm', compact('booking'));
    }


    public function payment($id)
    {
        $tour = Tour::findOrFail($id); // Lấy thông tin tour theo ID
        return view('pages.payment', compact('tour')); // Truyền dữ liệu tour sang view payment
    }

    public function checkout(Request $request)
    {
        // Xác thực dữ liệu
        $validated = $request->validate([
            'tour_id' => 'required|exists:tours,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'adults' => 'required|integer|min:1',
            'children' => 'required|integer|min:0',
            'note' => 'nullable|string|max:1000', // Giới hạn độ dài ghi chú
            'payment_method' => 'required|string|in:counter,vnpay,momo', // Xác thực phương thức thanh toán
        ]);

        $tour = Tour::findOrFail($validated['tour_id']);
        $totalPrice = $request->input('tour_price');

        if ($validated['payment_method'] === 'counter') {
            // Thanh toán tại quầy
            $booking = Booking::create([
                'tour_id' => $validated['tour_id'],
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'adults' => $validated['adults'],
                'children' => $validated['children'],
                'note' => $validated['note'],
                'total_price' => $totalPrice,
                'status' => 'Chờ xử lý',
                'payment_status' => 'Chưa thanh toán',
            ]);
            Mail::to($booking->email)->send(new InvoiceMail($booking));
            toastr()->success('Đặt Tour thành công!');
            return redirect()->route('bookings.show', $validated['tour_id']);
        } elseif ($validated['payment_method'] === 'vnpay') {
            // Tạo URL thanh toán VNPay
            $booking = Booking::create([
                'tour_id' => $validated['tour_id'],
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'adults' => $validated['adults'],
                'children' => $validated['children'],
                'note' => $validated['note'],
                'total_price' => $totalPrice,
                'status' => 'Chờ xử lý',
                'payment_status' => 'Đã thanh toán',
            ]);
            $vnpUrl = $this->vnpay($booking->id, $totalPrice);
            Mail::to($validated['email'])->send(new InvoiceMail($booking));
            toastr()->success('Đặt Tour thành công!');
            return redirect($vnpUrl);
        }
    }

    private function vnpay($id, $amount)
    {
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('bookings.show', $id);
        $vnp_TmnCode = "TWM7DO6S";//Mã website tại VNPAY
        $vnp_HashSecret = "UTOLCHN4QUIJT21HJ5IWLF6YA98IFF91"; //Chuỗi bí mật

        $vnp_TxnRef = $id; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh toán hóa đơn du lịch";
        $vnp_OrderType = 'booking';
        $vnp_Amount = $amount * 100;
        $vnp_Locale = "VN";
        $vnp_BankCode = "NCB";
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,

        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00'
            , 'message' => 'success'
            , 'data' => $vnp_Url);
            if (isset($_POST['redirect'])) {
                header('Location: ' . $vnp_Url);
                die();
            } else {
                echo json_encode($returnData);
            }
        // Chuyển hướng người dùng đến VNPay
        return $vnp_Url;
    }

    public function export($id)
    {
        $booking = Booking::with('tour')->findOrFail($id);
        $pdf = PDF::loadView('pages.exports.invoice', ['booking' => $booking]);

        return $pdf->download('hoa-don-' . $booking->id . '.pdf');
    }

}
