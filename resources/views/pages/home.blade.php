@extends('layout')

@section('content')
@include('pages.include.slide')

{{-- Danh sách các Tour --}}
<div class="container box-list-tour top-30">
    <div class="row">
        <div class="col-md-12 col-xs-12 bx-title-lst-tour text-center">
            <div class="w100 fl title-tour1">
                <h2 style="color: #3E9FFD; font-size: 30px;">Tour Giá Sốc</h2>
            </div>
        </div>
        @if (count($tours) == 0)
            <div class="alert alert-warning text-center">
                Hiện chưa có Tour nào đươc cập nhật!
            </div>
        @else
            <div class="col-md-12 col-xs-12 bx-content-lst-tour">
                @include('pages.include.filter')
                <div class="row">
                    @foreach($tours as $tour)
                        <div class="col-md-4 col-xs-12 lst-tour-item">
                            <div class="w100 fl bx-wap-pr-item">
                                <div class="clearfix box-wap-imgpr">
                                    <a href="{{ route('detail-tour', $tour->slug) }}">
                                        <img src="{{ asset('upload/tours/'.$tour->image) }}" class="img-default" alt="{{ $tour->title }}" style="margin-bottom: 6px;">
                                    </a>
                                </div>
                                <div class="clear"></div>
                                <h4>
                                    <a href="{{ route('detail-tour', $tour->slug) }}">{{ $tour->title }}</a>
                                </h4>
                                <div class="clear"></div>
                                <div class="group-calendar w100 fl">
                                    <div class="col-md-6 col-xs-7 date-start">
                                        <span class="lst-icon1"><i class="fa fa-calendar"></i> </span>
                                        <span>{{ Carbon\Carbon::parse($tour->start_date)->format('d-m-Y') }}</span>
                                    </div>
                                    <div class="col-md-6 col-xs-5 date-range">
                                        <span class="lst-icon1"><i class="fa fa-clock-o"></i></span>
                                        <span>{{ $tour->duration }} Ngày</span>
                                    </div>
                                </div>
                                <div class="group-localtion w100 fl">
                                    <div class="col-md-6 col-xs-7 map-maker">
                                        <span class="lst-icon1"><i class="fa fa-map-marker"></i></span>
                                        <span>Khởi hành: {{ $tour->tour_from }}</span>
                                    </div>
                                    <div class="col-md-6 col-xs-5 numner-sit">
                                        <span class="lst-icon1"><i class="fa fa-users"></i></span>
                                        <span>Số chỗ: {{ $tour->quantity }}</span>
                                    </div>
                                </div>
                                @if($tour->promotion)
                                    <div class="note-attack">
                                        <i class="fa fa-bell" aria-hidden="true"></i> {{ $tour->promotion }}
                                    </div>
                                @endif

                                <div class="group-book w100 fl">
                                    <span class="price-sell">{{ number_format($tour->price, 0, ',', '.') }} VNĐ</span>
                                    <a href="{{ route('detail-tour', $tour->slug) }}" class="link-book btn_view_tour0">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div>
@include('pages.include.expected')
@include('pages.include.notes')
@include('pages.include.footer')
@endsection
