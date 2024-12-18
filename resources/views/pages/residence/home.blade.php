@extends('layout')

@section('content')

{{-- Danh sách các nơi Lưu trú --}}
<div class="container" style="width: 90%; margin: auto;">
    <div style="text-align: center; margin-bottom: 20px;">
        <h2 style="color: #3E9FFD; font-size: 30px;" class="text-uppercase"><strong>Danh sách Lưu trú</strong></h2>
    </div>

    @if($residences->isEmpty())
        <div style="text-align: center; background: #fff3cd; padding: 15px; border: 1px solid #ffeeba; color: #856404;">
            Hiện tại chưa có nơi Lưu trú.
        </div>
    @else
        <div style="display: flex; flex-wrap: wrap; gap: 20px;">
            @foreach($residences as $residence)
                <div style="width: 32%; position: relative; overflow: hidden; border-radius: 8px;">
                    <a href="{{ route('detail-residence', $residence->slug) }}">
                        <img src="{{ asset('upload/residences/'.$residence->image) }}"
                             style="width: 100%; height: 250px; object-fit: cover;"
                             alt="{{ $residence->name }}">
                    </a>

                    <div style="
                        position: absolute;
                        bottom: 0;
                        left: 0;
                        width: 100%;
                        background: rgba(0, 0, 0, 0.6);
                        color: #fff;
                        padding: 10px;
                        text-align: center;
                    ">
                        <h4 style="margin: 0; font-size: 18px; font-weight: bold;">
                            <a href="{{ route('detail-residence', $residence->slug) }}" style="color: #ffc107; text-decoration: none;">
                                {{ $residence->name }}
                            </a>
                        </h4><hr>
                        <div style="margin-top: 10px; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-size: 16px; font-weight: bold;">
                                {{ number_format($residence->price_per_night, 0, ',', '.') }} VNĐ/Đêm
                            </span>
                            <a href="{{ route('detail-residence', $residence->slug) }}"
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
