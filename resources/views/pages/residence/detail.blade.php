@extends('layout')

@section('content')
<div class="container my-5">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('index')}}">Trang chủ</a><i class="fa-solid fa-minus"></i></li>
              <li class="breadcrumb-item">
                <a href="{{ route('residence') }}">Lưu trú</a><i class="fa-solid fa-minus"></i>
              </li>
              <li class="breadcrumb-item active" aria-current="page">{{ $residence->name }}</li>
            </ol>
          </nav>

          <div class="row">
            <div class="col-md-7">
                <img src="{{ asset('upload/residences/' . $residence->image) }}" alt="{{ $residence->name }}" class="img-fluid rounded shadow" style="max-height: 500px; width: 100%; object-fit: cover; border-radius: 8px;">
            </div>

            <div class="col-md-5 tour-info">
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="2"><h1 class="mb-4 "><strong>{{ $residence->name }}</strong></h1></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $apiProvince = json_decode(file_get_contents('https://esgoo.net/api-tinhthanh/1/0.htm'), true);
                            $provinces = $apiProvince['data'];

                            $apiDistrict = json_decode(file_get_contents("https://esgoo.net/api-tinhthanh/2/{$residence->province}.htm"), true);
                            $districts = $apiDistrict['data'];

                            $apiWard = json_decode(file_get_contents("https://esgoo.net/api-tinhthanh/3/{$residence->district}.htm"), true);
                            $wards = $apiWard['data'];
                        @endphp

                        <tr>
                            <td><strong>Địa chỉ</strong></td>
                            <td>{{ $residence->address }},
                                {{ collect($provinces)->firstWhere('id', $residence->province)['full_name'] ?? 'N/A' }}
                                ,
                                {{ collect($districts)->firstWhere('id', $residence->district)['full_name'] ?? 'N/A' }}
                                ,
                                {{ collect($wards)->firstWhere('id', $residence->ward)['full_name'] ?? 'N/A' }}
                            </td>
                                </tr>
                        <tr>
                            <td style="width: 100px"><strong>Đánh giá</strong></td>
                            <td>{{ $residence->rating }}</td>
                        </tr>
                        <tr style="background-color: #3E9FFD;">
                            <td class="text-center" colspan="2">
                                <strong style="color: white;">{{ number_format($residence->price_per_night, 0, ',', '.') }} VNĐ / ĐÊM</strong>
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
            @if ($residence->description)
                <!-- Mô tả Lưu trú -->
                    <h3 class="text-uppercase text-center mb-3"><b>Mô tả</b></h3>
                    <hr style="border-top: solid #3E9FFD 3px;">
                    <div class="card shadow-sm p-3 rounded">
                        <p>{!! $residence->description !!}</p>
                    </div>

            @else
            <div class="alert alert-warning text-center">
                Nơi lưu trú này chưa cập nhật phần mô tả
            </div>
            @endif
        </div>

</div>
@include('pages.include.footer')
@endsection
