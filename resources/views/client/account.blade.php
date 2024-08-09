@extends('layouts.client.app')
@section('title')
<title>Thông Tin Tài Khoản</title>
@endsection

@section('content')
<div class="back_re">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>Thông Tin Tài Khoản</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Account Information -->
<div class="container mt-4">
    <div class="row">
        <!-- Profile Sidebar -->
        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="User Avatar">
                    <h5 class="card-title">Nguyễn Văn A</h5>
                    <p class="card-text"><i class="fas fa-envelope"></i> email@example.com</p>
                    <p class="card-text"><i class="fas fa-phone"></i> 0123 456 789</p>
                    <!-- Thay Đổi Ảnh Button -->
                    <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#changeAvatarModal">
                        <i class="fas fa-edit"></i> Thay Đổi Ảnh
                    </button>
                </div>
            </div>
        </div>

<!-- Modal Thay Đổi Ảnh -->
<div class="modal fade" id="changeAvatarModal" tabindex="-1" role="dialog" aria-labelledby="changeAvatarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changeAvatarModalLabel">Thay Đổi Ảnh Đại Diện</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="uploadAvatarForm" method="POST" enctype="multipart/form-data">
                    @csrf <!-- Bảo vệ CSRF -->
                    <div class="form-group">
                        <label for="avatarUpload">Chọn Ảnh Mới:</label>
                        <input type="file" class="form-control-file" id="avatarUpload" name="avatar">
                    </div>
                    <button type="submit" class="btn btn-danger"><i class="fas fa-upload"></i> Tải Lên</button>
                </form>
            </div>
        </div>
    </div>
</div>
        <!-- Profile Details -->
        <div class="col-md-9">
            <div class="info bg-white p-4 mb-3 shadow-sm">
                <h5 class="font-weight-bold"><i class="fas fa-user"></i> Thông Tin Cá Nhân</h5>
                <form>
                    <div class="form-group">
                        <label for="fullName"><i class="fas fa-id-card"></i> Họ và Tên:</label>
                        <input type="text" class="form-control" id="fullName" value="Nguyễn Văn A">
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="fas fa-envelope"></i> Email:</label>
                        <input type="email" class="form-control" id="email" value="email@example.com">
                    </div>
                    <div class="form-group">
                        <label for="phone"><i class="fas fa-phone"></i> Số Điện Thoại:</label>
                        <input type="text" class="form-control" id="phone" value="0123 456 789">
                    </div>
                    <div class="form-group">
                        <label for="address"><i class="fas fa-map-marker-alt"></i> Địa Chỉ:</label>
                        <input type="text" class="form-control" id="address" value="123 Đường ABC, Quận 1, TP.HCM">
                    </div>
                    <div class="form-group">
                        <label for="birthdate"><i class="fas fa-birthday-cake"></i> Ngày Sinh:</label>
                        <input type="date" class="form-control" id="birthdate" value="1990-01-01">
                    </div>
                    <button type="submit" class="btn btn-danger"><i class="fas fa-save"></i> Lưu Thay Đổi</button>
                </form>
            </div>

            <!-- Change Password Section -->
            <div class="info bg-white p-4 mb-3 shadow-sm">
                <h5 class="font-weight-bold"><i class="fas fa-key"></i> Thay Đổi Mật Khẩu</h5>
                <form>
                    <div class="form-group">
                        <label for="currentPassword"><i class="fas fa-lock"></i> Mật Khẩu Hiện Tại:</label>
                        <input type="password" class="form-control" id="currentPassword" placeholder="Nhập mật khẩu hiện tại">
                    </div>
                    <div class="form-group">
                        <label for="newPassword"><i class="fas fa-lock"></i> Mật Khẩu Mới:</label>
                        <input type="password" class="form-control" id="newPassword" placeholder="Nhập mật khẩu mới">
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword"><i class="fas fa-lock"></i> Xác Nhận Mật Khẩu Mới:</label>
                        <input type="password" class="form-control" id="confirmPassword" placeholder="Xác nhận mật khẩu mới">
                    </div>
                    <button type="submit" class="btn btn-danger"><i class="fas fa-save"></i> Cập Nhật Mật Khẩu</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
