<!-- Đánh dấu JSON-LD được tạo bởi Trình trợ giúp đánh dấu dữ liệu có cấu trúc của Google. -->
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Article",
        "name": "THƯỢNG",
        "author": {
            "@type": "Person",
            "name": "–"
        },
        "image": "https://vietnamtourism.net.vn/frontend/images/event/tet.png",
        "articleBody": "CHƯƠNG TRÌNH DU LỊCH CHÂU ÂU TỪ HÀ NỘI: PHÁP – THỤY SỸ - Ý – VATICAN ( 10 NGÀY 9 ĐÊM)</A></DIV>\n        <DIV class=\"row\"><B class=\"font_text_cap\">Thời gian:</B>  10 Ngày </DIV>\n        <DIV class=\"row\"><B class=\"font_text_cap\">Khởi hành từ:</B> \n                            Khởi hành từ Hà Nội\n                    </DIV>\n        <DIV class=\"row\"><B class=\"font_text_cap\">Ngày khởi hành:</B>\n                                            25/05; 13/07; 24/08; 25/09; 10/10;                     \n        </DIV>\n        <DIV class=\"row\"><B class=\"font_text_cap\">Giá cũ:</B> <SPAN class=\"tour-oldprice\">57.900.000 VNĐ</SPAN></DIV>\n        <DIV class=\"row\"><B class=\"font_text_cap\">Giá KM:</B> <SPAN class=\"tour-newprice\">57.900.000 VNĐ"
    }
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="text/html; charset=utf-8; Vietnam Travel chuyên tổ chức các tour Du lịch trong nước, Du lịch nước ngoài. Khởi hành đúng lịch; dịch vụ hạng sang; giá tốt nhất thị trường; đã đi là thích." http-equiv="Content-Type">
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
    <meta property="og:site_name" content="Du lịch Việt nam - VietnamTravel" />
    {{-- Khi share có kèm theo hình ở link --}}
    <meta property="og:image" content="" />
    {{-- Tiêu đề của bài share --}}
    <meta property="og:title" content="Du lịch Việt nam - VietnamTravel" />
    {{-- Mô tả ngắn của bài share --}}
    <meta property="og:description" content="Booking Travel được vinh danh tại giải thưởng du lịch danhh giá World Travel Awards với danh hiệu Nhà điều hành tour trọn gói hàng đầu thế giới, dịch vụ uy tín, khởi hành đúng lịch; dịch vụ hạng sang; giá tốt nhất thị trường; đã đi là thích." />
    {{-- Bài share sẽ có link URL tương ứng --}}
    <meta property="og:url" content="{{route('home')}}" />
    {{-- Chỉ định nội dung bài share là kiểu website, bài viết, sản phẩm,... --}}
    <meta property="og:type" content="website" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{asset('fontend/css/jquery-ui.min.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/css/menu-mobile.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6e6ca8b616.js" crossorigin="anonymous"></script>
    <link href="{{asset('fontend/css/slider.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('fontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/css/responsive.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <script src="{{asset('fontend/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('fontend/js/jquery-ui.js')}}"></script>
    <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
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
                var val = $(this).attr("val");
                $("#" + val).toggle();
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
        "@context": "https://schema.org/"
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
        jQuery(document).ready(function() {
            $(".owl-carousel5").owlCarousel({
                pagination: false,
                navigation: true,
                items: 2,
                autoPlay: true,
                slideMargin: 10,
                addClassActive: true,
                itemsCustom: [
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

        function gtag() {
            dataLayer.push(arguments);
        }
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
                appId: '238563550019858',
                autoLogAppEvents: true,
                xfbml: true,
                version: 'v2.12'
            });
        };
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="fb-customerchat" page_id="374978409570530" greeting_dialog_display="hide">
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
                                <a href="{{route('index')}}"><img alt="du lịch" src="{{asset('fontend/imgs/logo_BookingTravel.png')}}" alt="logo" /></a>
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
                                        <a href="#"><img alt="VietNam" src=" {{ asset('fontend/imgs/quoc-ki/vietnam.png') }} " alt="vi" style="width: 70px; height: 40px;"> </a>
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
                        @include('pages.include.menunav')
                    </div>
                </div>
            </div>
        </div>
    </header>

    <script type="text/javascript" src="{{asset('fontend/js/jquery.nivo.slider.js')}}"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('#slider-master').nivoSlider({
                controlNav: false,
            });
        });
    </script>
    <style>
        #chose-option-diemden-nd.hidden-select,
        #chose-option-diemden-qt.hidden-select,
        #chose-option-diemden-empty.hidden-select {
            display: none;
        }

        #chose-option-diemden-nd.show-select,
        #chose-option-diemden-qt.show-select,
        #chose-option-diemden-empty.show-select {
            display: inline;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('.loaitourchose').change(function() {
                var loaitourval = $(this).val();
                if (loaitourval == 'trongnuoc') {
                    if ($('#chose-option-diemden-nd').hasClass('hidden-select')) {
                        $('#chose-option-diemden-nd').removeClass('hidden-select');
                    }
                    $('#chose-option-diemden-nd').addClass('show-select');

                    if ($('#chose-option-diemden-empty').hasClass('show-select')) {
                        $('#chose-option-diemden-empty').removeClass('show-select');
                    }
                    $('#chose-option-diemden-empty').addClass('hidden-select');

                    if ($('#chose-option-diemden-qt').hasClass('show-select')) {
                        $('#chose-option-diemden-qt').removeClass('show-select');
                    }
                    $('#chose-option-diemden-qt').addClass('hidden-select');
                } else if (loaitourval == 'ngoainuoc') {
                    if ($('#chose-option-diemden-qt').hasClass('hidden-select')) {
                        $('#chose-option-diemden-qt').removeClass('hidden-select');
                    }
                    $('#chose-option-diemden-qt').addClass('show-select');

                    if ($('#chose-option-diemden-nd').hasClass('show-select')) {
                        $('#chose-option-diemden-nd').removeClass('show-select');
                    }
                    $('#chose-option-diemden-nd').addClass('hidden-select');

                    if ($('#chose-option-diemden-empty').hasClass('show-select')) {
                        $('#chose-option-diemden-empty').removeClass('show-select');
                    }
                    $('#chose-option-diemden-empty').addClass('hidden-select');
                } else {
                    if ($('#chose-option-diemden-empty').hasClass('hidden-select')) {
                        $('#chose-option-diemden-empty').removeClass('hidden-select');
                    }
                    $('#chose-option-diemden-empty').addClass('show-select');

                    if ($('#chose-option-diemden-qt').hasClass('show-select')) {
                        $('#chose-option-diemden-qt').removeClass('show-select');
                    }
                    $('#chose-option-diemden-qt').addClass('hidden-select');

                    if ($('#chose-option-diemden-nd').hasClass('show-select')) {
                        $('#chose-option-diemden-nd').removeClass('show-select');
                    }
                    $('#chose-option-diemden-nd').addClass('hidden-select');
                }
            });
        });
    </script>
    <script>
        $(function() {
            $("#start_date").datepicker({
                //defaultDate: "+1w",
                minDate: '0',
                dateFormat: "dd-mm-yy",
                changeMonth: true,
                numberOfMonths: 1,
                onClose: function(selectedDate) {
                    $("#end_date").datepicker("option", "minDate", selectedDate);
                }
            });
            $("#end_date").datepicker({
                //defaultDate: "+1w",
                dateFormat: "dd-mm-yy",
                changeMonth: true,
                numberOfMonths: 1,
                onClose: function(selectedDate) {
                    $("#start_date").datepicker("option", "maxDate", selectedDate);
                }
            });
        });
    </script>

    @yield('content')

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
    {{-- <a href="#" class="back-to-top" style="display: inline;"><i class="fa-solid fa-square-caret-up"></i></a> --}}
    <button type="button" class="btn btn-info back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            jQuery('a[href*="tel:"]').on('click', function() {
                gtag('event', 'conversion', {
                    'send_to': 'AW-882166916/ExQfCPj98KIBEISZ06QD'
                });
            });
        });
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MRGZMJD');
    </script>
    <!-- End Google Tag Manager -->
</body>
<script>
    $(function() {
        var offset = 115;
        $(window).scroll(function() {
            if ($(this).scrollTop() > offset) {
                $('.header-bottom').addClass('fixed');
            } else {
                $('.header-bottom').removeClass('fixed');
            }
        });
        if ($(window).scrollTop() > offset) {
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
            jQuery('html, body').animate({
                scrollTop: 0
            }, duration);
            return false;
        })
    });
</script>

</html>
