@extends('layout')

@section('content')

{{-- Danh sách các Phương tiện --}}
<div class="container" style="width: 90%; margin: auto;">
    <div style="text-align: center; margin-bottom: 20px;">
        <h2 style="color: #3E9FFD; font-size: 30px;" class="text-uppercase"><strong>Danh sách Phương tiện</strong></h2>
    </div>

    @if($vehicles->isEmpty())
        <div style="text-align: center; background: #fff3cd; padding: 15px; border: 1px solid #ffeeba; color: #856404;">
            Hiện tại chưa có Phương tiện.
        </div>
    @else
        <div style="display: flex; flex-wrap: wrap; gap: 20px;">
            @foreach($vehicles as $vehicle)
                <div style="width: 32%; position: relative; overflow: hidden; border-radius: 8px;">
                    <a href="{{ route('detail-vehicle', $vehicle->slug) }}">
                        <img src="{{ asset('upload/vehicles/'.$vehicle->image) }}"
                             style="width: 100%; height: 250px; object-fit: cover;"
                             alt="{{ $vehicle->name }}">
                    </a>

                    <div style="
                        position: absolute;
                        bottom: 0;
                        left: 0;
                        width: 100%;
                        background: rgba(0, 0, 0, 0.6);
                        color: #fff;
                        padding: 10px;
                    ">
                        <h4 style="margin: 0; font-size: 18px; font-weight: bold;">
                            <a href="{{ route('detail-vehicle', $vehicle->slug) }}" style="color: #ffc107; text-decoration: none;">
                                {{ $vehicle->name }}
                            </a>
                        </h4>
                        <div class="row" style="font-size: 14px; margin-top: 8px;">
                            <div class="col-md-6">
                                <span><i class="fa fa-dashboard"></i> Hãng: {{ $vehicle->brand }}</span>
                                <br>
                                <span><i class="fa-solid fa-palette"></i> Màu: {{ $vehicle->color }}</span>
                                <br>
                            </div>
                            <div class="col-md-6">
                                <span><i class="fa fa-users"></i> Số chỗ: {{ $vehicle->seats }}</span>
                                <br>
                                <span><i class="fa-solid fa-couch"></i> Số chỗ: {{ $vehicle->quantity }}</span>
                            </div>
                        </div>
                        <div style="margin-top: 10px; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-size: 16px; font-weight: bold; color: #ffc107;">
                                {{ number_format($vehicle->price_per_day, 0, ',', '.') }} VNĐ/Ngày
                            </span>
                            <a href="{{ route('detail-vehicle', $vehicle->slug) }}"
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
