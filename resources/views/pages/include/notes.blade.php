<div class="container box-post-home top-15">
    <div class="row">
        <div class="col-md-4 col-xs-12 bx-child-ph bx-child-ph1">
            <div class="w100 fl tit-child-larg">
                <h2 class="not-icon">Cẩm nang du lịch</h2>
            </div>
            <div class="w100 fl item-lst-pos1">
                <a href="#" class="">
                    <img src="{{asset('fontend/imgs/thumb_9394578.jpg')}}" alt="10 điểm đến được người Việt yêu thích nhất trong năm 2018">
                </a>
                <a href="#" class="ctlist-right">
                    <h4>10 điểm đến được người Việt yêu thích nhất trong năm 2018</h4>
                    <p>Theo số liệu thống k&ecirc; số kh&aacute;ch du lịch của tổng cục du lịch,10 điểm đến được người Việt y&ecirc;u th&iacute;ch nhất trong năm...</p>
                </a>
            </div>
            <div class="w100 fl item-lst-pos1">
                <a href="#" class="">
                    <img src="{{asset('fontend/imgs/da-nang.jpg')}}" alt="Cẩm nang đi du lịch Đà Nẵng tất tần tật từ A -> Z vô cùng rẻ">
                </a>
                <a href="#" class="ctlist-right">
                    <h4>Cẩm nang đi du lịch Đà Nẵng tất tần tật từ A -> Z vô cùng rẻ</h4>
                    <p>Đ&agrave; Nẵng&nbsp;&ndash; Th&agrave;nh phố của những t&acirc;m hồn đẹp v&agrave; thơ mộng với những danh lam thắng cảnh nổi tiếng. Kh&ocirc;ng...</p>
                </a>
            </div>
        </div>
        <div class="col-md-4 col-xs-12 bx-child-ph bx-child-ph2">
            <div class="w100 fl tit-child-larg">
                <h2 class="not-icon">Tai sao chọn Vietnamtravel</h2>
            </div>
            <div class="w100 fl item-lst-pos2">
                <a href="#" class=""><img src="{{asset('fontend/imgs/Untitled-1.jpg')}}" alt="Tốp 10 công ty du lịch hàng đầu  hàng đầu"></a>
                <a href="#" class="ctlist-right">
                    <h4>Top 10 công ty du lịch hàng đầu hàng đầu</h4>
                    <p>Vietnam Travel&nbsp;được vinh danh tại giải thưởng&nbsp;du lịch&nbsp;danhh gi&aacute; World Travel Awards với danh hiệu Nh&agrave;...</p>
                </a>
            </div>
            <div class="w100 fl item-lst-pos2">
                <a href="#" class=""><img src="{{asset('fontend/imgs/18_kinhnghiem_vn.jpg')}}" alt="Hơn 18 năm kinh nghiệm"></a>
                <a href="#" class="ctlist-right">
                    <h4>Hơn 18 năm kinh nghiệm</h4>
                    <p>Với 18 năm&nbsp;kinh nghiệm&nbsp;trong lĩnh vực lữ h&agrave;nh, ... mong muốn mang đến cho kh&aacute;ch h&agrave;ng những chuyến...</p>
                </a>
            </div>
            <div class="w100 fl item-lst-pos2">
                <a href="#" class=""><img src="{{asset('fontend/imgs/uytin_24_7.jpg')}}" alt="Dịch vụ 24/7"></a>
                <a href="#" class="ctlist-right">
                    <h4>Dịch vụ 24/7</h4>
                    <p>Đội ngũ c&aacute;n bộ nh&acirc;n vi&ecirc;n nhiệt t&igrave;nh&nbsp;v&agrave; s&aacute;ng tạo. Phục vụ kh&aacute;ch h&agrave;ng tận...</p>
                </a>
            </div>
        </div>
        <div class="col-md-4 col-xs-12 bx-child-ph bx-child-ph3">
            <div class="w100 fl tit-child-larg">
                <h2 class="not-icon">Hình ảnh chuyến đi</h2>
            </div>
            <script>
                $(document).ready(function() {
                    $('.lst-thumb-video-home li img').click(function() {
                        var srcVideo = $(this).attr('src-video');
                        $('#iframe_video').attr('src', srcVideo);
                    });
                });
            </script>
            <div class="video-play w100 fl top-15">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe id="iframe_video" class="embed-responsive-item" src="https://www.youtube.com/embed/yWM-oOLOYNs?rel=0"></iframe>
                </div>
            </div>
            <ul class="lst-thumb-video-home top-15" style="">
                <li><img src="{{asset('fontend/imgs/thai-lan.png')}}" alt="2" src-video="https://www.youtube.com/embed/yWM-oOLOYNs?rel=0"></li>
                <li><img src="{{asset('fontend/imgs/singapo-malaysia.jpg')}}" alt="2" src-video="https://www.youtube.com/embed/ZjtJIi39r4U?rel=0"></li>
                <li><img src="{{asset('fontend/imgs/da-nang.jpg')}}" alt="2" src-video="https://www.youtube.com/embed/YgrvXPK4u4s?rel=0"></li>
            </ul>
        </div>
    </div>
</div>
