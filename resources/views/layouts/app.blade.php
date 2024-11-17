<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Thanh Tab --}}
    <link type="image/x-icon" href="{{ asset('fontend/imgs/ico_BookingTravel.ico') }}" rel="shortcut icon" />
    <title>BookingTravel - Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
    {{-- DataTables --}}
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" />
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <div class="fixed-top">
            <!-- Main Sidebar Container -->
            @include('layouts.include.sidebar')
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{ route('home') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="" class="nav-link">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="content-wrapper">
            <div class="container-fluid mx-auto mt-3 p-5 bg-white table table-responsive">
                @yield('content')
            </div>
        </div>

        <footer class="main-footer py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link px-2 text-body-secondary">Trang chủ</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Giới thiệu</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Fanpage</a></li>
            </ul>
            <p class="text-center text-body-secondary">~ Đi tới những nơi xa ~</p>
        </footer>
    </div>

    <!-- REQUIRED SCRIPTS -->
    <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/dist/js/adminlte.js') }}"></script>
    <script src="//cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            if ($('.ckeditor').length) {
                $('.ckeditor').each(function () {
                    CKEDITOR.replace(this);
                });
            }

            if ($('#myTable').length) {
                let table = new DataTable('#myTable');
            }
        });

        document.getElementById('price').addEventListener('input', function (e) {
            let value = this.value.replace(/\D/g, '');
            value = new Intl.NumberFormat('vi-VN').format(value);
            this.value = value;
        });

        function setDeleteAction(action) {
            var form = document.getElementById('deleteForm');
            form.action = action;
        }
    </script>
</body>

</html>
