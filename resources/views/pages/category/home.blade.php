@extends('layout')

@section('content')
@include('pages.include.slide')

{{-- Bộ lọc --}}
<div class="container" style="margin-top: 30px;">
    @include('pages.include.filter')
</div>

{{-- Danh sách các Tour --}}
<div class="container" style="width: 90%; margin: auto; margin-top: 30px;">
    <div style="text-align: center; margin-bottom: 20px;">
        <h2 style="color: #3E9FFD; font-size: 30px;" class="text-uppercase"><strong>{{$category->title}}</strong></h2>
    </div>

    @if($tours->isEmpty())
        <div style="text-align: center; background: #fff3cd; padding: 15px; border: 1px solid #ffeeba; color: #856404;">
            Không tìm thấy tour nào phù hợp với tiêu chí lọc.
        </div>
    @else
        <div style="display: flex; flex-wrap: wrap; gap: 20px;">
            @foreach($tours as $tour)
                <div style="width: 32%; position: relative; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    {{-- Hình ảnh nền --}}
                    <a href="{{ route('detail-tour', $tour->slug) }}">
                        <img src="{{ asset('upload/tours/'.$tour->image) }}"
                             style="width: 100%; height: 250px; object-fit: cover;"
                             alt="{{ $tour->title }}">
                    </a>

                    {{-- Thông tin đè lên hình ảnh --}}
                    <div style="
                        position: absolute;
                        bottom: 0;
                        left: 0;
                        width: 100%;
                        background: rgba(0, 0, 0, 0.6);
                        color: #fff;
                        padding: 15px;
                    ">
                        <h4 style="margin: 0; font-size: 18px; font-weight: bold;">
                            <a href="{{ route('detail-tour', $tour->slug) }}" style="color: #ffc107; text-decoration: none;">
                                {{ $tour->title }}
                            </a>
                        </h4>
                        <div class="row" style="font-size: 14px; margin-top: 8px;">
                            <div class="col-md-6">
                                <span><i class="fa fa-calendar"></i> {{ Carbon\Carbon::parse($tour->start_date)->format('d-m-Y') }}</span>
                                <br>
                                <span><i class="fa fa-clock-o"></i> {{ $tour->duration }} Ngày</span>
                                <br>
                            </div>
                            <div class="col-md-6">
                                <span><i class="fa fa-map-marker"></i> Khởi hành: {{ $tour->tour_from }}</span>
                                <br>
                                <span><i class="fa fa-users"></i> Số chỗ: {{ $tour->quantity }}</span>
                            </div>
                        </div>
                        @if($tour->promotion)
                            <div style="margin-top: 5px; color: #ffcc00;">
                                <i class="fa fa-bell"></i> {{ $tour->promotion }}
                            </div>
                        @endif
                        <div style="margin-top: 10px; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-size: 16px; font-weight: bold; color: #ffc107;">
                                {{ number_format($tour->price, 0, ',', '.') }} VNĐ
                            </span>
                            <a href="{{ route('detail-tour', $tour->slug) }}"
                               style="background: #3E9FFD; color: #fff; padding: 6px 10px; text-decoration: none; border-radius: 4px;">
                                Xem chi tiết
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

@include('pages.include.expected')
@include('pages.include.notes')
@include('pages.include.footer')
@endsection
