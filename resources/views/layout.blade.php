<!-- Đánh dấu JSON-LD được tạo bởi Trình trợ giúp đánh dấu dữ liệu có cấu trúc của Google. -->
<script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "Article",
      "name" : "THƯỢNG",
      "author" : {
        "@type" : "Person",
        "name" : "–"
      },
      "image" : "https://vietnamtourism.net.vn/frontend/images/event/tet.png",
      "articleBody" : "CHƯƠNG TRÌNH DU LỊCH CHÂU ÂU TỪ HÀ NỘI: PHÁP – THỤY SỸ - Ý – VATICAN ( 10 NGÀY 9 ĐÊM)</A></DIV>\n        <DIV class=\"row\"><B class=\"font_text_cap\">Thời gian:</B>  10 Ngày </DIV>\n        <DIV class=\"row\"><B class=\"font_text_cap\">Khởi hành từ:</B> \n                            Khởi hành từ Hà Nội\n                    </DIV>\n        <DIV class=\"row\"><B class=\"font_text_cap\">Ngày khởi hành:</B>\n                                            25/05; 13/07; 24/08; 25/09; 10/10;                     \n        </DIV>\n        <DIV class=\"row\"><B class=\"font_text_cap\">Giá cũ:</B> <SPAN class=\"tour-oldprice\">57.900.000 VNĐ</SPAN></DIV>\n        <DIV class=\"row\"><B class=\"font_text_cap\">Giá KM:</B> <SPAN class=\"tour-newprice\">57.900.000 VNĐ"
    }
 </script>
 <!DOCTYPE html>
 <html lang="en">
    <head>
       <meta name="description"  content="text/html; charset=utf-8; Vietnam Travel chuyên tổ chức các tour Du lịch trong nước, Du lịch nước ngoài. Khởi hành đúng lịch; dịch vụ hạng sang; giá tốt nhất thị trường; đã đi là thích." http-equiv="Content-Type" >
       <meta content="text/html; charset=utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">

       {{-- Thanh Tab --}}
       <link type="image/x-icon" href="{{ asset('fontend/imgs/ico_BookingTravel.ico') }}" rel="shortcut icon" />
       <title>BookingTravel - Tận hưởng niềm vui Việt</title>

       {{-- Hỗ trợ search trên mạng --}}
       {{-- Nội dung trong Web --}}
       <meta name="keywords" content="Vietnamtravel, Công Ty Du Lịch Vietnamtravel" />
       {{-- Tác giả Web --}}
       <meta name="author" content="vietnamtravel.net.vn">
       {{-- Hỗ trợ share ở nền tảng MXH --}}
       <meta property="og:site_name" 	content="Du lịch Việt nam - VietnamTravel" />
       {{-- Khi share có kèm theo hình ở link --}}
       <meta property="og:image" 		content=""/>
       {{-- Tiêu đề của bài share --}}
       <meta property="og:title" 	  	content="Du lịch Việt nam - VietnamTravel" />
       {{-- Mô tả ngắn của bài share --}}
       <meta property="og:description" content="Booking Travel được vinh danh tại giải thưởng du lịch danhh giá World Travel Awards với danh hiệu Nhà điều hành tour trọn gói hàng đầu thế giới, dịch vụ uy tín, khởi hành đúng lịch; dịch vụ hạng sang; giá tốt nhất thị trường; đã đi là thích." />
       {{-- Bài share sẽ có link URL tương ứng --}}
       <meta property="og:url" 		content="{{route('home')}}" />
       {{-- Chỉ định nội dung bài share là kiểu website, bài viết, sản phẩm,... --}}
       <meta property="og:type" 		content="website" />

       <link href="{{asset('fontend/css/jquery-ui.min.css')}}" rel="stylesheet">
       <link href="{{asset('fontend/css/bootstrap.min.css')}}" rel="stylesheet">
       <link href="{{asset('fontend/css/owl.carousel.css')}}" rel="stylesheet">
       <link href="{{asset('fontend/css/menu-mobile.min.css')}}" rel="stylesheet" type="text/css">
       <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
       <script src="https://kit.fontawesome.com/6e6ca8b616.js" crossorigin="anonymous"></script>
       <link href="{{asset('fontend/css/slider.css')}}" rel="stylesheet" type="text/css">
       <link href="{{asset('fontend/css/main.css')}}" rel="stylesheet">
       <link href="{{asset('fontend/css/responsive.css')}}" rel="stylesheet">
       <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>
       <script src="{{asset('fontend/js/jquery-1.11.1.min.js')}}"></script>
       <script src="{{asset('fontend/js/jquery-ui.js')}}"></script>
       <script src="{{asset('fontend/js/bootstrap.min.js')}}"></script>
       <script src="{{asset('fontend/js/owl.carousel.min.js')}}" type="text/javascript"></script>
       <script src="https://apis.google.com/js/platform.js" async defer></script>
       <link rel="stylesheet" href="{{asset('fontend/css/default.css')}}" type="text/css" media="screen" />
       <link rel="stylesheet" href="{{asset('fontend/css/light.css')}}" type="text/css" media="screen" />
       <link rel="stylesheet" href="{{asset('fontend/css/dark.css')}}" type="text/css" media="screen" />
       <link rel="stylesheet" href="{{asset('fontend/css/bar.css')}}" type="text/css" media="screen" />
       <link rel="stylesheet" href="{{asset('fontend/css/nivo-slider.css')}}" type="text/css" media="screen" />

       {{-- DataTables --}}
       <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.css" />
       <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
       <!-- Js menu mobile-->
       <script>
          $(document).ready(function(e) {
              $(".arrown_menu_accordion").click(function() {
                  var val=$(this).attr("val");
                  $("#"+val).toggle();
              });
          });
       </script>
       <script src="{{asset('fontend/js/frame_script.js')}}"></script>
       <script type="text/javascript" src="{{asset('fontend/js/jquery.nivo.slider.js')}}"></script>
       <script type="text/javascript">
          $(window).load(function() {
              $('#slider').nivoSlider();
          });
       </script>
       <script type="application/ld+json">
          "@context" : "https://schema.org/"
       </script>
       <script type="application/ld+json">
          {
              "@context": "http:\/\/schema.org",
              "@type": "LocalBusiness",
              "name": "Spatie",
              "email": "info@spatie.be",
              "contactPoint": {
                  "@type": "ContactPoint",
                  "areaServed": "Worldwide"
              }
          }
       </script>
       <script type="text/javascript">
          jQuery(document).ready(function () {
              $(".owl-carousel5").owlCarousel({
                  pagination: false,
                  navigation: true,
                  items: 2,
                  autoPlay:true,
                  slideMargin:10,
                  addClassActive: true,
                  itemsCustom : [
                      [0, 1],
                      [320, 1],
                      [480, 1],
                      [660, 2],
                      [700, 2],
                      [768, 2],
                      [992, 2],
                      [1024, 2],
                      [1200, 2],
                      [1400, 2],
                      [1600, 2]
                  ]
              });
          });
       </script>
       <!-- Global site tag (gtag.js) - Google Analytics -->
       <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128213416-1"></script>
       <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-128213416-1');
          gtag('config', 'AW-882166916');
                    gtag('config', 'AW-963923892');

       </script>
       <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
       <script>
          (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-6019637857371569",
            enable_page_level_ads: true
          });
       </script>
    </head>
    <body>
       <script>
          window.fbAsyncInit = function() {
            FB.init({
              appId            : '238563550019858',
              autoLogAppEvents : true,
              xfbml            : true,
              version          : 'v2.12'
            });
          };
          (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
       </script>
       <div class="fb-customerchat"
          page_id="374978409570530" greeting_dialog_display="hide">
       </div>
       {{-- Layout for Mobile --}}
       <div class="menu_mobile" style="visibility: hidden;">
          <span class="close_menu_mobile"></span>
          <div class="menu_accordion">
             <ul class="ul_ma_1">
                <li>
                   <a href="{{route('tour', ['du-lich-trong-nuoc'])}}">Du lịch trong nước</a>
                   <i class="arrown_menu_accordion" val="sub_ac_530"></i>
                   <i class="fa fa-angle-down arrown_menu_accordion" aria-hidden="true" val="sub_ac_530"></i>
                   <ul class="ul_ma_2" id="sub_ac_530" style="display:none;">
                      <li>
                         <a href="#">Du lịch Hạ Long Cát Bà</a>
                      </li>
                      <li>
                         <a href="#">Du lịch Hà Nội Sapa Lào Cai</a>
                      </li>
                      <li>
                         <a href="#">Du lịch Hà Nội Hạ Long Sapa</a>
                      </li>
                      <li>
                         <a href="#">Du lịch Quy Nhơn Phú Yên</a>
                      </li>
                      <li>
                         <a href="#">Du lịch Đà Nẵng Hội An Huế</a>
                      </li>
                      <li>
                         <a href="#">Du lịch Nha Trang Đà Lạt</a>
                      </li>
                      <li>
                         <a href="#">Du Lịch Vũng Tàu Côn Đảo</a>
                      </li>
                      <li>
                         <a href="#">Du lịch đảo ngọc Phú Quốc</a>
                      </li>
                      <li>
                         <a href="#">Du lịch Sài Gòn và Miền Tây</a>
                      </li>
                      <li>
                         <a href="#">Du lịch Đông Bắc, Tây Bắc</a>
                      </li>
                      <li>
                         <a href="#">Du lịch Phan Thiết</a>
                      </li>
                      <li>
                         <a href="#">Du lịch Cửa Lò Làng sen</a>
                      </li>
                      <li>
                         <a href="#">Du lịch Ban Mê Thuột</a>
                      </li>
                   </ul>
                </li>
                <li>
                   <a href="{{ route('tour', ['du-lich-nuoc-ngoai']) }}">Du lịch nước ngoài</a>
                   <i class="arrown_menu_accordion" val="sub_ac_532"></i>
                   <i class="fa fa-angle-down arrown_menu_accordion" aria-hidden="true" val="sub_ac_532"></i>
                   <ul class="ul_ma_2" id="sub_ac_532" style="display:none;">
                      <li>
                         <a href="#">Du lịch Thái Lan</a>
                      </li>
                      <li>
                         <a href="#">Du lịch Campuchia</a>
                      </li>
                      <li>
                         <a href="#">Du lịch Singapore Malaysia</a>
                      </li>
                      <li>
                         <a href="#">Du lịch Myanmar</a>
                      </li>
                      <li>
                         <a href="#">Du lịch Trung Quốc</a>
                      </li>
                      <li>
                         <a href="#l">Du lịch Hồng Kông</a>
                      </li>
                      <li>
                         <a href="#">Du lịch Đài Loan</a>
                      </li>
                      <li>
                         <a href="#">Du lịch Lào</a>
                      </li>
                      <li>
                         <a href="#">Du lịch Nhật Bản</a>
                      </li>
                      <li>
                         <a href="#">Du lịch Hàn Quốc</a>
                      </li>
                      <li>
                         <a href="#">Du lịch Châu Âu</a>
                      </li>
                      <li>
                         <a href="#">Du Lịch Úc</a>
                      </li>
                      <li>
                         <a href="#">Du lịch Maldives</a>
                      </li>
                      <li>
                         <a href="#">Du lịch Dubai</a>
                      </li>
                   </ul>
                </li>
                <li>
                   <a href="#">Kiểu tour du lịch</a>
                   <i class="arrown_menu_accordion" val="sub_ac_615"></i>
                   <i class="fa fa-angle-down arrown_menu_accordion" aria-hidden="true" val="sub_ac_615"></i>
                   <ul class="ul_ma_2" id="sub_ac_615" style="display:none;">
                      <li>
                         <a href="#">Tour Hè 2024</a>
                      </li>
                      <li>
                         <a href="#">Tour các lễ hội ở Việt Nam</a>
                      </li>
                      <li>
                         <a href="#">Tour du lịch xuyên Việt</a>
                      </li>
                      <li>
                         <a href="#">Du lịch tuần trăng mật</a>
                      </li>
                      <li>
                         <a href="#">Tour du lịch cuối tuần</a>
                      </li>
                      <li>
                         <a href="#">Du lịch Team Building</a>
                      </li>
                      <li>
                         <a href="#">Chùm tour du lịch Biển</a>
                      </li>
                   </ul>
                </li>
                <li>
                   <a href="#">Lịch khởi hành</a>
                   <i class="arrown_menu_accordion" val="sub_ac_547"></i>
                   <i class="fa fa-angle-down arrown_menu_accordion" aria-hidden="true" val="sub_ac_547"></i>
                   <ul class="ul_ma_2" id="sub_ac_547" style="display:none;">
                      <li>
                         <a href="/vi/danh-sach-lich-trinh-tour/1-du-lich-trong-nuoc.html">Tour trong nước</a>
                      </li>
                      <li>
                         <a href="/vi/danh-sach-lich-trinh-tour/84-du-lich-nuoc-ngoai.html">Tour nước ngoài</a>
                      </li>
                   </ul>
                </li>
                <li>
                   <a href="/vi/loai-tour/30-4/all.html">Tour Hè 2023</a>
                   <i class="arrown_menu_accordion" val="sub_ac_508"></i>
                   <i class="fa fa-angle-down arrown_menu_accordion" aria-hidden="true" val="sub_ac_508"></i>
                   <ul class="ul_ma_2" id="sub_ac_508" style="display:none;">
                      <li>
                         <a href="/vi/loai-tour/30-4/1.html">Du lịch trong nước</a>
                      </li>
                      <li>
                         <a href="/vi/loai-tour/30-4/84.html">Du lịch Nước Ngoài</a>
                      </li>
                   </ul>
                </li>
                <li>
                   <a href="#">Cẩm nang du lịch</a>
                </li>
                <li>
                   <a href="#">Dịch vụ</a>
                   <i class="arrown_menu_accordion" val="sub_ac_507"></i>
                   <i class="fa fa-angle-down arrown_menu_accordion" aria-hidden="true" val="sub_ac_507"></i>
                   <ul class="ul_ma_2" id="sub_ac_507" style="display:none;">
                      <li>
                         <a href="/vi/danh-sach-xe-cho-thue.html">Thuê xe</a>
                      </li>
                      <li>
                         <a href="#">Dịch Vụ Khách sạn</a>
                      </li>
                   </ul>
                </li>
                <li>
                   <a href="/vi/tin/1-gioi-thieu.html">Giới thiệu</a>
                </li>
             </ul>
          </div>
       </div>
       {{-- Layout for Website --}}
       <header id="header-web">
          <div class="header-top w100">
             <div class="container">
                <div class="row">
                   <div class="col-md-12 col-xs-12 top-5">
                      <div class="cl-logo fl">
                         <h1 class="logo">
                            <a href="{{route('index')}}"><img alt="du lịch" src="{{asset('fontend/imgs/logo_BookingTravel.png')}}" alt="logo"/></a>
                         </h1>
                      </div>
                      <div class="cl-bnt fl">
                         <div class="banner-top">
                            <a href="{{route('index')}}"><img alt="du lịch" src="{{asset('fontend/imgs/banner-top.gif')}}" alt="banner top"></a>
                         </div>
                      </div>
                      <div class="cl-right-lang fr">
                         <div class="bx-lang-rh">
                            <ul class="swift-lang-r" style="display:flex; justify-content:center; list-style:none; gap:20px;">
                               <li>
                                  <a href="#"><img alt="VietNam" src=" {{ asset('fontend/imgs/quoc-ki/vietnam.png') }} " alt="vi" style="width: 70px; height: 40px;">  </a>
                               </li>
                               <li>
                                  <a href="#"><img alt="English" src="{{ asset('fontend/imgs/quoc-ki/english.png') }}" alt="en" style="width: 70px; height: 40px;"> </a>
                               </li>
                            </ul>
                            <div class="hot-line-rh">
                               <a class="title-r1h" href="tel:">Hotline hỗ trợ 24/7</a>
                               <a class="hotline-r1h" href="tel:">1900 XXXX</a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="header-bottom">
             <a class="icon_menu_mobile" href="javascript:void(0)" val="0" rel="nofollow"><i class="fa fa-bars" aria-hidden="true"></i></a>
             <div class="container">
                <div class="row">
                   <div class="col-md-12 col-xs-12 box-mainmenu">
                      <nav class="menunav">
                         <ul class="ulwap-mainmenu">
                            <li><a href="{{route('index')}}" class="mn-home"><i class="fa fa-home"></i></a></li>
                            @foreach ($categories as $key => $category)
                                    @if ($category->parent_id == 0)
                                    <li class="megamenusub" style="border-color:white">
                                        <a href="{{route('tour', [$category->slug])}}" class=" 'active' ">
                                        {{ $category->title}}
                                        </a>
                                        <ul>
                                            @foreach ($categories as $key => $sub_category)
                                                @if ($sub_category->parent_id == $category->id)
                                                <li class="" style="border-color:white">
                                                    <a href="{{route('tour', [$sub_category->slug])}}" class="">
                                                    <i class="fa fa-map-marker"></i>{{$sub_category->title}}
                                                    </a>
                                                </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                        </li>
                                    @endif
                                @endforeach

                            <li class="" style="border-color:white">
                               <a href="{{route('tour', ['kieu-tour'])}}" class=" 'active' ">
                               Kiểu tour du lịch
                               </a>
                               <ul>
                                  <li class="" style="border-color:white">
                                     <a href="/vi/loai-tour/30-4/all.html" class="">
                                     <i class="fa fa-map-marker"></i>  Tour Hè 2003
                                     </a>
                                  </li>
                                  <li class="" style="border-color:white">
                                    <a href="#" class="">
                                        <i class="fa fa-map-marker"></i>  Tour các lễ hội ở Việt Nam
                                     </a>
                                  </li>
                                  <li class="" style="border-color:white">
                                    <a href="#" class="">
                                        <i class="fa fa-map-marker"></i>  Tour du lịch xuyên Việt
                                     </a>
                                  </li>
                                     <a href="#" class="">
                                        <a href="#" class="">
                                            <i class="fa fa-map-marker"></i>  Du lịch tuần trăng mật
                                     </a>
                                  </li>
                                  <li class="" style="border-color:white">
                                    <a href="#" class="">
                                        <i class="fa fa-map-marker"></i>  Tour du lịch cuối tuần
                                     </a>
                                  </li>
                                  <li class="" style="border-color:white">
                                    <a href="#" class="">
                                        <i class="fa fa-map-marker"></i>  Du lịch Team Building
                                     </a>
                                  </li>
                                  <li class="" style="border-color:white">
                                    <a href="#" class="">
                                        <i class="fa fa-map-marker"></i>  Chùm tour du lịch Biển
                                     </a>
                                  </li>
                               </ul>
                            </li>
                            <li class="" style="border-color:white">
                               <a href="{{route('tour', ['lich-khoi-hanh'])}}" class=" 'active' ">
                               Lịch khởi hành
                               </a>
                               <ul>
                                  <li class="" style="border-color:white">
                                     <a href="{{route('tour', ['du-lich-trong-nuoc'])}}" class="">
                                     <i class="fa fa-map-marker"></i>  Tour trong nước
                                     </a>
                                  </li>
                                  <li class="" style="border-color:white">
                                     <a href="{{route('tour', ['du-lich-nuoc-ngoai'])}}" class="">
                                     <i class="fa fa-map-marker"></i>  Tour nước ngoài
                                     </a>
                                  </li>
                               </ul>
                            </li>

                            <li class="" style="border-color:white">
                               <a href="{{route('tour', ['cam-nang-du-lich'])}}" class="">
                               Cẩm nang du lịch
                               </a>
                            </li>
                            <li class="" style="border-color:white">
                               <a href="{{route('tour', ['dich-vu'])}}" class=" 'active' ">
                               Dịch vụ
                               </a>
                               <ul>
                                  <li class="" style="border-color:white">
                                     <a href="/vi/danh-sach-xe-cho-thue.html" class="">
                                     <i class="fa fa-map-marker"></i>  Thuê xe
                                     </a>
                                  </li>
                                  <li class="" style="border-color:white">
                                    <a href="#" class="">
                                        <i class="fa fa-map-marker"></i>  Dịch Vụ Khách sạn
                                     </a>
                                  </li>
                               </ul>
                            </li>
                            <li class="" style="border-color:white">
                               <a href="{{route('tour', ['gioi-thieu'])}}" class="">
                               Giới thiệu
                               </a>
                            </li>
                         </ul>
                      </nav>
                      <div class="line-menu"></div>
                   </div>
                </div>
             </div>
          </div>
       </header>
       <div class="container-fluid">
          <div class="slider-wrapper theme-default">
             <div id="slider-master" class="nivoSlider">
                <a href="{{route('home')}}"><img src="{{asset('fontend/imgs/slides/1.gif')}}" data-thumb="imgs/summer" alt="aa" title="" /></a>
                <a href="{{route('home')}}"><img src="{{asset('fontend/imgs/slides/2.gif')}}" data-thumb="imgs/highland" alt="aa" title="" /></a>
             </div>
          </div>
       </div>
       <script type="text/javascript" src="{{asset('fontend/js/jquery.nivo.slider.js')}}"></script>
       <script type="text/javascript">
          $(window).load(function() {
              $('#slider-master').nivoSlider({
                  controlNav : false,
              });
          });
       </script>
       <style>
          #chose-option-diemden-nd.hidden-select, #chose-option-diemden-qt.hidden-select, #chose-option-diemden-empty.hidden-select {
          display: none;
          }
          #chose-option-diemden-nd.show-select, #chose-option-diemden-qt.show-select, #chose-option-diemden-empty.show-select {
          display: inline;
          }
       </style>
       <script>
          $(document).ready(function(){
              $('.loaitourchose').change(function() {
                  var loaitourval = $(this).val();
                  if(loaitourval == 'trongnuoc') {
                      if($('#chose-option-diemden-nd').hasClass('hidden-select')) {
                          $('#chose-option-diemden-nd').removeClass('hidden-select');
                      }
                      $('#chose-option-diemden-nd').addClass('show-select');

                      if($('#chose-option-diemden-empty').hasClass('show-select')) {
                          $('#chose-option-diemden-empty').removeClass('show-select');
                      }
                      $('#chose-option-diemden-empty').addClass('hidden-select');

                      if($('#chose-option-diemden-qt').hasClass('show-select')) {
                          $('#chose-option-diemden-qt').removeClass('show-select');
                      }
                      $('#chose-option-diemden-qt').addClass('hidden-select');
                  } else if(loaitourval == 'ngoainuoc') {
                      if($('#chose-option-diemden-qt').hasClass('hidden-select')) {
                          $('#chose-option-diemden-qt').removeClass('hidden-select');
                      }
                      $('#chose-option-diemden-qt').addClass('show-select');

                      if($('#chose-option-diemden-nd').hasClass('show-select')) {
                          $('#chose-option-diemden-nd').removeClass('show-select');
                      }
                      $('#chose-option-diemden-nd').addClass('hidden-select');

                      if($('#chose-option-diemden-empty').hasClass('show-select')) {
                          $('#chose-option-diemden-empty').removeClass('show-select');
                      }
                      $('#chose-option-diemden-empty').addClass('hidden-select');
                  } else {
                       if($('#chose-option-diemden-empty').hasClass('hidden-select')) {
                           $('#chose-option-diemden-empty').removeClass('hidden-select');
                       }
                       $('#chose-option-diemden-empty').addClass('show-select');

                       if($('#chose-option-diemden-qt').hasClass('show-select')) {
                           $('#chose-option-diemden-qt').removeClass('show-select');
                       }
                       $('#chose-option-diemden-qt').addClass('hidden-select');

                       if($('#chose-option-diemden-nd').hasClass('show-select')) {
                           $('#chose-option-diemden-nd').removeClass('show-select');
                       }
                       $('#chose-option-diemden-nd').addClass('hidden-select');
                   }
              });
          });
       </script>
       <script>
          $(function() {
              $( "#start_date" ).datepicker({
                  //defaultDate: "+1w",
                  minDate: '0',
                  dateFormat: "dd-mm-yy",
                  changeMonth: true,
                  numberOfMonths: 1,
                  onClose: function( selectedDate ) {
                      $( "#end_date" ).datepicker( "option", "minDate", selectedDate );
                  }
              });
              $( "#end_date" ).datepicker({
                  //defaultDate: "+1w",
                  dateFormat: "dd-mm-yy",
                  changeMonth: true,
                  numberOfMonths: 1,
                  onClose: function( selectedDate ) {
                      $( "#start_date" ).datepicker( "option", "maxDate", selectedDate );
                  }
              });
          });
       </script>
       <div class="container" id="form-search">
          <div class="row">
             <div class="w100 fl bx-wap-form-search">
                <form method="GET" action="" accept-charset="UTF-8" class="">
                   <div class="col-md-10 col-xs-12 bx-fr-left">
                      <div class="form-group col-dk-2 col-md-4 col-xs-12">
                         <select class="form-control loaitourchose" name="tour-type" required="">
                            <option value="">Loại Tour</option>
                            <option value="trongnuoc" >Tour nội địa</option>
                            <option value="ngoainuoc" >Tour Quốc tế</option>
                         </select>
                      </div>
                      <div class="form-group col-dk-2 col-md-4 col-xs-12" style="display: none;">
                         <select class="form-control" name="place_departure_category_id">
                            <option value="">Điểm khởi hành</option>
                            <option value="83" >Khởi hành từ Hà Nội</option>
                            <option value="84" >Khởi hành từ Đà Nẵng</option>
                            <option value="82" >TP. Hồ Chí Minh</option>
                            <option value="70" >Khởi hành từ Hải Phòng</option>
                            <option value="34" >Khởi hành từ Quảng Ninh</option>
                            <option value="72" >Khởi hành từ Lào Cai</option>
                            <option value="85" >Khởi hành từ Lai Châu</option>
                            <option value="62" >Khởi hành từ Ninh Bình</option>
                            <option value="3" >Khởi hành từ Thanh Hóa</option>
                            <option value="4" >Khởi hành từ Nghệ An</option>
                            <option value="74" >Khởi hành từ Huế</option>
                            <option value="71" >Khởi hành từ Nha Trang</option>
                            <option value="89" >Khởi hành từ Hà Nội - TP.HCM</option>
                            <option value="91" >Hà Nội - Đà Nẵng - TP.HCM</option>
                            <option value="92" >Khởi hành 63 tỉnh/TP</option>
                         </select>
                      </div>
                      <div class="form-group col-dk-2 col-md-4 col-xs-12">
                         <select name="" class="form-control show-select" id="chose-option-diemden-empty">
                            <option value="0">Nơi đến</option>
                         </select>
                         <select name="category_id_nd" class="form-control hidden-select" id="chose-option-diemden-nd">
                            <option value="">Nơi đến</option>
                            <option value="3" >Du lịch Hạ Long Cát Bà</option>
                            <option value="4" >Du lịch Hà Nội Sapa 2018</option>
                            <option value="34" >Du lịch Hà Nội Hạ Long Sapa</option>
                            <option value="62" >Du lịch Quy Nhơn Phú Yên</option>
                            <option value="66" >Du lịch Đà Nẵng Hội An Huế</option>
                            <option value="85" >Du lịch Nha Trang Đà Lạt</option>
                            <option value="69" >Du Lịch Vũng Tàu Côn Đảo</option>
                            <option value="67" >Du lịch đảo ngọc Phú Quốc</option>
                            <option value="70" >Du lịch Sài Gòn và Miền Tây</option>
                            <option value="71" >Du lịch Đông Tây Bắc 2018</option>
                            <option value="72" >Du lịch Phan Thiết 2018</option>
                            <option value="73" >Du lịch Cửa Lò Làng sen</option>
                            <option value="89" >Du lịch Ban Mê Thuột</option>
                            <option value="164" >63 tỉnh thành phố</option>
                         </select>
                         <select name="category_id_qt" class="form-control hidden-select" id="chose-option-diemden-qt">
                            <option value="">Nơi đến</option>
                            <option value="137" >Du lịch Thái Lan</option>
                            <option value="143" >Du lịch Campuchia</option>
                            <option value="156" >Du lịch Singapore Malaysia</option>
                            <option value="160" >Du lịch Myanmar</option>
                            <option value="144" >Du lịch Trung Quốc</option>
                            <option value="142" >Du lịch Hồng Kông</option>
                            <option value="154" >Du lịch Lào</option>
                            <option value="139" >Du lịch Hàn Quốc</option>
                            <option value="145" >Du lịch Châu Âu</option>
                            <option value="158" >Du Lịch Úc</option>
                            <option value="140" >Du lịch Nhật Bản</option>
                            <option value="157" >Du lịch Dubai</option>
                            <option value="141" >Du lịch Đài Loan</option>
                            <option value="161" >Du lịch Maldives</option>
                         </select>
                      </div>
                      <div class="form-group col-dk-2 col-md-4 col-xs-12">
                         <input id="start_date" class="form-control" type="text" name="start_date" value="" placeholder="Ngày khởi hành">
                      </div>
                      <div class="form-group col-dk-2 col-md-4 col-xs-12" style="display: none">
                         <input id="end_date" class="form-control" type="text" name="end_date" value="" placeholder="Ngày về">
                      </div>
                      <div class="form-group col-dk-2 col-md-4 col-xs-12">
                         <select class="form-control" name="promotion">
                            <option value="">Giảm giá</option>
                            <option value="yes" >Có</option>
                            <option value="no" >Không</option>
                         </select>
                      </div>
                      <div class="form-group col-dk-2 col-md-4 col-xs-12">
                         <select class="form-control" name="price">
                            <option value="">Giá</option>
                            <option value="0-1" > < 1 Triệu</option>
                            <option value="1-2" > 1-2 Triệu</option>
                            <option value="2-4" > 2-4 Triệu</option>
                            <option value="4-6" > 4-6 Triệu</option>
                            <option value="6-10" > 6-10 Triệu</option>
                            <option value="10-200" > > 10 Triệu</option>
                         </select>
                      </div>
                   </div>
                   <div class="col-md-2 col-xs-12 bx-fr-right">
                      <button type="submit" class="btn btn-red">Xem giá</button>
                   </div>
                </form>
             </div>
          </div>
       </div>

       @yield('content')

       {{-- Địa điểm du lịch --}}
       <div class="container box-list-tour top-15">
          <div class="row">
             <div class="col-md-12 col-xs-12 bx-title-lst-tour text-center">
                <div class="w100 fl title-tour1">
                   <h2 style="color: #3E9FFD; font-size:30px">DỰ KIẾN CỦA BẠN</h2>
                </div>
             </div>
          </div>
          <div class="col-md-12 col-xs-12 top-30 lst-tour-position">
             <div class="row">
                <div class="col-md-3 col-xs-6 cl-mb-half-0">
                   <div class="bximg-request-dd">
                    <a href="#" class="">
                        <img src="{{asset('fontend/imgs/thai-lan.png')}}" alt="Du lịch Thái Lan">
                         <div class="capition-dd"><i class="fa fa-map-marker"></i> Du lịch Thái Lan</div>
                      </a>
                   </div>
                </div>
                <div class="col-md-3 col-xs-6 cl-mb-half-1">
                   <div class="bximg-request-dd">
                    <a href="#" class="">
                        <img src="{{asset('fontend/imgs/chau-au.jpg')}}" alt="Du lịch Châu Âu">
                         <div class="capition-dd"><i class="fa fa-map-marker"></i> Du lịch Châu Âu</div>
                      </a>
                   </div>
                </div>
                <div class="col-md-6 col-xs-12">
                   <div class="bximg-request-dd">
                    <a href="#" class="">
                        <img src="{{asset('fontend/imgs/han-quoc.jpg')}}" alt="Du lịch Hàn Quốc">
                         <div class="capition-dd"><i class="fa fa-map-marker"></i> Du lịch Hàn Quốc</div>
                      </a>
                   </div>
                </div>
                <div class="clear"></div>
                <div class="w100 fl top-30 khkhkocog"></div>
                <div class="col-md-6 col-xs-12">
                   <div class="bximg-request-dd">
                    <a href="#" class="">
                        <img src="{{asset('fontend/imgs/singapo-malaysia.jpg')}}" alt="Du lịch Singapore Malaysia">
                         <div class="capition-dd"><i class="fa fa-map-marker"></i> Du lịch Singapore Malaysia</div>
                      </a>
                   </div>
                </div>
                <div class="col-md-3 col-xs-6 cl-mb-half-4">
                   <div class="bximg-request-dd">
                    <a href="#" class="">
                        <img src="{{asset('fontend/imgs/Bali- Indo.jpg')}}" alt="Du lịch Bali Indonesia">
                         <div class="capition-dd"><i class="fa fa-map-marker"></i> Du lịch Bali Indonesia</div>
                      </a>
                   </div>
                </div>
                <div class="col-md-3 col-xs-6 cl-mb-half-5">
                   <div class="bximg-request-dd">
                      <a href="#">
                         <img src="{{asset('fontend/imgs/da-nang.jpg')}}" alt="Du lịch Đà Nẵng Hội An Huế">
                         <div class="capition-dd"><i class="fa fa-map-marker"></i> Du lịch Đà Nẵng Hội An Huế</div>
                      </a>
                   </div>
                </div>
             </div>
          </div>
       </div>
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
                    <h4>Top 10 công ty du lịch hàng đầu  hàng đầu</h4>
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
                   $(document).ready(function(){
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
       <div id="footer" class="footer w100 fl top-20">
          <div class="container">
             <div class="row">
                <div class="col-md-9 col-xs-12">
                   <div class="row">
                      <div class="col-md-4 col-xs-12">
                         <div class="w100 fl tit-child-larg">
                            <h2 class="h2titfoot not-icon">Liên hệ với vietnamtravel </h2>
                         </div>
                         <ul class="ulfooter-contact">
                            <li><i class="fa fa-map-marker"></i> Biệt thự số 8 ,dãy M2, khu đô thị mới Dương Nội, Hà Đông, Hà Nội</li>
                            <li><i class="fa fa-phone"></i> (0913) 073 - 026 ; (0243) 998 9676</li>
                            <li><i class="fa fa-fax"></i> Fax: (024) 3312 0411</li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> vietnamtravel1234@gmail.com</li>
                         </ul>
                         <!--<ul class="ulfooter-contact">-->
                         <!--    <li><i class="fa fa-map-marker"></i> BT8 - M2, Khu đô thị Dương Nội, Q.Hà Đông, Thủ đô Hà Nội</li>-->
                         <!--    <li><i class="fa fa-phone"></i> (0913) 073 - 026 ; (0243) 998 9676</li>-->
                         <!--    <li><i class="fa fa-fax"></i> Fax: (024) 3312 0411</li>-->
                         <!--    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> vietnamtravel1234@gmail.com</li>-->
                         <!--</ul>-->
                      </div>
                      <div class="col-md-8 col-xs-12">
                         <div class="w100 fl tit-child-larg">
                            <h2 class="h2titfoot not-icon">Văn phòng</h2>
                         </div>
                         <div class="row">
                            <div class="col-md-6 col-xs-12">
                               <ul class="ulfooter-contact w50">
                                  <li><i class="fa fa-map-marker"></i> 83 Nguyễn Thị Minh Khai, Quận Hải Châu, Thành phố Đà Nẵng</li>
                                  <li><i class="fa fa-phone"></i> (0904) 577- 548 ; (0904) 577- 548</li>
                                  <li><i class="fa fa-fax"></i> Fax: (025) 1138 86559</li>
                                  <li><i class="fa fa-envelope-o" aria-hidden="true"></i> ceodangnang.vietnamtravel@gmail.com</li>
                               </ul>
                               <!--<ul class="ulfooter-contact w50">-->
                               <!--    <li><i class="fa fa-map-marker"></i> 83 Nguyễn Thị Minh Khai, Quận Hải Châu, Thành phố Đà Nẵng</li>-->
                               <!--    <li><i class="fa fa-phone"></i> (0904) 577- 548 ; (0904) 577- 548</li>-->
                               <!--    <li><i class="fa fa-fax"></i> Fax: (025) 1138 86559</li>-->
                               <!--    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> ceodangnang.vietnamtravel@gmail.com</li>-->
                               <!--</ul>-->
                            </div>
                            <div class="col-md-6 col-xs-12">
                               <ul class="ulfooter-contact w50">
                                  <li><i class="fa fa-map-marker"></i> 18E Đường Cộng Hòa (Republic Plaza), Phường 4, Quận Tân Bình, Hồ Chí Minh</li>
                                  <li><i class="fa fa-phone"></i>  (098) 444 - 1944 ; (028) 3880 8086</li>
                                  <li><i class="fa fa-fax"></i> Fax: (028) 2220 22011</li>
                                  <li><i class="fa fa-envelope"></i> ceosaigon.vietnamtravel@gmail.com</li>
                               </ul>
                               <!--<ul class="ulfooter-contact w50">-->
                               <!--    <li><i class="fa fa-map-marker"></i> 18E Đường Cộng Hòa (Republic Plaza), Phường 4, Quận Tân Bình, Hồ Chí Minh</li>-->
                               <!--    <li><i class="fa fa-phone"></i>  (098) 444 - 1944 ; (028) 3880 8086</li>-->
                               <!--    <li><i class="fa fa-fax"></i> Fax: (028) 2220 22011</li>-->
                               <!--    <li><i class="fa fa-envelope"></i> ceosaigon.vietnamtravel@gmail.com</li>-->
                               <!--</ul>-->
                            </div>
                         </div>
                      </div>
                      <div class="col-md-12 col-xs-12">
                         <div class="w100 fl tit-child-larg">
                            <h2 class="h2titfoot not-icon">Địa đến yêu thích</h2>
                         </div>
                         <div class="row">
                            <div class="col-md-4 col-xs-12">
                               <ul class="ulfooter-contact w50">
                                  <li><a href="#"><i class="fa fa-map-marker"></i> Du thuyền Hạ Long</a></li>
                                  <li><a href="#"><i class="fa fa-map-marker"></i> Du lịch Sapa 2023</a></li>
                                  <li><a href="#"><i class="fa fa-map-marker"></i> Du lịch Hà Nội Hạ Long Sapa</a></li>
                                  <li><a href="#"><i class="fa fa-map-marker"></i> Du lịch Quy Nhơn Phú Yên</a></li>
                                  <li><a href="#"><i class="fa fa-map-marker"></i> Du lịch Đà Nẵng Hội An Huế</a></li>
                                  <li><a href="#"><i class="fa fa-map-marker"></i> Du lịch Cửa Lò Làng sen</a></li>
                                  <li><a href="https://vietnamtravel.net.vn/vi/san-pham/88-du-lich-cuoi-tuan-2018.html"><i class="fa fa-map-marker"></i> Du lịch cuối tuần 2023</a></li>
                                  <li><a href="#"><i class="fa fa-map-marker"></i> Du lịch Ban Mê Thuột</a></li>
                                  <li><a href="https://vietnamtravel.net.vn/vi/san-pham/90-du-lich-bien-2018.html"><i class="fa fa-map-marker"></i> Du lịch Biển 2023</a></li>
                               </ul>
                            </div>
                            <div class="col-md-4 col-xs-12">
                               <ul class="ulfooter-contact w50">
                                  <li><a href="#"><i class="fa fa-map-marker"></i> Du lịch Phú Quốc 2023</a></li>
                                  <li><a href="#"><i class="fa fa-map-marker"></i> Du Lịch Vũng Tàu Côn Đảo</a></li>
                                  <li><a href="#"><i class="fa fa-map-marker"></i> Du lịch Sài Gòn và Miền Tây</a></li>
                                  <li><a href="#"><i class="fa fa-map-marker"></i> Du lịch Đông Tây Bắc 2023</a></li>
                                  <li><a href="#"><i class="fa fa-map-marker"></i> Du lịch Phan Thiết 2023</a></li>
                                  <li><a href="https://vietnamtravel.net.vn/vi/san-pham/74-du-lich-xuyen-viet-2018.html"><i class="fa fa-map-marker"></i> Du lịch Xuyên Việt 2023</a></li>
                                  <li><a href="#"><i class="fa fa-map-marker"></i> Du lịch Nha Trang Đà Lạt</a></li>
                                  <li><a href="https://vietnamtravel.net.vn/vi/san-pham/86-du-lich-tuan-trang-mat.html"><i class="fa fa-map-marker"></i> Du lịch tuần trăng mật</a></li>
                                  <li><a href="https://vietnamtravel.net.vn/vi/san-pham/87-du-lich-vip-resort.html"><i class="fa fa-map-marker"></i> Du lịch Tết 2023</a></li>
                               </ul>
                            </div>
                            <div class="col-md-4 col-xs-12">
                               <ul class="ulfooter-contact w50">
                                  <li><a href="https://vietnamtravel.net.vn/vi/san-pham/137-du-lich-thai-lan.html"><i class="fa fa-map-marker"></i> Du lịch Thái Lan</a></li>
                                  <li><a href="https://vietnamtravel.net.vn/vi/san-pham/139-du-lich-han-quoc.html"><i class="fa fa-map-marker"></i> Du lịch Hàn Quốc</a></li>
                                  <li><a href="https://vietnamtravel.net.vn/vi/san-pham/142-du-lich-hong-kong.html"><i class="fa fa-map-marker"></i> Du lịch Hồng Kông</a></li>
                                  <li><a href="https://vietnamtravel.net.vn/vi/san-pham/143-du-lich-campuchia.html"><i class="fa fa-map-marker"></i> Du lịch Campuchia</a></li>
                                  <li><a href="https://vietnamtravel.net.vn/vi/san-pham/144-du-lich-trung-quoc.html"><i class="fa fa-map-marker"></i> Du lịch Trung Quốc</a></li>
                                  <li><a href="https://vietnamtravel.net.vn/vi/san-pham/156-du-lich-singapore-malaysia.html"><i class="fa fa-map-marker"></i> Du lịch Singapore Malaysia</a></li>
                                  <li><a href="https://vietnamtravel.net.vn/vi/san-pham/139-du-lich-han-quoc.html"><i class="fa fa-map-marker"></i> Du lịch Hàn Quốc</a></li>
                                  <li><a href="https://vietnamtravel.net.vn/vi/san-pham/141-du-lich-dai-loan.html"><i class="fa fa-map-marker"></i> Du lịch Đài Loan</a></li>
                                  <li><a href="https://vietnamtravel.net.vn/vi/san-pham/145-du-lich-chau-au.html"><i class="fa fa-map-marker"></i> Du lịch Châu Âu</a></li>
                               </ul>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-md-3 col-xs-12">
                   <div class="w100 fl">
                      <div class="w100 fl tit-child-larg">
                         <h2 class="h2titfoot not-icon">Kết nối với chúng tôi</h2>
                      </div>
                      <div class="fb-page" data-href="https://www.facebook.com/vietnamtravel.net.vn/" data-small-header="false" data-adapt-container-width="true"  data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
                         <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="https://www.facebook.com/vietnamtravel.net.vn/"><a href="https://www.facebook.com/vietnamtravel.net.vn/">Du lịch Việt nam - VietnamTravel</a></blockquote>
                         </div>
                      </div>
                      <div class="clear"></div>
                      <ul class="ullstsocial">
                         <li><a href=""><i class="fa fa-facebook-f"></i></a></li>
                         <li><a href=""><i class="fa fa-twitter"></i></a></li>
                         <li><a href=""><i class="fa fa-behance"></i></a></li>
                         <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                      </ul>
                   </div>
                   <div class="w100 fl">
                      <div class="w100 fl tit-child-larg">
                         <h2 class="h2titfoot not-icon">Phương thức thanh toán</h2>
                      </div>
                      <ul class="ulfooter-contact2 w50">
                         <li><a href="">1/ thanh toán trực tiếp tại văn phòng công ty hoặc các chi nhánh</a></li>
                         <li><a href="">2/ thanh toán tận nơi: HDV sẽ thu tiền tận nơi gần khu vực trung tâm</a></li>
                         <li><a href="">3/ thanh toán chuyển khoản</a></li>
                         <li><a href="">4/ thanh toán qua cổng thanh toán trực tiếp</a></li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
          <div class="container top-25">
             <div class="row">
                <div class="col-md-6 col-xs-12">
                   <div class="w100 fl tit-child-larg">
                      <h2 class="h2titfoot">Các Giải thưởng đã đạt được</h2>
                   </div>
                   <a href="#"><img src="https://vietnamtravel.net.vn/assets/desktop/images/huychuong.png" class="hcfot" alt="hc"></a>
                </div>
                <div class="col-md-6 col-xs-12">
                   <div class="w100 fl form-dk-fot">
                      <h3>hãy đăng ký để nhận tin khuyến mãi</h3>
                      <form class="form-inline" action="https://vietnamtravel.net.vn/dang-ky-nhan-tin.html" method="get">
                         <div class="form-group">
                            <input type="text" class="form-control input_dk_ht" name="name" placeholder="Họ Tên...">
                         </div>
                         <div class="form-group">
                            <input type="email" class="form-control input_dk_mail" name="email" placeholder="Email">
                         </div>
                         <button type="submit" class="btn btn-default sb-dk-ft">Submit</button>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="hotline-footer">
          <span class="hf-icon"></span>
          <div class="hf-text">
             Hotline trong nước : <span>(098) 444 - 1944</span> <span> | </span>Hotline nước ngoài : <span>(0913) 073 - 026</span>
          </div>
       </div>
       <div class="prdcontact-fix">
          <ul>
             <li class="actCall">
                <a href="tel:0913073026">
                <img alt="du lịch" src="https://file4.batdongsan.com.vn/images/opt/mobile/newphone.png">
                </a>
             </li>
             <li class="actSms">
                <a href="tel:0913073026">
                <img alt="du lịch" src="https://file4.batdongsan.com.vn/images/opt/mobile/newsms.png">
                </a>
             </li>
             <li>
                <a href="mailto:vietnamtravel1234@gmail.com">
                <img alt="du lịch" src="https://file4.batdongsan.com.vn/images/opt/mobile/newemail1.png" style="margin: 2px 0;">
                </a>
             </li>
          </ul>
       </div>
       <a href="#" class="back-to-top" style="display: inline;">Back to Top</a>
       <script>
          document.addEventListener("DOMContentLoaded", function(event) {
             jQuery('a[href*="tel:"]').on('click', function() {
                gtag('event', 'conversion', {'send_to': 'AW-882166916/ExQfCPj98KIBEISZ06QD'});
             });
          });
       </script>
       <!-- Google Tag Manager -->
       <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
          new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
          j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
          'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
          })(window,document,'script','dataLayer','GTM-MRGZMJD');
       </script>
       <!-- End Google Tag Manager -->
    </body>
    <script>
       $(function(){
           var offset = 115;
           $(window).scroll(function() {
               if ($(this).scrollTop() > offset) {
                   $('.header-bottom').addClass('fixed');
               } else {
                   $('.header-bottom').removeClass('fixed');
               }
           });
           if($(window).scrollTop() > offset) {
               $('.header-bottom').addClass('fixed');
           } else {
               $('.header-bottom').removeClass('fixed');
           }
       });
    </script>
    <script>
       jQuery(document).ready(function() {
           var offset = 20;
           var duration = 500;
           jQuery(window).scroll(function() {
               if (jQuery(this).scrollTop() > offset) {
                   jQuery('.back-to-top').fadeIn(duration);
               } else {
                   jQuery('.back-to-top').fadeOut(duration);
               }
           });

           jQuery('.back-to-top').click(function(event) {
               event.preventDefault();
               jQuery('html, body').animate({scrollTop: 0}, duration);
               return false;
           })
       });
    </script>
 </html>
