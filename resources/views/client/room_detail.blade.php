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
                    <h2>Phòng tiêu chuẩn</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- our_room -->
<div class="our_room">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-8">
                <div id="serv_hover" class="room">
                    <div class="room_img">
                        <figure><img src="{{asset('client/images/room1.jpg')}}" alt="#" /></figure>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="col-12">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img src="{{asset('client/images/room1.jpg')}}" alt="#" /></figure>
                        </div>
                    </div>
                </div>
                <div class="col-12 ">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img src="{{asset('client/images/room1.jpg')}}" alt="#" /></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-1">
        <div class="d-flex justify row">
            <div class="col-md-12">
                <div class="d-flex flex-column">
                    <div class="bg-white p-2">
                        <div class="row ">
                            <div class="col-9 mx-auto">
                                <div class="info">
                                    <h5 class="d-block font-weight-bold name">Địa chỉ</h5>
                                    <p>123 Đường ABC, Thành phố XYZ</p>
                                </div>
                                <div class="info">
                                    <h5 class="d-block font-weight-bold name">Dịch vụ</h5>
                                    <p><i class="fas fa-wifi"></i> Wi-Fi miễn phí</p>
                                    <p><i class="fas fa-coffee"></i> Bữa sáng</p>
                                    <p><i class="fas fa-swimmer"></i> Hồ bơi</p>
                                </div>
                            </div>
                            <div class="col-3 ">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Giá/phòng/đêm</h5>
                                        <p class="price">$100</p>
                                        <p class="price-info">Giá đã bao gồm thuế</p>
                                        <a href="{{ route('checkout') }}" class="btn btn-danger btn-block">Đặt ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-1">
        <div class="d-flex justify-content-center row">
            <div class="col-md-12">
                <div class="d-flex flex-column comment-section">
                    <div class="bg-white p-2">
                        <div class="d-flex flex-row user-info"><img class="rounded-circle" src="" width="40">
                            <div class="d-flex flex-column justify-content-start ml-2"><span
                                    class="d-block font-weight-bold name">Khang</span><span
                                    class="date text-black-50">2024</span></div>
                        </div>
                        <div class="mt-2">
                            <p class="comment-text">Dịch vụ rất tốt</p>
                        </div>
                    </div>
                    <div class="bg-light p-2">
                        <div class="d-flex flex-row align-items-start"><textarea
                                class="form-control ml-1 shadow-none textarea"></textarea></div>
                        <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none"
                                type="button">Gửi</button><button
                                class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Hủy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
