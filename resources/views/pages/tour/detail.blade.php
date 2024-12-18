@extends('layout')

@section('content')
<style>
    .tour-info.fixed {
        position: fixed;
        top: 50px;
        right: 45;
        width: 100%;
        z-index: 999;
    }

    .tour-info.stopped {
        position: absolute;
        top: auto;
        bottom: 0;
        right: 0;
    }
</style>

<div class="container my-5">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('index')}}">Trang chủ</a><i class="fa-solid fa-minus"></i></li>
          <li class="breadcrumb-item">
            <a href="{{ route('tour', $tour->category->slug ?? 0) }}">
                {{ $tour->category->title ?? 'Danh mục' }}
            </a><i class="fa-solid fa-minus"></i>
          </li>
          <li class="breadcrumb-item active" aria-current="page">{{ $tour->title }}</li>
        </ol>
      </nav>

    <!-- Chi tiết Tour -->
    <div class="row">
        <h1 class="mb-4"><strong>{{ $tour->title }}</strong></h1>

        <!-- Hình ảnh Tour -->
        <div class="col-md-7">
            <img src="{{ asset('upload/tours/' . $tour->image) }}" alt="{{ $tour->title }}" class="img-fluid rounded shadow" style="max-height: 500px; width: 100%; object-fit: cover; border-radius: 8px;">
        </div>

        <!-- Thông tin Tour -->
            <div class="col-md-5 tour-info" style="background-color: white">
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="2">{{ $tour->title }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 200px"><strong>Thời gian chuyến đi:</strong></td>
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
                        <tr style="background-color: #3E9FFD">
                            <td class="text-center" colspan="2">
                                <strong style="color: white">{{ number_format($tour->price, 0, ',', '.') }} VNĐ</strong>
                            </td>
                        </tr>
                        {{-- @if($tour->promotion) --}}
                        <tr>
                            <td colspan="2">Khuyến mãi{{ $tour->promotion }}</td>
                        </tr>
                        {{-- @endif --}}
                        <tr>
                            <td colspan="2">
                                <a href="{{ route('payment', $tour->id) }}" class="btn btn-info btn-lg" style="background-color: #3E9FFD">Đặt Tour Ngay</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    <!-- Mô tả Tour -->
    <div class="mt-4 col-md-7">
        <hr>
        <h3 class="text-uppercase text-center mb-3"><b>Hành trình</b></h3>
        <hr style="border-top: solid #3E9FFD 3px;">
        <div class="card shadow-sm p-3 rounded">
            <p>{!! $tour->description !!}</p>
        </div>
    </div>
</div>

<script>
    $(function () {
        var tourInfo = $('.tour-info'); // Chọn phần tử tour-info
        var description = $('.card'); // Chọn phần tử description
        var offsetTop = tourInfo.offset().top - 80; // Vị trí ban đầu của tour-info
        var containerWidth = tourInfo.width(); // Chiều rộng ban đầu của tour-info

        $(window).on('scroll', function () {
            var scrollTop = $(this).scrollTop(); // Lấy vị trí cuộn hiện tại
            var descriptionBottom = description.offset().top + description.outerHeight(); // Tính vị trí cuối của description
            var tourInfoHeight = tourInfo.outerHeight(); // Chiều cao của tour-info

            if (scrollTop > offsetTop && scrollTop + tourInfoHeight < descriptionBottom) {
                // Nếu cuộn trong khoảng giữa
                tourInfo.removeClass('stopped').addClass('fixed').css('width', containerWidth + 30 + 'px');
            } else if (scrollTop + tourInfoHeight >= descriptionBottom) {
                // Nếu cuộn vượt qua cuối phần description
                tourInfo.removeClass('fixed').addClass('stopped').css('width', containerWidth + 'px');
            } else {
                // Nếu cuộn về đầu trang
                tourInfo.removeClass('fixed stopped').css('width', '');
            }
        });
    });
</script>
@include('pages.include.footer')
@endsection
