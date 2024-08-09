@extends('layouts.client.app')
@section('title')
    <title>Chi tiết phòng</title>
@endsection

@section('content')
    <div class="back_re">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>{{ $roomType->title }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_room -->
    <div class="container mt-4">

        <div class="mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href=" {{ route('home')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href=" {{ route('room')}}  ">Phòng</a></li>
                    <li class="breadcrumb-item text-dark"> {{ $roomType->title }}</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-md-8">
                <img src="{{ asset('images/' . ($roomType->image ? $roomType->image->path : 'default.jpg')) }}"
                     width="100%">
            </div>
            <div class="row col-md-4">
                <div class="col-md-12">
                    <img src="{{ asset('images/' . ($roomType->image ? $roomType->image->path : 'default.jpg')) }}"
                </div>

            </div>
            <div class="col-md-12 ">
                <img src="{{ asset('images/' . ($roomType->image ? $roomType->image->path : 'default.jpg')) }}"</div>
        </div>
    </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-8">
            <div class="info bg-white p-4 mb-3 shadow-sm">
                <p>{{ $roomType->description }}</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="info bg-white p-4 mb-3 shadow-sm service-info">
                        <h5 class="font-weight-bold">Dịch vụ</h5>
                        <p><i class="fas fa-wifi"></i> Wi-Fi miễn phí</p>
                        <p><i class="fas fa-coffee"></i> Bữa sáng</p>
                        <p><i class="fas fa-swimmer"></i> Hồ bơi</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info bg-white p-4 mb-3 shadow-sm">
                        <h5 class="font-weight-bold">Tiện ích</h5>
                        <p><i class="fas fa-tv"></i> TV màn hình phẳng</p>
                        <p><i class="fas fa-bed"></i> Giường cỡ lớn</p>
                        <p><i class="fas fa-shower"></i> Phòng tắm riêng</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Giá Phòng/ Đêm</h5>
                    <p class="price font-weight-bold text-danger">1.000.000đ</p>
                    <p class="price-info">Giá đã bao gồm thuế</p>
                    <a href="{{ route('checkout') }}" class="btn btn-danger btn-block">Đặt ngay</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="comment-section bg-white p-4 shadow-sm">
                    <h5 class="font-weight-bold">Bình Luận</h5>
                    <div class="comment bg-light p-3 mb-3">
                        <div class="d-flex flex-row user-info">
                            <img class="rounded-circle" src="https://via.placeholder.com/40" width="40">
                            <div class="d-flex flex-column justify-content-start ml-2">
                                <span class="d-block font-weight-bold name">Khang</span>
                                <span class="date text-black-50">2024</span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <p class="comment-text">Dịch vụ rất tốt</p>
                        </div>
                    </div>
                    <div class="bg-light p-3">
                        <div class="d-flex flex-row align-items-start">
                            <textarea class="form-control ml-1 shadow-none textarea"
                                      placeholder="Viết bình luận..."></textarea>
                        </div>
                        <div class="mt-2 text-right">
                            <button class="btn btn-danger btn-sm shadow-none" type="button">Gửi</button>
                            <button class="btn btn-outline-danger btn-sm ml-1 shadow-none" type="button">Hủy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
