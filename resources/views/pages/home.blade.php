@extends('layout')
@section('content')
{{-- Danh sách các Tour --}}
<div class="container box-list-tour top-30">
    <div class="row">
       <div class="col-md-12 col-xs-12 bx-title-lst-tour text-center">
          <div class="w100 fl title-tour1">
             <h2 style="color: #3E9FFD;font-size: 30px;" >Tour Giá Sốc</h2>
          </div>
       </div>
       <div class="col-md-12 col-xs-12 bx-content-lst-tour">
          <div class="row">

             <div class="col-md-4 col-xs-12 lst-tour-item">
                <div class="w100 fl bx-wap-pr-item">
                   <div class="clearfix box-wap-imgpr">
                      {{-- <a href="{{route('tour', [$tour->slug])}}"> Dùng khi đã có Database--}}
                    <a href="{{route('detail-tour', ['quy-nhon-phu-yen'])}}">
                        <img src="{{asset('fontend/imgs/quynhon-phuyen/quynhon-phuyen.png')}}" class="img-default" alt="tour" style="margin-bottom: 6px;">
                      </a>
                   </div>
                   <div class="clear"></div>
                   <h4><a href="{{route('detail-tour', ['quy-nhon-phu-yen'])}}">Tour Hot nhất Hè 2023 Quy Nhơn - Phú Yên (Xứ Nẫu đẹp nhất Việt Nam)</a></h4>
                   <div class="clear"></div>
                   <div class="group-calendar w100 fl">
                      <div class="col-md-6 col-xs-7 date-start">
                         <i class="fa fa-calendar"></i>
                         Hàng ngày
                      </div>
                      <div class="col-md-6 col-xs-5 date-range">
                         <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> 3 Ngày</span>
                      </div>
                   </div>
                   <div class="group-localtion w100 fl">
                      <div class="col-md-6 col-xs-7 map-maker">
                         <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> Khởi hành 63 tỉnh/TP</span>
                      </div>
                      <div class="col-md-6 col-xs-5 numner-sit">
                         <span class="lst-icon1"><i class="fa fa-users"></i></span><span> Số chỗ: 10</span>
                      </div>
                   </div>
                   <div class="note-attack"><i class="fa fa-bell" aria-hidden="true"></i> Khuyến mãi 200K cho nhóm khách 5 người trở lên</div>
                   <div class="group-book w100 fl">
                      <span class="price-sell">4.990.000 VNĐ </span>
                      <a href="{{route('detail-tour', ['quy-nhon-phu-yen'])}}" class="link-book btn_view_tour0">Xem chi tiết</a>
                   </div>
                </div>
             </div>

          </div>
       </div>
    </div>
 </div>
 @endsection
