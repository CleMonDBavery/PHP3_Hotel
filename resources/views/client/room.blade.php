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
            @foreach ($rooms as $result)
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <a href="{{ route('room_detail', $result->id) }}" style="color: black">
                        <div class="room_img">
                            <figure><img
                                    src="{{ asset('images/' . ($result->image ? $result->image->path : 'default.jpg')) }}"
                                    alt="{{ $result->image ? $result->image->name : 'Default Image' }}">
                            </figure>
                        </div>
                        <div class="bed_room">
                            <h3>{{ $result->title }}</h3>
                            <p>{{ $result->description }}</p>
                        </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
