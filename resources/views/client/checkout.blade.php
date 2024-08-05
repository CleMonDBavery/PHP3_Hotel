@extends('layouts.client.app')
@section('title')
<title>Đặt phòng</title>
@endsection

@section('content')
<div class="container">
        <div class="checkout-form">
            <div class="form-title">Đặt Phòng Khách Sạn</div>
            <form>
                <div class="form-group">
                    <label for="fullName"><i class="fas fa-user"></i> Họ và Tên</label>
                    <input type="text" class="form-control" id="fullName" placeholder="Nhập họ và tên của bạn" required>
                </div>
                <div class="form-group">
                    <label for="email"><i class="fas fa-envelope"></i> Địa Chỉ Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Nhập địa chỉ email của bạn" required>
                </div>
                <div class="form-group">
                    <label for="phone"><i class="fas fa-phone"></i> Số Điện Thoại</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Nhập số điện thoại của bạn" required>
                </div>
                <div class="form-group">
                    <label for="checkIn"><i class="fas fa-calendar-alt"></i> Ngày Nhận Phòng</label>
                    <input type="date" class="form-control" id="checkIn" required>
                </div>
                <div class="form-group">
                    <label for="checkOut"><i class="fas fa-calendar-alt"></i> Ngày Trả Phòng</label>
                    <input type="date" class="form-control" id="checkOut" required>
                </div>
                <div class="form-group">
                    <label for="roomType"><i class="fas fa-bed"></i> Loại Phòng</label>
                    <select class="form-control" id="roomType" required>
                        <option value="" disabled selected>Chọn loại phòng</option>
                        <option value="single">Phòng Tiêu chuẩn</option>
                        <option value="double">Phòng Cao cấp</option>
                        <option value="suite">Phòng Gia đình</option>
                        <option value="suite">Phòng Wiew</option>
                        <option value="suite">Phòng VIP</option>
                        <option value="suite">Căn hộ sang trọng</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="paymentMethod"><i class="fas fa-credit-card"></i> Phương Thức Thanh Toán</label>
                    <select class="form-control" id="paymentMethod" required>
                        <option value="" disabled selected>Chọn phương thức thanh toán</option>
                        <option value="credit">Thẻ Tín Dụng</option>
                        <option value="debit">Thẻ Ghi Nợ</option>
                        <option value="paypal">PayPal</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-danger btn-block">Xác Nhận Đặt Phòng</button>
            </form>
        </div>
    </div>

@endsection
