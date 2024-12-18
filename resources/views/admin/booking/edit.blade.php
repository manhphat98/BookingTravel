@extends('layouts.app')

@section('content')
    <div class="text-center mb-4">
        <b><span style="text-transform: uppercase; font-size: 35px">Thông tin liên hệ Khách hàng</span></b>
    </div>

    <form action="{{ route('bookings.update', $booking->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-4">
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="title">Khách hàng:</label>
                    </div>
                    <div class="form-group col-md-8">
                        <input disabled type="text" class="form-control" name="name" id="name" value="{{ $booking->name }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="title">Email:</label>
                    </div>
                    <div class="form-group col-md-8">
                        <input disabled type="text" class="form-control" name="email" id="email" value="{{ $booking->email }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="title">Số điện thoại:</label>
                    </div>
                    <div class="form-group col-md-8">
                        <input disabled type="text" class="form-control" name="phone" id="phone" value="{{ $booking->phone }}">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4">
                        <h4><strong>Số lượng</strong></h4><hr>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Người lớn:</label>
                            </div>
                            <div class="form-group col-md-8">
                                <input disabled type="number" class="form-control" name="adults" id="adults" value="{{ $booking->adults }}">
                                @error('adults')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Trẻ em:</label>
                            </div>
                            <div class="form-group col-md-8">
                                <input disabled type="number" class="form-control" name="children" id="children" value="{{ $booking->children }}">
                                @error('children')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-8">
                        <div class="form-group">
                            <h4><strong>Ghi chú:</strong></h4>
                            <textarea class="form-control" name="note" id="note" rows="5">{{ $booking->note }}</textarea>
                            @error('note')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr style="border-radius: 5px; height:2px;border-width:0;color:gray;background-color:gray">

        <div class="text-center mb-4">
            <b><span style="text-transform: uppercase; font-size: 35px">Thông tin Tour</span></b>
        </div>

        <div class="row">
            <div class="form-group col">
                <label>Tour:</label>
                <input disabled type="text" class="form-control" name="tourTitle" id="tourTitle" value="{{ $booking->tour->title }}">
                @error('tourTitle')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group col">
                <label for="price">Tổng tiền:</label>
                <input disabled type="text" class="form-control" name="price" id="price" value="{{ number_format($booking->total_price, 0, ',', '.')}} VNĐ">
                @error('price')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="form-group col">
                <label>Ngày đặt tour:</label>
                <input disabled type="text" class="form-control" name="created_at" id="created_at" value="{{ $booking->created_at->format('d/m/Y H:i') }}">
                @error('created_at')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group col">
                <label>Ngày xác nhận:</label>
                <input disabled type="text" class="form-control" name="updated_at" id="updated_at" value="{{ $booking->updated_at->format('d/m/Y H:i') }}">
                @error('updated_at')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group col">
                <label for="status">Xác nhận Tour:</label>
                <select class="form-control" name="status" id="status">
                    <option {{ $booking->status == 'Chờ xử lý' ? 'selected' : '' }}>Chờ xử lý</option>
                    <option {{ $booking->status == 'Xác nhận' ? 'selected' : '' }}>Xác nhận</option>
                    <option {{ $booking->status == 'Đã hủy' ? 'selected' : '' }}>Đã hủy</option>
                </select>
            </div>

            <div class="form-group col">
                <label for="payment_status">Xác nhận Thanh toán:</label>
                <select class="form-control" name="payment_status" id="payment_status">
                    <option  {{ $booking->payment_status == 'Chưa thanh toán' ? 'selected' : '' }}>Chưa thanh toán</option>
                    <option  {{ $booking->payment_status == 'Đã thanh toán' ? 'selected' : '' }}>Đã thanh toán</option>
                    <option  {{ $booking->payment_status == 'Hoàn tiền' ? 'selected' : '' }}>Hoàn tiền</option>
                </select>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary px-4 py-2 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Xác nhận Tour
            </button>
        </div>
    </form>
@endsection
