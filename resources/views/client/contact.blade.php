@extends('layouts.client.app')
@section('title')
    <title> Liên Hệ</title>
@endsection
@section('content')
<div class="back_re">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>Liên hệ</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  contact -->
<div class="contact">
    <div class="container">
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
                            <textarea class="textarea" placeholder="Tin nhắn" type="type"
                                      Message="Name"></textarea>
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

@endsection