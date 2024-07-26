@extends('layouts.client.app')
@section('title')
    <title>Trang chủ</title>
@endsection
@section('content')
    <!-- loader  -->
    {{-- <div class="loader_bg">
       <div class="loader"><img src="{{asset('client/images/loading.gif')}}" alt="#"/></div>
    </div> --}}
    <!-- end loader -->

    <!-- banner -->
    <section class="banner_main">
        <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="{{asset('client/images/banner1.jpg')}}" alt="First slide">
                    <div class="container">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="{{asset('client/images/banner2.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="{{asset('client/images/banner3.jpg')}}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="booking_ocline">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="book_room">
                            <h1>Đặt phòng</h1>
                            <form class="book_now">
                                <div class="row">
                                    <div class="col-md-12">
                                        <span>Arrival</span>
                                        <img class="date_cua" src="{{asset('client/images/date.png')}}">
                                        <input class="online_book" placeholder="Ngày/tháng/năm" type="date"
                                               name="dd/mm/yyyy">
                                    </div>
                                    <div class="col-md-12">
                                        <span>Departure</span>
                                        <img class="date_cua" src="{{asset('client/images/date.png')}}">
                                        <input class="online_book" placeholder="Ngày/tháng/năm" type="date"
                                               name="dd/mm/yyyy">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="book_btn">Đặt phòng</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- about -->
    <div class="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="titlepage">
                        <h2>Giới thiệu</h2>
                        <p>Khách sạn của chúng tôi là điểm đến lý tưởng cho những ai tìm kiếm sự sang trọng và tiện nghi
                            tại trung tâm thành phố. Với phòng nghỉ đầy đủ tiện nghi và dịch vụ chăm sóc khách hàng tận
                            tâm, chúng tôi cam kết mang đến trải nghiệm lưu trú tuyệt vời nhất cho quý khách. Hãy đến
                            với chúng tôi và khám phá không gian ấm cúng, phục vụ chu đáo và không gian nghỉ ngơi thư
                            giãn tại Khách sạn của chúng tôi. </p>
                        <a class="read_more" href="Javascript:void(0)">Đọc thêm</a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about_img">
                        <figure><img src="{{asset('client/images/about.png')}}" alt="#"/></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- our_room -->
    <div class="our_room">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Phòng</h2>
                        <p>Danh mục phòng</p>
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
                            <p>Phòng tiêu chuẩn với các tiện nghi cơ bản, phù hợp cho những ai tìm kiếm sự đơn giản và
                                tiết kiệm</p>
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
                            <p>Căn hộ sang trọng và rộng rãi phù hợp cho những ai muốn trải nghiệm nghỉ dưỡng đặc
                                biệt.</p>
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
                            <p>Phòng dành cho gia đình, có diện tích lớn và các tiện nghi phù hợp để cả gia đình có thể
                                cùng lưu trú. </p>
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
                            <p> Phòng có view đẹp ra bên ngoài như biển, thành phố, hoặc vườn, mang lại trải nghiệm thư
                                giãn và đẳng cấp.</p>
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
                            <p>Phòng có các tiện nghi và không gian nghỉ ngơi cao cấp hơn, thường đi kèm với dịch vụ
                                khách hàng tốt nhất </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end our_room -->
    <!-- gallery -->
    {{--    <div class="gallery">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-md-12">--}}
    {{--                    <div class="titlepage">--}}
    {{--                        <h2>gallery</h2>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-md-3 col-sm-6">--}}
    {{--                    <div class="gallery_img">--}}
    {{--                        <figure><img src="{{asset('client/images/gallery1.jpg')}}" alt="#"/></figure>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3 col-sm-6">--}}
    {{--                    <div class="gallery_img">--}}
    {{--                        <figure><img src="{{asset('client/images/gallery2.jpg')}}" alt="#"/></figure>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3 col-sm-6">--}}
    {{--                    <div class="gallery_img">--}}
    {{--                        <figure><img src="{{asset('client/images/gallery3.jpg')}}" alt="#"/></figure>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3 col-sm-6">--}}
    {{--                    <div class="gallery_img">--}}
    {{--                        <figure><img src="{{asset('client/images/gallery4.jpg')}}" alt="#"/></figure>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3 col-sm-6">--}}
    {{--                    <div class="gallery_img">--}}
    {{--                        <figure><img src="{{asset('client/images/gallery5.jpg')}}" alt="#"/></figure>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3 col-sm-6">--}}
    {{--                    <div class="gallery_img">--}}
    {{--                        <figure><img src="{{asset('client/images/gallery6.jpg')}}" alt="#"/></figure>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3 col-sm-6">--}}
    {{--                    <div class="gallery_img">--}}
    {{--                        <figure><img src="{{asset('client/images/gallery7.jpg')}}" alt="#"/></figure>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3 col-sm-6">--}}
    {{--                    <div class="gallery_img">--}}
    {{--                        <figure><img src="{{asset('client/images/gallery8.jpg')}}" alt="#"/></figure>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- end gallery -->
    <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Bài viết</h2>
                        <p>Bài viết nổi bật </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src=" {{asset('client/images/blog1.jpg')}}" alt="#"/></figure>
                        </div>
                        <div class="blog_room">
                            <h3>Phong cảnh ngoài trời</h3>
                            <span>24/07/2024</span>
                            <p>Tại khách sạn của tôi, phong cảnh ngoài trời thật tuyệt vời và thư giãn. Với khung cảnh
                                xanh mướt của những khu vườn rộng lớn, bạn có thể tận hưởng không gian yên bình và tươi
                                mới.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src=" {{asset('client/images/blog2.jpg')}}" alt="#"/></figure>
                        </div>
                        <div class="blog_room">
                            <h3>Lễ tân thân thiện</h3>
                            <span>24/07/2024</span>
                            <p>Lễ tân của chúng tôi luôn nhiệt tình và thân thiện, sẵn sàng đón tiếp và hỗ trợ quý khách
                                từ khi đặt phòng cho đến khi có được trải trải nghiệm mới mẻ và phong cảnh tại đây lưu
                                trú tại khách sạn. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src=" {{asset('client/images/blog3.jpg')}}" alt="#"/></figure>
                        </div>
                        <div class="blog_room">
                            <h3>Phỏng nổi bật</h3>
                            <span>24/07/2024</span>
                            <p>Lễ tân của chúng tôi luôn nhiệt tình và thân thiện, sẵn sàng đón tiếp và hỗ trợ quý khách
                                từ khi đặt phòng cho đến khi có được trải trải nghiệm mới mẻ và phong cảnh tại đây lưu
                                trú tại khách sạn. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog -->
    <!--  contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Liên hệ</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form id="request" class="main_form">
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="contactus" placeholder="Họ và tên" type="type" name="Name">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email" type="type" name="Email">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Số điện thoại" type="type" name="Phone Number">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message" type="type"
                                          Message="Name">Tin nhắn</textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn">Liên hệ</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="map_main">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France"
                                width="600" height="400" frameborder="0" style="border:0; width: 100%;"
                                allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
    <!--  footer -->

    <!-- end footer -->
    <!-- Javascript files-->
@endsection
