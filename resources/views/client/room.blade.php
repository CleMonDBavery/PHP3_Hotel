@extends('layouts.client.app')
@section('title')
    <title>Phòng</title>
@endsection

@section('content')
<div class="back_re">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>Phòng</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- our_room -->
<div class="our_room">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <p class="margin_0">Danh mục phòng</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover" class="room">
                    <div class="room_img">
                        <figure><img src="{{asset('client/images/room1.jpg')}}" alt="#"/></figure>
                    </div>
                    <div class="bed_room">
                        <h3>Phòng tiêu chuẩn </h3>
                        <p>Phòng tiêu chuẩn với các tiện nghi cơ bản, phù hợp cho những ai tìm kiếm sự đơn giản và tiết
                            kiệm</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover" class="room">
                    <div class="room_img">
                        <figure><img src="{{asset('client/images/room2.jpg')}}" alt="#"/></figure>
                    </div>
                    <div class="bed_room">
                        <h3>Phòng cao cấp</h3>
                        <p>Căn hộ sang trọng và rộng rãi phù hợp cho những ai muốn trải nghiệm nghỉ dưỡng đặc biệt.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover" class="room">
                    <div class="room_img">
                        <figure><img src="{{asset('client/images/room3.jpg')}}" alt="#"/></figure>
                    </div>
                    <div class="bed_room">
                        <h3>Căn hộ sang trọng</h3>
                        <p>Phòng cao cấp dành cho người đi công tác, với các tiện ích và không gian làm việc riêng
                            biệt. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover" class="room">
                    <div class="room_img">
                        <figure><img src="{{asset('client/images/room4.jpg')}}" alt="#"/></figure>
                    </div>
                    <div class="bed_room">
                        <h3>Phòng gia đình</h3>
                        <p>Phòng dành cho gia đình, có diện tích lớn và các tiện nghi phù hợp để cả gia đình có thể cùng
                            lưu trú. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover" class="room">
                    <div class="room_img">
                        <figure><img src="{{asset('client/images/room5.jpg')}}" alt="#"/></figure>
                    </div>
                    <div class="bed_room">
                        <h3>Phòng View</h3>
                        <p> Phòng có view đẹp ra bên ngoài như biển, thành phố, hoặc vườn, mang lại trải nghiệm thư giãn
                            và đẳng cấp.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover" class="room">
                    <div class="room_img">
                        <figure><img src="{{asset('client/images/room6.jpg')}}" alt="#"/></figure>
                    </div>
                    <div class="bed_room">
                        <h3>Phòng VIP</h3>
                        <p>Phòng có các tiện nghi và không gian nghỉ ngơi cao cấp hơn, thường đi kèm với dịch vụ khách
                            hàng tốt nhất </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
