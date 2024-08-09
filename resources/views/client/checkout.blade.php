@extends('layouts.client.app')
@section('title')
    <title>Đặt phòng</title>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>Thanh Toán</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <div class="info bg-white p-4 mb-3 shadow-sm">
                    <h5 class="font-weight-bold"><i class="fas fa-info-circle"></i> Thông Tin Đặt Phòng</h5>
                    <form>
                        <div class="form-group">
                            <label for="name"><i class="fas fa-user"></i> Họ và Tên:</label>
                            <input type="text" value="{{ Auth::user()->name }}" class="form-control" id="name"
                                   placeholder="Nhập họ và tên">
                        </div>
                        <div class="form-group">
                            <label for="phone"><i class="fas fa-phone"></i> Số Điện Thoại:</label>
                            <input type="text" value="{{ Auth::user()->phone }}" class="form-control" id="phone"
                                   placeholder="Nhập số điện thoại">
                        </div>
                        <div class="form-group">
                            <label for="checkin"><i class="fas fa-calendar-alt"></i> Ngày Nhận Phòng:</label>
                            <input type="date" class="form-control" id="checkin">
                        </div>
                        <div class="form-group">
                            <label for="checkout"><i class="fas fa-calendar-alt"></i> Ngày Trả Phòng:</label>
                            <input type="date" class="form-control" id="checkout">
                        </div>
                        <div class="form-group">
                            <label for="specialRequest"><i class="fas fa-comment-dots"></i> Yêu Cầu Đặc Biệt:</label>
                            <textarea class="form-control" id="specialRequest" rows="3"
                                      placeholder="Nhập yêu cầu đặc biệt (nếu có)"></textarea>
                        </div>

                        .


                        <button type="submit" class="btn btn-danger btn-block"><i class="fas fa-check"></i> Xác Nhận Đặt
                            Phòng
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-receipt"></i> Tóm Tắt Đơn Hàng</h5>
                        <p><i class="fas fa-bed"></i> Phòng Tiêu Chuẩn</p>
                        <p class="price font-weight-bold text-danger"><i class="fas fa-money-bill-wave"></i> Tổng tiền:
                            2.000.000đ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
