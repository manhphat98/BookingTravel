@extends('layout')

@section('content')
<div class="container my-5">
    <!-- Tiêu đề Tour -->
    <div class="alert-warning text-center">
        <h1 class="text-center mb-4">{{ $tour->title }}</h1>
    </div>

    <div class="row">
        <!-- Hình ảnh Tour -->
        <div class="col-md-6">
            <img src="{{ asset('upload/tours/' . $tour->image) }}" alt="{{ $tour->title }}" class="img-fluid rounded shadow" style="max-height: 400px; width: 100%; object-fit: cover;">
        </div>

        <!-- Thông tin Tour -->
        <div class="col-md-6">
            <p><strong>Thời gian chuyến đi:</strong> {{ $tour->start_date }} đến {{ $tour->end_date }}</p>
            <p><strong>Thời lượng:</strong> {{ $tour->duration }} ngày</p>
            <p><strong>Giá:</strong> {{ number_format($tour->price, 0, ',', '.') }} VNĐ</p>
            @if($tour->promotion)
                <p><strong>Khuyến mãi:</strong> {{ $tour->promotion }}</p>
            @endif
            <p><strong>Phương tiện:</strong> {{ $tour->vehicle }}</p>
            <p><strong>Điểm khởi hành:</strong> {{ $tour->tour_from }}</p>
            <p><strong>Điểm đến:</strong> {{ $tour->tour_to }}</p>
            <!-- Nút Đặt Tour -->
            <div class="text-center mt-5">
                <a href="{#}" class="btn btn-primary btn-lg">Đặt Tour Ngay</a>
                {{-- <a href="{{ route('bookTour', $tour->id) }}" class="btn btn-primary btn-lg">Đặt Tour Ngay</a> --}}
            </div>
        </div>
    </div>

    <!-- Mô tả Tour -->
    <div class="mt-4">
        <h3 class="mb-3"><b>Hành trình:</b></h3>
        <div class="card shadow-sm p-3 rounded">
            <p>{!! $tour->description !!}</p>
        </div>
    </div>


</div>
@endsection
