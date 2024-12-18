@extends('layout')

@section('content')
<div class="container my-5">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('index')}}">Trang chủ</a><i class="fa-solid fa-minus"></i></li>
              <li class="breadcrumb-item">
                <a href="{{ route('vehicle') }}">Thuê xe</a><i class="fa-solid fa-minus"></i>
              </li>
              <li class="breadcrumb-item active" aria-current="page">{{ $vehicle->name }}</li>
            </ol>
          </nav>

          <div class="row">
            <div class="col-md-7">
                <img src="{{ asset('upload/vehicles/' . $vehicle->image) }}" alt="{{ $vehicle->name }}" class="img-fluid rounded shadow" style="max-height: 500px; width: 100%; object-fit: cover; border-radius: 8px;">
            </div>

            <div class="col-md-5 tour-info">
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="2"><h1 class="mb-4 "><strong>{{ $vehicle->name }}</strong></h1></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 100px"><strong>Hãng xe</strong></td>
                            <td>{{ $vehicle->brand }}</td>
                        </tr>
                        <tr>
                            <td style="width: 100px"><strong>Số chỗ</strong></td>
                            <td>{{ $vehicle->seats }}</td>
                        </tr>
                        <tr>
                            <td style="width: 100px"><strong>Số lượng</strong></td>
                            <td>{{ $vehicle->quantity }}</td>
                        </tr>
                        <tr>
                            <td style="width: 100px"><strong>Bảng nàu</strong></td>
                            <td>{{ $vehicle->color }}</td>
                        </tr>
                        <tr style="background-color: #3E9FFD;">
                            <td class="text-center" colspan="2">
                                <strong style="color: white;">{{ number_format($vehicle->price_per_day, 0, ',', '.') }} VNĐ / ĐÊM</strong>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <a href="#" class="btn btn-info btn-lg" style="background-color: #3E9FFD">Thông tin liên hệ</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
          </div>
          <div class="mt-4 col-md-12">
            <hr>
            @if ($vehicle->description)
                <!-- Mô tả Lưu trú -->
                    <h3 class="text-uppercase text-center mb-3"><b>Mô tả</b></h3>
                    <hr style="border-top: solid #3E9FFD 3px;">
                    <div class="card shadow-sm p-3 rounded">
                        <p>{!! $vehicle->description !!}</p>
                    </div>

            @else
            <div class="alert alert-warning text-center">
                Phương tiện này chưa cập nhật phần mô tả
            </div>
            @endif
        </div>

</div>
@include('pages.include.footer')
@endsection
