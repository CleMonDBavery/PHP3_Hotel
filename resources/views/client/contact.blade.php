@extends('layouts.client.app')

@section('title')
    <title>Liên Hệ</title>
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

    <!-- Contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form id="request" action="{{ route('send.email') }}" class="main_form" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Họ và tên" value="{{ old('name') }}" type="text"
                                       name="name">
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email" type="email" value="{{ old('email') }}"
                                       name="email">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Tiêu đề" type="text" value="{{ old('subject') }}"
                                       name="subject">
                                @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Tin nhắn"
                                          name="message">{{ old('message') }}</textarea>
                                @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn" type="submit">Liên hệ</button>
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
    <!-- End contact -->
@endsection
