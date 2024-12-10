<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Tour;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()//Giao diện bên Admin
    {
        // Lấy danh sách tất cả các bookings
        $bookings = Booking::with('tour')->get(); // Kèm thông tin tour

        return view('admin.booking.index', compact('bookings'));
    }
    public function checkout($id)
    {
        $tour = Tour::findOrFail($id); // Lấy thông tin tour theo ID
        return view('pages.checkout', compact('tour')); // Truyền dữ liệu tour sang view checkout
    }

    public function payment(Request $request)
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
            'payment_method' => 'required|string|in:counter,vnpay,momo,bank', // Xác thực phương thức thanh toán
        ]);

        // Xác định trạng thái thanh toán dựa trên phương thức thanh toán
        $paymentStatus = match ($validated['payment_method']) {
            'counter' => 'Chờ liên lạc', // Thanh toán tại quầy
            'vnpay', 'momo', 'bank' => 'Đã thanh toán', // Các phương thức thanh toán online
            default => 'Không xác định', // Trường hợp không hợp lệ
        };

        // Lấy thông tin tour và tính tổng tiền
        $tour = Tour::findOrFail($validated['tour_id']);
        $totalPrice = ($validated['adults'] * $tour->price) + ($validated['children'] * $tour->price * 0.7);

        // Tạo một bản ghi trong bảng Booking
        Booking::create([
            'tour_id' => $validated['tour_id'],
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'adults' => $validated['adults'],
            'children' => $validated['children'],
            'note' => $validated['note'] ?? null,
            'total_price' => $totalPrice,
            'status' => 'Chờ xử lý', // Đặt mặc định là "pending"
            'payment_status' => $paymentStatus, // Gán trạng thái thanh toán
        ]);

        // Gửi thông báo thành công và quay lại trang chủ
        return redirect()->route('index')->with('Đặt tour thành công!', 'Chúng tôi sẽ liên hệ với bạn sớm.');
    }

    public function counter($tour_id)
    {
        $tour = Tour::findOrFail($tour_id);
        return view('payment.counter', compact('tour'));
    }

    public function vnpay(Request $request)
    {
        $data=$request->all();

        $tour_vnpay = $request->input('tour_vnpay');

        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://127.0.0.1:8000";
        $vnp_TmnCode = "TWM7DO6S";//Mã website tại VNPAY
        $vnp_HashSecret = "UTOLCHN4QUIJT21HJ5IWLF6YA98IFF91"; //Chuỗi bí mật

        $vnp_TxnRef = rand(00000,99999); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh toán hóa đơn";
        $vnp_OrderType = 'BookingTravel';
        $vnp_Amount = $tour_vnpay * 100;
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
            // vui lòng tham khảo thêm tại code demo
    }

    public function momo($tour_id)
    {
        $tour = Tour::findOrFail($tour_id);
        // Điều hướng hoặc render giao diện thanh toán Momo
        return view('payment.momo', compact('tour'));
    }

    public function success(Request $request)
    {
        // Lưu thông tin đặt tour vào cơ sở dữ liệu
        Booking::create([
            'tour_id' => $request->tour_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'adults' => $request->adults,
            'children' => $request->children,
            'note' => $request->note,
            'total_price' => $request->total_price,
            'status' => 'Chờ xử lý',
            'payment_status' => 'Đã thanh toán',
        ]);

        // Trả về thông báo thành công
        return redirect()->route('tour.details', $request->tour_id)->with('success', 'Thanh toán thành công! Thông tin đặt tour đã được lưu.');
    }

}
