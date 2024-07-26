@extends('layouts.client.app')
@section('title')
    <title>Giới thiệu</title>
@endsection
@section('content')

    <div class="back_re">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Giới Thiệu</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about -->
    <div class="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="titlepage">

                        <p class="margin_0">Khách sạn của chúng tôi là điểm đến lý tưởng cho những ai tìm kiếm sự sang
                            trọng và tiện nghi tại trung tâm thành phố. Với phòng nghỉ đầy đủ tiện nghi và dịch vụ chăm
                            sóc khách hàng tận tâm, chúng tôi cam kết mang đến trải nghiệm lưu trú tuyệt vời nhất cho
                            quý khách. Hãy đến với chúng tôi và khám phá không gian ấm cúng, phục vụ chu đáo và không
                            gian nghỉ ngơi thư giãn tại Khách sạn của chúng tôi. </p>
                        <a class="read_more" href="Javascript:void(0)"> Đọc thêm</a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about_img">
                        <figure><img src=" {{asset('client/images/about.png')}}" alt="#"/></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->

@endsection
