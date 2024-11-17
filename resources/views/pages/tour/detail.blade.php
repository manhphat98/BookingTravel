@extends('layout')
@section('content')
<div class="container box-container-tour">
    <div class="row">
    <ul class="breadcrumb">
        <li><a href="{{route('index')}}">Trang chủ <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
        <li><a href="{{route('tour', ['du-lich-noi-dia'])}}">Du lịch trong nước <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
        <li class="active"><a href="{{route('detail-tour', ['quy-nhon-phu-yen'])}}">Du lịch Quy Nhơn Phú Yên</a></li>
    </ul>
    </div>
</div>
<div class="container box-container-tour">
    <div class="row">
    <div class="col-md-8 col-xs-12">
        <div class="w100 fl">
            <h1 class="hone-detail-tour"><i class="fa-solid fa-location-dot"></i> Tour Hot nhất Hè 2023 Quy Nhơn - Phú Yên (Xứ Nẫu đẹp nhất Việt Nam)</h1>
            <div class="b-detail-primary w100 fl">
                <div class="w100 fl desc-dtt">
                <p></p>
                </div>
                <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="w100 fl bimg-dt-left">
                        <div class="box-wap-imgpr-dt">
                            <img alt="du lịch" src="{{ asset('fontend/imgs/quynhon-phuyen/quynhon-phuyen.png') }}" width="100%">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12">
                    <div class="w100 fl bdesc-dt-right">
                        <div class="col-md-7 col-xs-12 bdesc-dt-right-left">
                            <table class="table tbct-tour">
                            <tbody>
                                <tr>
                                    <td style="text-align: left;">Ngày khởi hành:</td>
                                    <td>
                                        <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html">
                                        Hàng ngày																																											<a href="https://vietnamtravel.net.vn/vi/lich-trinh-tour/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html" class="tour-other-day" target="_blank">Xem thêm</a>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;">Thời gian:</td>
                                    <td>3 Ngày</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;">Xuất phát:</td>
                                    <td>Khởi hành 63 tỉnh/TP</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;">Điểm du lịch:</td>
                                    <td>Du lịch Quy Nhơn Phú Yên</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;">Lịch trình tour:</td>
                                    <td>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <div class="col-md-5 col-xs-12 bdesc-dt-right-right">
                            <div class="bprice-dt-tour">
                            <div class="giachitu">Giá chỉ từ</div>
                            <div class="price-dt-tour col-xs-12">
                                4.990.000 VNĐ
                            </div>
                            <div class="clbook-dt span12">
                                <span class="booknow btn-dattour buy-booking-tour"><img alt="du lịch" src="{{ asset('fontend/imgs/btn_register_now.png') }}" class="btn_register_now"></span>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="w100 fl"></div>
            <div class="b-detail-ct-tour w100 fl top-20">
                <ul class="nav nav-tabs tab-dt-tour">
                <li class="active"><a data-toggle="tab">Chi tiết tour</a></li>
                <li><a data-toggle="tab" href="#menu1">Giá - Lịch khởi hành</a></li>
                <li id="tit_tab_booking"><a data-toggle="tab" href="#menu2">Đặt Tour</a></li>
                </ul>
                <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em> Quy Nhơn &ndash; Mảnh đất thương nhớ.Th&agrave;nh phố thuộc tỉnh B&igrave;nh Định, nơi giao thương cảng biển quan trọng của miền Trung. Quy Nhơn l&agrave; một th&agrave;nh phố ven biển với những bờ biển đẹp như: Kỳ Co, H&ograve;n Kh&ocirc;, Trung Lương, Quy H&ograve;a&hellip; đ&acirc;y l&agrave; những nơi c&oacute; d&ograve;ng nước biển trong xanh đến tận đ&aacute;y, c&oacute; những rạn san h&ocirc; đầy m&agrave;u sắc, cũng l&agrave; những điểm tham quan bậc nhất tại v&ugrave;ng đất n&agrave;y. Đến Quy Nhơn du kh&aacute;ch sẽ được trải nghiệm cuộc sống&nbsp; y&ecirc;n b&igrave;nh của nơi đ&acirc;y, thưởng thức những m&oacute;n ăn độc đ&aacute;o của miền đất v&otilde;, được nghe những c&acirc;u từ của b&agrave;i ch&ograve;i, h&aacute;t bội sẽ l&agrave;m cho du kh&aacute;ch c&oacute; được những khoảnh khoắc đ&aacute;ng nhớ v&agrave; y&ecirc;u c&aacute;i b&igrave;nh dị ở th&agrave;nh phố Quy Nhơn nhỏ xinh n&agrave;y.</em></span></span></p>
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><em><img alt="" src="{{ asset('fontend/imgs/quynhon-phuyen/quynhon-phuyen1.png') }}" style="height:500px; width:1100px" /></em></span></span></p>
                    <hr />
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong><span style="color:#FF0000">NG&Agrave;Y 1: Đ&Oacute;N KH&Aacute;CH- CITY TOUR&nbsp; &nbsp; &nbsp;</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </strong></span></span></p>
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Xe v&agrave; HDV đ&oacute;n kh&aacute;ch tại s&acirc;n bay, nếu kh&aacute;ch đến sớm th&igrave; đ&oacute;n kh&aacute;ch d&ugrave;ng điểm t&acirc;m caf&eacute; (chi ph&iacute; tự t&uacute;c). S</span></span><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">au đ&oacute; gh&eacute;p đo&agrave;n đưa qu&yacute; kh&aacute;ch đi ăn trưa.&nbsp;</span></span><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sau bữa trưa khởi h&agrave;nh về Quy Nhơn. Tr&ecirc;n đường về gh&eacute; tham quan <span style="color:#008000"><strong>Ch&ugrave;a Thi&ecirc;n Hưng</strong>,</span> ng&ocirc;i ch&ugrave;a nổi tiếng với vẻ đẹp sơn thủy hữu t&igrave;nh v&agrave; cũng l&agrave; nơi lưu giữ <span style="color:#008000"><strong>Ngọc X&aacute; Lợi</strong></span> linh thi&ecirc;ng.&nbsp;</span></span><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Di chuyển về Quy Nhơn l&agrave;m thủ tục nhận ph&ograve;ng kh&aacute;ch sạn v&agrave; nghỉ ngơi</span></span></p>
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong><span style="color:#008000">14h00:</span> </strong>Đo&agrave;n khởi h&agrave;nh đi tham quan điểm đầu ti&ecirc;n <span style="color:#008000"><strong>- Khu du lịch Ghềnh R&aacute;ng, Qu&yacute; kh&aacute;ch được dạo bước tr&ecirc;n dốc Mộng Cầm, đồi Thi Nh&acirc;n, b&atilde;i tắm Ho&agrave;ng Hậu, Ti&ecirc;n Sa&nbsp;</strong></span></span></span><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">v&agrave; sống lại với những vần thơ H&agrave;n Mặc Tử c&ugrave;ng t&agrave;i nghệ của b&uacute;t lửa Dzũ Kha.</span></span></p>
                    <p style="text-align:justify"><strong><span style="color:#008000">15h30:</span> </strong><span style="font-family:arial,helvetica,sans-serif; font-size:14px">&nbsp;Đo&agrave;n đến </span><span style="color:#008000"><strong>Th&aacute;p Đ&ocirc;i</strong></span><span style="font-family:arial,helvetica,sans-serif; font-size:14px"><span style="color:#008000">,</span> l&agrave; cụm 02 ngọn th&aacute;p Chăm được x&acirc;y duy&ecirc;n d&aacute;ng b&ecirc;n cạnh nhau nằm giữa l&ograve;ng th&agrave;nh phố.</span></p>
                    <p style="text-align:justify"><span style="font-family:arial,helvetica,sans-serif; font-size:14px"><span style="color:#008000"><strong>16h30:</strong></span> Xe đưa đo&agrave;n tham quan <span style="color:#008000"><strong>Quảng Trường Quy Nhơn, nơi tượng đ&agrave;i Nguyễn Sinh Sắc &ndash; Nguyễn Tất Th&agrave;nh</strong></span> uy nghi tượng trưng cho t&igrave;nh cha con h&ograve;a quyện với t&igrave;nh y&ecirc;u nước v&agrave; Tham quan tự do, tắm biển ngắm ho&agrave;ng h&ocirc;n tr&ecirc;n biển Quy Nhơn.</span></p>
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong><span style="color:#008000">18h00:</span> </strong>Xe đưa qu&yacute; kh&aacute;ch ăn tối tại nh&agrave; h&agrave;ng. Với những m&oacute;n ẩm thực đặc trưng tại đất B&igrave;nh Định.&nbsp;</span></span><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Nghỉ đ&ecirc;m kh&aacute;ch sạn tại Quy Nhơn.</span></span></p>
                    <hr />
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><img alt="" src="{{ asset('fontend/imgs/quynhon-phuyen/quynhon-phuyen2.jpg') }}" style="height:600px; width:1100px" /></span></span></p>
                    <hr />
                    <p style="text-align:justify"><span style="font-family:arial,helvetica,sans-serif; font-size:14px"><span style="color:#FF0000"><strong>NG&Agrave;Y 2: PH&Uacute; Y&Ecirc;N- HOA V&Agrave;NG TR&Ecirc;N CỎ XANH&nbsp; </strong>&nbsp; </span>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></p>
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><span style="color:#008000"><strong>07h00:</strong></span>&nbsp;Qu&yacute; kh&aacute;ch ăn điểm t&acirc;m s&aacute;ng.</span></span></p>
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><span style="color:#008000"><strong>08h00:</strong></span> Đo&agrave;n khởi h&agrave;nh tham quan Ph&uacute; Y&ecirc;n.</span></span></p>
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><span style="color:#008000"><strong>09h30:</strong> </span>Tham quan <strong><span style="color:#008000">Nh&agrave; thờ Mằng Lăng,</span> </strong>được thiết kế theo lối kiến tr&uacute;c Gothic với c&aacute;c họa tiết tinh xảo, một kh&aacute;m ph&aacute; mới mẻ ở đ&acirc;y l&agrave; hang th&aacute;nh đường trong l&ograve;ng quả đồi nh&acirc;n tạo, cũng l&agrave; nơi lưu giữ <span style="color:#008000"><strong>Cuốn s&aacute;ch c&oacute; in chữ Quốc ngữ đầu ti&ecirc;n của nước ta.</strong></span></span></span></p>
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong><span style="color:#008000">10h30:</span> </strong>Đo&agrave;n đến <span style="color:#008000"><strong>Ghềnh Đ&aacute; Đĩa</strong></span>, một thắng cảnh thi&ecirc;n nhi&ecirc;n cấp quốc gia đầy kỳ th&uacute;, tr&ocirc;ng xa như một tổ ong đen b&oacute;ng hay l&agrave; những chồng đĩa trong l&ograve; gạch dưới b&agrave;n tay sắp đặt của tạo h&oacute;a.</span></span></p>
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong><span style="color:#008000">11h30: Ăn trưa</span> </strong>tại nh&agrave; h&agrave;ng tr&ecirc;n <span style="color:#008000"><strong>đầm &Ocirc; Loan</strong> </span><strong><span style="color:#008000">c&ugrave;ng m&oacute;n s&ograve; huyết nổi tiếng.</span> </strong>Nghỉ ngơi ngắn tại nh&agrave; h&agrave;ng.</span></span></p>
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong><span style="color:#008000">13h30:</span> </strong>Khởi h&agrave;nh đến<strong> <span style="color:#008000">B&atilde;i X&eacute;p &ndash; Ghềnh &Ocirc;ng,</span> </strong>h&igrave;nh ảnh quen thuộc từ Bộ phim<strong> <span style="color:#008000">T&ocirc;i thấy hoa v&agrave;ng tr&ecirc;n cỏ xanh,</span> </strong>ấn tượng phải kể đến l&agrave; b&atilde;i cỏ rộng m&ecirc;nh m&ocirc;ng của Ghềnh &Ocirc;ng ph&iacute;a b&ecirc;n tr&ecirc;n một b&atilde;i X&eacute;p s&oacute;ng vỗ hiền h&ograve;a.</span></span></p>
                    <hr />
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><img alt="" src="{{ asset('fontend/imgs/quynhon-phuyen/quynhon-phuyen3.jpg') }}" style="height:550px; width:1100px" /></span></span></p>
                    <hr />
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><span style="color:#008000"><strong>14h30:&nbsp;</strong></span>Qu&yacute; kh&aacute;ch tham quan <span style="color:#008000"><strong>Ch&ugrave;a Thanh Lương</strong>-</span> Tiểu cảnh hồ nước nơi đ&acirc;y c&oacute; tượng Phật B&agrave; Quan &Acirc;m lớn, được tạo h&igrave;nh như đang ẩn m&igrave;nh dưới nước độc đ&aacute;o. Trước mặt tượng c&oacute; lối đi nổi tr&ecirc;n mặt nước, n&ecirc;n du kh&aacute;ch c&oacute; thể lại gần tượng hơn để chi&ecirc;m ngưỡng, chụp ảnh check-in..</span></span></p>
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><span style="color:#008000"><strong>15h30:</strong></span> H&agrave;nh tr&igrave;nh về lại Quy Nhơn. Qu&yacute; kh&aacute;ch về lại kh&aacute;ch sạn nghỉ ngơi, tự do tắm biển.</span></span></p>
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><span style="color:#008000"><strong>18h00:</strong> </span>Xe v&agrave; HDV đưa đo&agrave;n đi <strong><span style="color:#008000">ăn tối tại nh&agrave; h&agrave;ng.</span>&nbsp;</strong></span></span><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sau bữa tối Quy Kh&aacute;ch tự do vui chơi, tham quan Quy Nhơn về đ&ecirc;m, dạo chơi trong Chợ đ&ecirc;m hoặc thưởng thức nhạc tại c&aacute;c ph&ograve;ng tr&agrave;, bar,....(chi ph&iacute; tự t&uacute;c).&nbsp;</span></span><span style="color:#008000"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Nghỉ đ&ecirc;m tại Quy Nhơn.</strong></span></span></span></p>
                    <hr />
                    <p style="text-align:justify"><span style="color:#008000"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong><img alt="" src="{{ asset('fontend/imgs/quynhon-phuyen/quynhon-phuyen4.jpg') }}" style="height:600px; width:1100px" /></strong></span></span></span></p>
                    <hr />
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong><span style="color:#FF0000">NG&Agrave;Y 3: KỲ CO- LẶN NGẮM SANHO- EO GI&Oacute;&nbsp; </span>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong></span></span></p>
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><span style="color:#008000"><strong>07h00: </strong></span>Qu&yacute; kh&aacute;ch d&ugrave;ng điểm t&acirc;m s&aacute;ng.</span></span></p>
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><span style="color:#008000"><strong>8h00:</strong></span> Xe v&agrave; hướng dẫn vi&ecirc;n đ&oacute;n kh&aacute;ch tại kh&aacute;ch sạn, khởi h&agrave;nh đi đảo <span style="color:#008000"><strong>Kỳ Co </strong></span>với những cảnh sắc thi&ecirc;n nhi&ecirc;n tuyệt đẹp đang đ&oacute;n chờ.</span></span></p>
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><span style="color:#008000"><strong>8h30:</strong></span>&nbsp; Đến&nbsp; bến thuyền Nhơn L&yacute;, qu&yacute; kh&aacute;ch đi cano để di chuyển qua đảo <span style="color:#008000"><strong>Kỳ Co</strong></span>, với dải c&aacute;t v&agrave;ng &ocirc;m lấy biển, bọc th&agrave;nh một h&igrave;nh cung, mềm mại mềm mại như dải lụa uốn lượn, &ocirc;m trọn lấy l&agrave;n nước trong xanh tận đ&aacute;y. Tận hưởng những gi&acirc;y ph&uacute;t thư gi&atilde;n giữa m&ecirc;nh m&ocirc;ng s&oacute;ng nước.</span></span></p>
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><span style="color:#008000"><strong>09h30:</strong></span> Đến nơi, Qu&yacute; kh&aacute;ch h&ograve;a m&igrave;nh v&agrave;o thi&ecirc;n nhi&ecirc;n, một b&ecirc;n l&agrave; biển nước m&agrave;u xanh lam trong vắt, một b&ecirc;n l&agrave; n&uacute;i đ&aacute; cao sừng sững. Kh&aacute;m ph&aacute; bãi cát dài mịn, khung cảnh hoang sơ đ&acirc;̀y quy&ecirc;́n rũ, đặc bi&ecirc;̣t được ch&acirc;́m phá bằng những c&ocirc;ng trình đặc sắc như <span style="color:#008000"><strong>C&acirc;̀u Y&ecirc;́n, C&acirc;̀u Trái Tim, Kỳ Co Resort,</strong>&hellip;</span> và những hang đá, su&ocirc;́i nước đẹp đ&ecirc;́n b&acirc;́t ngờ.<span style="color:#008000">&nbsp;</span></span></span><span style="color:#008000"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Qu&yacute; kh&aacute;ch c&oacute; thể mua th&ecirc;m dịch vụ Đi bộ dưới đ&aacute;y biển, Motor nước, Jetsky,&hellip; (chi ph&iacute; tự t&uacute;c)</strong></span></span></span></p>
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><span style="color:#008000"><strong>10h30:</strong> </span><strong><span style="color:#008000">Cano đưa Qu&yacute; kh&aacute;ch ra B&atilde;i Dứa lặn ngắm san h&ocirc;,</span> </strong>khu vực n&agrave;y c&oacute; nhiều rặng san h&ocirc; đa dạng, nhiều m&agrave;u sắc, chủng loại, ngo&agrave;i ra, thi thoảng c&ograve;n c&oacute; c&aacute;c loại Cầu gai, sao biển, nhiều loại c&aacute; đầy m&agrave;u sắc.</span></span></p>
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><span style="color:#008000"><strong>11h30:</strong></span> Qu&yacute; kh&aacute;ch trở lại bến thuyền tắm nước ngọt v&agrave; thưởng thức bữa trưa với c&aacute;c m&oacute;n hải sản tươi sống. Qu&yacute; kh&aacute;ch nghỉ trưa ngắn tại nh&agrave; h&agrave;ng</span></span></p>
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><span style="color:#008000"><strong>13h00:</strong></span> Đo&agrave;n kh&aacute;ch tham quan <span style="color:#008000"><strong>Eo Gi&oacute;</strong></span> một b&atilde;i biển hoang sơ dưới sự b&agrave;o m&ograve;n của nước v&agrave; gi&oacute;, tạo n&ecirc;n một eo biển tuyệt đẹp, quanh năm lộng gi&oacute;.</span></span></p>
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><span style="color:#008000"><strong>14h00:</strong> </span>Tiếp tục gh&eacute; thăm <span style="color:#008000"><strong>Tịnh x&aacute; Ngọc H&ograve;a</strong> </span>&ndash; một địa điểm l&yacute; tưởng để tĩnh t&acirc;m v&agrave; thiền định &ndash; với kiến tr&uacute;c nổi bật l&agrave; tượng đ&ocirc;i Phật B&agrave; Quan &Acirc;m cao nhất Việt Nam, gồm hai tượng phật B&agrave; Quan Thế &Acirc;m, tượng hướng về ph&iacute;a Nam (Cổng ch&iacute;nh Tịnh X&aacute;) c&ograve;n được gọi l&agrave; Quan Thế &Acirc;m Kiết Tường ph&ugrave; trợ cho rừng v&agrave;ng.C&ograve;n bức tượng c&ograve;n lại l&agrave; Quan Thế &Acirc;m Nam Hải hướng ra biển được người d&acirc;n xem l&agrave; ph&ugrave; trợ cho biển bạc.</span></span></p>
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><span style="color:#008000"><strong>15h00:</strong></span> Xe v&agrave; HDV đưa qu&yacute; kh&aacute;ch ra s&acirc;n bay, Tr&ecirc;n đường đi qu&yacute; kh&aacute;ch dừng ch&acirc;n gh&eacute; tham quan v&agrave; checkin đồi <span style="color:#008000"><strong>Đồi C&aacute;t phương Mai</strong></span> checkin. (Hiện tại đồi c&aacute;t đ&atilde; được san lấp, n&ecirc;n qu&yacute; kh&aacute;ch c&oacute; thể dừng ch&acirc;n chụp c&aacute;c đồi c&aacute;t tương tự )</span></span></p>
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">HDV hướng dẫn đo&agrave;n l&agrave;m thủ tục l&ecirc;n chuyến bay trở về nh&agrave;, hẹn gặp lại qu&yacute; kh&aacute;ch ở những chuyến du lịch tiếp theo c&ugrave;ng VietnamTravel</span></span></p>
                    <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><img alt="" src="{{ asset('fontend/imgs/quynhon-phuyen/quynhon-phuyen5.jpg') }}" style="height:550px; width:1100px" /></span></span></p>
                    <div class="w100 fl">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                            <div class="tit-service-attach">Giá dịch vụ bao gồm</div>
                            <ul class="ul-lst-service-attach">
                                <li><img alt="du lịch" src="https://vietnamtravel.net.vn/assets/desktop/images/bao-hiem.png"> Bảo hiểm du lịch theo quy định</li>
                                <li><img alt="du lịch" src="https://vietnamtravel.net.vn/assets/desktop/images/bua-an.png"> Các bữa ăn theo chương trình</li>
                                <li><img alt="du lịch" src="https://vietnamtravel.net.vn/assets/desktop/images/huong-dan-vien.png"> Hướng dẫn viên suốt chương trình</li>
                                <li><img alt="du lịch" src="https://vietnamtravel.net.vn/assets/desktop/images/ve-tham-quan.png"> Vé tham quan theo chương trình</li>
                                <li><img alt="du lịch" src="https://vietnamtravel.net.vn/assets/desktop/images/van-chuyen.png"> Các loại hình vận chuyển theo chương trình</li>
                            </ul>
                            </div>
                            <div class="col-xs-12 col-md-6">
                            <div class="tit-service-attach">Giá dịch vụ không bao gồm</div>
                            <ul class="ul-lst-service-attach">
                                <li><img alt="du lịch" src="https://vietnamtravel.net.vn/assets/desktop/images/ho-chieu.png"> Chứng minh thư, hộ chiếu còn hiệu lực 6 tháng</li>
                                <li><img alt="du lịch" src="https://vietnamtravel.net.vn/assets/desktop/images/hanh-ly.png"> Phí hành lý quá cước và các chi phí cá nhân</li>
                                <li><img alt="du lịch" src="https://vietnamtravel.net.vn/assets/desktop/images/ho-chieu.png"> Visa tái nhập cho người nước ngoài(nếu có)</li>
                                <li><img alt="du lịch" src="https://vietnamtravel.net.vn/assets/desktop/images/money.png"> Tiền Tip cho hướng dẫn viên địa phương</li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <div class="lichtrinhtour-show">
                        <table class="table table-bordered">
                            <tr class="table-tr-header">
                            <th class="thtd-code">Mã Tour</th>
                            <th class="thtd-destination">Nơi đến</th>
                            <th>Số ngày</th>
                            <th>Ngày khởi hành</th>
                            <th style="display: none;">Ngày về</th>
                            <th>Giá</th>
                            <th style="display: none;">Số chỗ</th>
                            <th class="thtd-bookt"></th>
                            </tr>
                            <tr class="">
                            <td class="thtd-code">QNPY 3N</td>
                            <td class="thtd-destination"><a class="aclassify-tour" href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html" target="_blank">Tour Hot nhất Hè 2023 Quy Nhơn - Phú Yên (Xứ Nẫu đẹp nhất Việt Nam)</a></td>
                            <td>3</td>
                            <td>
                                Hàng ngày
                            </td>
                            <td style="display: none;">
                            </td>
                            <td>
                                <span class="price-sell">4.990.000 đ</span>
                            </td>
                            <td style="display: none;">10</td>
                            <td class="thtd-bookt"><span class="booktour-lichtrinh buy-booking-tour" style="cursor:pointer">Đặt Tour</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <form method="POST" action="https://vietnamtravel.net.vn/vi/dat-tour.html" accept-charset="UTF-8" class="form-horizontal" role="form">
                        <input name="_token" type="hidden" value="JXOFRQqHPRBem5Cx98aTYc7lioSf3WrNrDrmarU6">
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Họ tên</label>
                            <div class="col-sm-9">
                            <input type="text" name="fullname" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Điện thoại</label>
                            <div class="col-sm-9">
                            <input type="text" name="phone" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                            <input type="email" name="email" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Số khách người lớn</label>
                            <div class="col-sm-9">
                            <input type="number" name="adult" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Số khách trẻ em</label>
                            <div class="col-sm-9">
                            <input type="number" name="children" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Ngày khởi hành</label>
                            <div class="col-sm-9">
                            <input id="start_date_book" type="text" name="start_date_book" class="form-control" >
                            </div>
                        </div>
                        <script>
                            $(function() {
                                $( "#start_date_book" ).datepicker({
                                    //defaultDate: "+1w",
                                    minDate: '0',
                                    dateFormat: "dd-mm-yy",
                                    changeMonth: true,
                                    numberOfMonths: 1
                                });
                            });
                        </script>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Tin nhắn</label>
                            <div class="col-sm-9">
                            <textarea class="form-control" name="message"></textarea>
                            </div>
                        </div>
                        <input type="hidden" name="product_id" value="470">
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success">Đặt tour</button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="tit-service-attach">Bình luận chia sẻ</div>
                <div class="heateor_sss_sharing_container heateor_sss_horizontal_sharing" heateor-sss-data-href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html">
                <div class="heateor_sss_sharing_title" style="font-weight:bold">Chia sẻ bài viết lên mạng xã hội</div>
                <ul class="heateor_sss_sharing_ul">
                    <a target="_blank" href="https://twitter.com/intent/tweet?text=https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html&amp;url=https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html&amp;via=TWITTER-HANDLER">
                        <li class="heateorSssSharingRound">
                            <i style="width:35px;height:35px;border-radius:999px;" alt="Twitter" title="Twitter" class="heateorSssSharing heateorSssTwitterBackground" onclick="">
                            <ss style="display:block;border-radius:999px;" class="heateorSssSharingSvg heateorSssTwitterSvg"></ss>
                            </i>
                        </li>
                    </a>
                    <a target="_blank" href="https://www.reddit.com/submit?url=https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html&amp;title=https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html">
                        <li class="heateorSssSharingRound">
                            <i style="width:35px;height:35px;border-radius:999px;" alt="Reddit" title="Reddit" class="heateorSssSharing heateorSssRedditBackground" onclick="">
                            <img alt="du lịch" style="width: 35px;height: 35px;margin: 0px !important;" src="https://cdn4.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-reddit-circle-512.png">
                            <ss style="display:block;border-radius:999px;" class="heateorSssSharingSvg heateorSssRedditSvg"></ss>
                            </i>
                        </li>
                    </a>
                    <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html&amp;title=https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html&amp;source=https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html">
                        <li class="heateorSssSharingRound">
                            <i style="width:35px;height:35px;border-radius:999px;" alt="Linkedin" title="Linkedin" class="heateorSssSharing heateorSssLinkedinBackground" onclick="heateorSssPopup(&quot;http://www.linkedin.com/shareArticle?mini=true&amp;url=https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html;title=https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html;)">
                            <ss style="display:block;border-radius:999px;" class="heateorSssSharingSvg heateorSssLinkedinSvg"></ss>
                            </i>
                        </li>
                        <li class="heateorSssSharingRound">
                            <i style="width:35px;height:35px;border-radius:999px;" alt="Pinterest" title="Pinterest" class="heateorSssSharing heateorSssPinterestBackground" onclick="javascript:void( (function() {var e=document.createElement('script' );e.setAttribute('type','text/javascript' );e.setAttribute('charset','UTF-8' );e.setAttribute('src','//assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)})());">
                            <ss style="display:block;border-radius:999px;" class="heateorSssSharingSvg heateorSssPinterestSvg"></ss>
                            </i>
                        </li>
                    </a>
                    <a target="_blank" href="https://mewe.com/share?link=https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html">
                        <li class="heateorSssSharingRound">
                            <i style="width:35px;height:35px;border-radius:999px;" alt="MeWe" title="MeWe" class="heateorSssSharing heateorSssMeWeBackground" onclick="heateorSssPopup(&quot;https://mewe.com/share?link=https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html;)">
                            <ss style="display:block;border-radius:999px;" class="heateorSssSharingSvg heateorSssMeWeSvg"></ss>
                            </i>
                        </li>
                    </a>
                    <a target="_blank" href="https://mix.com/mixit?url=https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html">
                        <li class="heateorSssSharingRound">
                            <i style="width:35px;height:35px;border-radius:999px;" alt="Mix" title="Mix" class="heateorSssSharing heateorSssMixBackground" onclick="heateorSssPopup(&quot;https://mix.com/mixit?url=https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html;)">
                            <img alt="du lịch" style="width: 25px;height: 25px;margin: 5px !important;" src="https://images.squarespace-cdn.com/content/5a01d9004c0dbf037353c4d3/1510070616676-ECT3B16K7LK0V3NTFISM/mixlogomark_800x800px+%282%29.png?content-type=image%2Fpng">
                            <ss style="display:block;border-radius:999px;" class="heateorSssSharingSvg heateorSssMixSvg"></ss>
                            </i>
                        </li>
                    </a>
                    <li class="heateorSssSharingRound">
                        <i style="width:35px;height:35px;border-radius:999px;" alt="Whatsapp" title="Whatsapp" class="heateorSssSharing heateorSssWhatsappBackground">
                            <a href="https://web.whatsapp.com/send?text=https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html" rel="nofollow noopener" target="_blank">
                            <img alt="du lịch" style="width: 35px;height: 35px;margin: 0px !important;" src="https://cdn4.iconfinder.com/data/icons/social-media-2210/24/Whatsapp-512.png">
                            <ss style="display:block" class="heateorSssSharingSvg "></ss>
                            </a>
                        </i>
                    </li>
                </ul>
                <div class="heateorSssClear"></div>
                </div>
                <p>
                <div style="width:100%; overflow:hidden">
                <div style="float: left;margin-right: 5px; position: relative; z-index: 1001; line-height: 33px">
                    <div class="fb-like" data-href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false" data-colorscheme="dark"></div>
                </div>
                <div style="float: left;margin-right: 5px; position: relative; z-index: 1001; line-height: 33px">
                    <div class="fb-share-button" data-href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html" data-layout="button_count"></div>
                </div>
                <div style="float: left;margin-right: 5px; position: relative; z-index: 1001; line-height: 55px">
                    <div class="g-plusone" data-size="medium" data-href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html"></div>
                </div>
                <div class="zalo-share-button" data-href="" data-oaid="579745863508352884" data-layout="1" data-color="blue" data-customize=false></div>
                </div>
                </p>
                <p>
                <div class="fb-comments" data-href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html#configurator" data-numposts="10" data-width="100%" ></div>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-xs-12 bx-right-bar">
        <div class="box-support-right">
            <div class="support-center">
                <h3 class="title-support">Hỗ trợ trực tuyến</h3>
                <ul>
                <li>
                    <div class="lisup1"><span class="namesup">Mrs. Ngân: </span><span class="phonesup">(0913) 073 - 026</span></div>
                    <div class="blisup2">
                        <a href="#0913073026" class="zalo-icon"><img src="https://vietnamtravel.net.vn/assets/desktop/images/zalo.png" alt="a"></a>
                        <a href="skype:0913073026?chat" class="skype-icon"><img src="https://vietnamtravel.net.vn/assets/desktop/images/skype.png" alt="a"></a>
                        <a href="tel:(0913) 073 - 026" class="call-icon"><img src="https://vietnamtravel.net.vn/assets/desktop/images/call.png" alt="a"></a>
                    </div>
                </li>
                <li>
                    <div class="lisup1"><span class="namesup">Miss. Ngọc: </span><span class="phonesup">(098) 444 - 1944</span></div>
                    <div class="blisup2">
                        <a href="#0984441944" class="zalo-icon"><img src="https://vietnamtravel.net.vn/assets/desktop/images/zalo.png" alt="a"></a>
                        <a href="skype:0913780633?chat" class="skype-icon"><img src="https://vietnamtravel.net.vn/assets/desktop/images/skype.png" alt="a"></a>
                        <a href="tel:(098) 444 - 1944" class="call-icon"><img src="https://vietnamtravel.net.vn/assets/desktop/images/call.png" alt="a"></a>
                    </div>
                </li>
                <li>
                    <div class="lisup1"><span class="namesup">Miss. Hằng: </span><span class="phonesup">(0904) 577- 548</span></div>
                    <div class="blisup2">
                        <a href="#0904577548" class="zalo-icon"><img src="https://vietnamtravel.net.vn/assets/desktop/images/zalo.png" alt="a"></a>
                        <a href="skype:0904577548?chat" class="skype-icon"><img src="https://vietnamtravel.net.vn/assets/desktop/images/skype.png" alt="a"></a>
                        <a href="tel:(0904) 577- 548" class="call-icon"><img src="https://vietnamtravel.net.vn/assets/desktop/images/call.png" alt="a"></a>
                    </div>
                </li>
                </ul>
            </div>
        </div>
        <div class="w100 fl top-15 box-cldl">
            <div class="w100 fl tit-child-larg">
                <h2>Cẩm nang du lịch</h2>
            </div>
            <ul class="ul-lst-article-bar">
                <li><a href="https://vietnamtravel.net.vn/vi/ct/100-10-diem-den-duoc-nguoi-viet-yeu-thich-nhat-trong-nam-2018.html">10 điểm đến được người Việt yêu thích nhất trong năm 2018</a></li>
                <li><a href="https://vietnamtravel.net.vn/vi/ct/99-5-diem-du-lich-nuoc-ngoai-gia-ca-hop-ly-danh-cho-nguoi-viet-nam.html">5 điểm du lịch nước ngoài giá cả hợp lý dành cho người Việt Nam</a></li>
                <li><a href="https://vietnamtravel.net.vn/vi/ct/98-nhung-dieu-can-biet-truoc-khi-du-lich-den-sri-lanka.html">Những điều cần biết trước khi du lịch đến Sri Lanka</a></li>
                <li><a href="https://vietnamtravel.net.vn/vi/ct/97-nhung-dieu-luu-y-khi-di-du-lich-nhat-ban.html">Những điều lưu ý khi đi du lịch Nhật Bản</a></li>
                <li><a href="https://vietnamtravel.net.vn/vi/ct/96-cam-nang-di-du-lich-da-nang-tat-tan-tat-tu-a-z-vo-cung-re.html">Cẩm nang đi du lịch Đà Nẵng tất tần tật từ A -> Z vô cùng rẻ</a></li>
                <li><a href="https://vietnamtravel.net.vn/vi/ct/95-cam-nang-du-lich-thai-lan-nhung-dieu-ban-can-biet.html">Cẩm nang du lịch Thái Lan – Những điều bạn cần biết</a></li>
                <li><a href="https://vietnamtravel.net.vn/vi/ct/94-cam-nang-du-lich-bhutan-nhung-dieu-quan-trong-nhat-dinh-phai-biet.html">Cẩm nang du lịch Bhutan – Những điều quan trọng nhất định phải biết</a></li>
                <li><a href="https://vietnamtravel.net.vn/vi/ct/93-cam-nang-cho-chuyen-du-lich-phu-quoc-hon-dao-thien-duong-giua-long-bien-xanh.html">Cẩm nang cho chuyến du lịch Phú Quốc - Hòn đảo thiên đường giữa lòng biển xanh</a></li>
                <li><a href="https://vietnamtravel.net.vn/vi/ct/92-net-doc-dao-cua-lang-chai-ca-trich-phu-quoc.html">Nét độc đáo của làng chài cá trích, Phú Quốc</a></li>
                <li><a href="https://vietnamtravel.net.vn/vi/ct/91-kham-pha-thien-nhien-tuoi-dep-o-go-gang-tp-vung-tau.html">Khám phá thiên nhiên tươi đẹp ở Gò Găng – TP. Vũng Tàu</a></li>
            </ul>
        </div>
        <div class="w100 fl box-lst-tour-sidebar">
            <div class="w100 fl tit-child-larg">
                <h2>Tour Liên Quan</h2>
            </div>
            <div class="clear"></div>
            <ul class="ul-lst-t-right">
                <li>
                <div class="w100 fl bx-wap-pr-item" style="height: 440px;">
                    <div class="clearfix box-wap-imgpr">
                        <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/471-tour-4-ngay-3-dem-di-het-20-dia-diem-hot-nhat-tai-quy-nhon-phu-yen.html">
                            <img src="/timthumb.php?src=/media/images/Quy%20Nhon%20Phu%20Yen/logo-quy-nhon-phu-yen.jpg&w=402&h=262&q=90" class="list-relation-pr img-default" alt="tour" >
                            <img src="https://vietnamtravel.net.vn/assets/desktop/images/event/merry-christmas-1.png" class="img-event-giang-sinh">                <!--<img src="/public/media/images/logo/logo-ghim-anh.jpg" class="img-ghim-anh">-->
                        </a>
                    </div>
                    <div class="clear"></div>
                    <h4><a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/471-tour-4-ngay-3-dem-di-het-20-dia-diem-hot-nhat-tai-quy-nhon-phu-yen.html">Tour 4 ngày 3 đêm đi hết 20 địa điểm “Hot” nhất tại Quy Nhơn – Phú Yên</a></h4>
                    <div class="clear"></div>
                    <div class="group-calendar w100 fl">
                        <div class="col-md-6 col-xs-7 date-start">
                            <span class="lst-icon1"><i class="fa fa-calendar"></i> </span>
                            <span>
                            Thứ 2, Thứ 3, Thứ 4, Chủ nhật Hàng Tuần                                    </span>
                        </div>
                        <div class="col-md-6 col-xs-5 date-range">
                            <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> 4 Ngày</span>
                        </div>
                    </div>
                    <div class="group-localtion w100 fl">
                        <div class="col-md-6 col-xs-7 map-maker">
                            <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> Khởi hành 63 tỉnh/TP</span>
                        </div>
                        <div class="col-md-6 col-xs-5 numner-sit">
                            <span class="lst-icon1"><i class="fa fa-users"></i></span><span> Số chỗ: 14</span>
                        </div>
                    </div>
                    <div class="note-attack"><i class="fa fa-bell" aria-hidden="true"></i> Khuyến mãi 200K cho nhóm khách 5 người trở lên</div>
                    <div class="group-book w100 fl">
                        <span class="price-sell">5.990.000 VNĐ </span>
                        <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/471-tour-4-ngay-3-dem-di-het-20-dia-diem-hot-nhat-tai-quy-nhon-phu-yen.html" class="link-book">Xem chi tiết</a>
                    </div>
                </div>
                </li>
                <li>
                <div class="w100 fl bx-wap-pr-item" style="height: 440px;">
                    <div class="clearfix box-wap-imgpr">
                        <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html">
                            <img src="/timthumb.php?src=/media/images/Quy%20Nhon%20Phu%20Yen/logo-ghenh-da-dia.jpg&w=402&h=262&q=90" class="list-relation-pr img-default" alt="tour" >
                            <img src="https://vietnamtravel.net.vn/assets/desktop/images/event/merry-christmas-1.png" class="img-event-giang-sinh">                <!--<img src="/public/media/images/logo/logo-ghim-anh.jpg" class="img-ghim-anh">-->
                        </a>
                    </div>
                    <div class="clear"></div>
                    <h4><a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html">Tour Hot nhất Hè 2023 Quy Nhơn - Phú Yên (Xứ Nẫu đẹp nhất Việt Nam)</a></h4>
                    <div class="clear"></div>
                    <div class="group-calendar w100 fl">
                        <div class="col-md-6 col-xs-7 date-start">
                            <span class="lst-icon1"><i class="fa fa-calendar"></i> </span>
                            <span>
                            Hàng ngày                                    </span>
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
                        <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html" class="link-book">Xem chi tiết</a>
                    </div>
                </div>
                </li>
                <li>
                <div class="w100 fl bx-wap-pr-item" style="height: 440px;">
                    <div class="clearfix box-wap-imgpr">
                        <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/464-du-lich-quy-nhon-phu-yen-tour-tron-goi-dac-sac-nhat.html">
                            <img src="/timthumb.php?src=/media/images/Quy%20Nhon%20Phu%20Yen/logo_viet-nam-travel.jpg&w=402&h=262&q=90" class="list-relation-pr img-default" alt="tour" >
                            <img src="https://vietnamtravel.net.vn/assets/desktop/images/event/tet.png" class="img-event-tour-tet"><img src="https://vietnamtravel.net.vn/assets/desktop/images/event/new-icon.png" class="img-event-moi">                <!--<img src="/public/media/images/logo/logo-ghim-anh.jpg" class="img-ghim-anh">-->
                        </a>
                    </div>
                    <div class="clear"></div>
                    <h4><a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/464-du-lich-quy-nhon-phu-yen-tour-tron-goi-dac-sac-nhat.html">Du lịch Quy Nhơn - Phú Yên Tour trọn gói, đặc sắc nhất</a></h4>
                    <div class="clear"></div>
                    <div class="group-calendar w100 fl">
                        <div class="col-md-6 col-xs-7 date-start">
                            <span class="lst-icon1"><i class="fa fa-calendar"></i> </span>
                            <span>
                            Thứ 2, Thứ 3, Thứ 4 Hàng Tuần                                    </span>
                        </div>
                        <div class="col-md-6 col-xs-5 date-range">
                            <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> 4 Ngày</span>
                        </div>
                    </div>
                    <div class="group-localtion w100 fl">
                        <div class="col-md-6 col-xs-7 map-maker">
                            <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> Khởi hành từ Hà Nội - TP.HCM</span>
                        </div>
                        <div class="col-md-6 col-xs-5 numner-sit">
                            <span class="lst-icon1"><i class="fa fa-users"></i></span><span> Số chỗ: 13</span>
                        </div>
                    </div>
                    <div class="note-attack"></div>
                    <div class="group-book w100 fl">
                        <span class="price-sell">5.590.000 VNĐ </span>
                        <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/464-du-lich-quy-nhon-phu-yen-tour-tron-goi-dac-sac-nhat.html" class="link-book">Xem chi tiết</a>
                    </div>
                </div>
                </li>
                <li>
                <div class="w100 fl bx-wap-pr-item" style="height: 440px;">
                    <div class="clearfix box-wap-imgpr">
                        <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/463-tour-du-lich-quy-nhon-3-ngay-tron-goi-dac-sac-nhat.html">
                            <img src="/timthumb.php?src=/media/images/Quy%20Nhon%20Phu%20Yen/thap-doi.png&w=402&h=262&q=90" class="list-relation-pr img-default" alt="tour" >
                            <img src="https://vietnamtravel.net.vn/assets/desktop/images/event/merry-christmas-1.png" class="img-event-giang-sinh"><img src="https://vietnamtravel.net.vn/assets/desktop/images/event/new-icon.png" class="img-event-moi">                <!--<img src="/public/media/images/logo/logo-ghim-anh.jpg" class="img-ghim-anh">-->
                        </a>
                    </div>
                    <div class="clear"></div>
                    <h4><a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/463-tour-du-lich-quy-nhon-3-ngay-tron-goi-dac-sac-nhat.html">Tour Du lịch Quy nhơn 3 ngày trọn gói, đặc sắc nhất</a></h4>
                    <div class="clear"></div>
                    <div class="group-calendar w100 fl">
                        <div class="col-md-6 col-xs-7 date-start">
                            <span class="lst-icon1"><i class="fa fa-calendar"></i> </span>
                            <span>
                            Thứ 2, Thứ 3, Thứ 4 Hàng Tuần                                    </span>
                        </div>
                        <div class="col-md-6 col-xs-5 date-range">
                            <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> 3 Ngày</span>
                        </div>
                    </div>
                    <div class="group-localtion w100 fl">
                        <div class="col-md-6 col-xs-7 map-maker">
                            <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> Khởi hành từ Hà Nội - TP.HCM</span>
                        </div>
                        <div class="col-md-6 col-xs-5 numner-sit">
                            <span class="lst-icon1"><i class="fa fa-users"></i></span><span> Số chỗ: 22</span>
                        </div>
                    </div>
                    <div class="note-attack"><i class="fa fa-bell" aria-hidden="true"></i> Chi phí đi xuồng một chiều trên sông Kut – Tham quan Hầm Hô</div>
                    <div class="group-book w100 fl">
                        <span class="price-sell">4.990.000 VNĐ </span>
                        <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/463-tour-du-lich-quy-nhon-3-ngay-tron-goi-dac-sac-nhat.html" class="link-book">Xem chi tiết</a>
                    </div>
                </div>
                </li>
            </ul>
        </div>
    </div>
    </div>
</div>
<style>
    ul.heateor_sss_sharing_ul {
    list-style: none!important;
    padding-left: 0!important;
    }
    ul.heateor_sss_sharing_ul li {
    float: left!important;
    margin: 0!important;
    padding: 0!important;
    list-style: none!important;
    border: none!important;
    clear: none!important;
    }
    .heateorSssSharing {
    float: left;
    border: none;
    }
    .heateorSssSharing, .heateorSssSharingButton {
    display: block;
    cursor: pointer;
    margin: 2px;
    }
    .heateorSssSharingSvg {
    width: 100%;
    height: 100%;
    }
    .heateorSssTwitterBackground {
    background-color: #55acee;
    }
    .heateorSssTwitterSvg {
    background: url('data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22100%25%22%20height%3D%22100%25%22%20viewBox%3D%22-4%20-4%2039%2039%22%3E%0A%3Cpath%20d%3D%22M28%208.557a9.913%209.913%200%200%201-2.828.775%204.93%204.93%200%200%200%202.166-2.725%209.738%209.738%200%200%201-3.13%201.194%204.92%204.92%200%200%200-3.593-1.55%204.924%204.924%200%200%200-4.794%206.049c-4.09-.21-7.72-2.17-10.15-5.15a4.942%204.942%200%200%200-.665%202.477c0%201.71.87%203.214%202.19%204.1a4.968%204.968%200%200%201-2.23-.616v.06c0%202.39%201.7%204.38%203.952%204.83-.414.115-.85.174-1.297.174-.318%200-.626-.03-.928-.086a4.935%204.935%200%200%200%204.6%203.42%209.893%209.893%200%200%201-6.114%202.107c-.398%200-.79-.023-1.175-.068a13.953%2013.953%200%200%200%207.55%202.213c9.056%200%2014.01-7.507%2014.01-14.013%200-.213-.005-.426-.015-.637.96-.695%201.795-1.56%202.455-2.55z%22%20fill%3D%22%23fff%22%3E%3C%2Fpath%3E%0A%3C%2Fsvg%3E') no-repeat center center;
    }
    .heateorSssLinkedinBackground {
    background-color: #0077B5;
    }
    .heateorSssLinkedinSvg {
    background: url('data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22100%25%22%20height%3D%22100%25%22%20viewBox%3D%22-2%20-2%2035%2039%22%3E%3Cpath%20d%3D%22M6.227%2012.61h4.19v13.48h-4.19V12.61zm2.095-6.7a2.43%202.43%200%200%201%200%204.86c-1.344%200-2.428-1.09-2.428-2.43s1.084-2.43%202.428-2.43m4.72%206.7h4.02v1.84h.058c.56-1.058%201.927-2.176%203.965-2.176%204.238%200%205.02%202.792%205.02%206.42v7.395h-4.183v-6.56c0-1.564-.03-3.574-2.178-3.574-2.18%200-2.514%201.7-2.514%203.46v6.668h-4.187V12.61z%22%20fill%3D%22%23fff%22%2F%3E%3C%2Fsvg%3E') no-repeat center center;
    }
    .heateorSssPinterestBackground {
    background-color: #CC2329;
    }
    .heateorSssPinterestSvg {
    background: url('data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22100%25%22%20height%3D%22100%25%22%20viewBox%3D%22-2%20-2%2035%2035%22%3E%3Cpath%20fill%3D%22%23fff%22%20d%3D%22M16.539%204.5c-6.277%200-9.442%204.5-9.442%208.253%200%202.272.86%204.293%202.705%205.046.303.125.574.005.662-.33.061-.231.205-.816.27-1.06.088-.331.053-.447-.191-.736-.532-.627-.873-1.439-.873-2.591%200-3.338%202.498-6.327%206.505-6.327%203.548%200%205.497%202.168%205.497%205.062%200%203.81-1.686%207.025-4.188%207.025-1.382%200-2.416-1.142-2.085-2.545.397-1.674%201.166-3.48%201.166-4.689%200-1.081-.581-1.983-1.782-1.983-1.413%200-2.548%201.462-2.548%203.419%200%201.247.421%202.091.421%202.091l-1.699%207.199c-.505%202.137-.076%204.755-.039%205.019.021.158.223.196.314.077.13-.17%201.813-2.247%202.384-4.324.162-.587.929-3.631.929-3.631.46.876%201.801%201.646%203.227%201.646%204.247%200%207.128-3.871%207.128-9.053.003-3.918-3.317-7.568-8.361-7.568z%22%2F%3E%3C%2Fsvg%3E') no-repeat center center;
    }
    .heateorSssMeWeBackground {
    background-color: #007da1;
    }
    .heateorSssMeWeSvg {
    background: url('data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%22-3%20-3%2038%2038%22%3E%3Cg%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M9.636%2010.427a1.22%201.22%200%201%201-2.44%200%201.22%201.22%200%201%201%202.44%200zM15.574%2010.431a1.22%201.22%200%200%201-2.438%200%201.22%201.22%200%201%201%202.438%200zM22.592%2010.431a1.221%201.221%200%201%201-2.443%200%201.221%201.221%200%200%201%202.443%200zM29.605%2010.431a1.221%201.221%200%201%201-2.442%200%201.221%201.221%200%200%201%202.442%200zM3.605%2013.772c0-.471.374-.859.859-.859h.18c.374%200%20.624.194.789.457l2.935%204.597%202.95-4.611c.18-.291.43-.443.774-.443h.18c.485%200%20.859.387.859.859v8.113a.843.843%200%200%201-.859.845.857.857%200%200%201-.845-.845V16.07l-2.366%203.559c-.18.276-.402.443-.72.443-.304%200-.526-.167-.706-.443l-2.354-3.53V21.9c0%20.471-.374.83-.845.83a.815.815%200%200%201-.83-.83v-8.128h-.001zM14.396%2014.055a.9.9%200%200%201-.069-.333c0-.471.402-.83.872-.83.415%200%20.735.263.845.624l2.23%206.66%202.187-6.632c.139-.402.428-.678.859-.678h.124c.428%200%20.735.278.859.678l2.187%206.632%202.23-6.675c.126-.346.415-.609.83-.609.457%200%20.845.361.845.817a.96.96%200%200%201-.083.346l-2.867%208.032c-.152.43-.471.706-.887.706h-.165c-.415%200-.721-.263-.872-.706l-2.161-6.328-2.16%206.328c-.152.443-.47.706-.887.706h-.165c-.415%200-.72-.263-.887-.706l-2.865-8.032z%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E') no-repeat center center;
    }
    .heateorSssMixBackground {
    background-color: darkgray !important;
    }
    .heateorSssWhatsappBackground {
    background-color: #55EB4C;
    }
</style>
@endsection
