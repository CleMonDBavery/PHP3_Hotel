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
                @foreach ($roomTypes as $roomType)
                    <div class="col-md-4 col-sm-6">
                        <div id="serv_hover" class="room">
                            <div class="room_img">
                                <figure>
                                    <img
                                        src="{{ asset('images/' . ($roomType->image ? $roomType->image->path : 'default.jpg')) }}"
                                </figure>
                            </div>
                            <div class="bed_room">
                                <h3><a href="{{ route('rooms.detail', $roomType->id) }}">{{ $roomType->title }}</a></h3>
                                <p>{{ $roomType->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
