@extends('layouts.client.app')
@section('title')
    <title> Bài viết </title>
@endsection
@section('content')

    <div class="back_re">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Bài viết</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <p class="margin_0">Tất cả bài viết của chúng tôi</p>
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
@endsection

