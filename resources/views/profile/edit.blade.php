@extends('layouts.client.app')
@section('title')
    <title>Thông tin tài khoản</title>
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <!-- Tiêu đề -->
            <div class="col-12 mb-4">
                <h2 class="font-weight-bold text-primary">
                    {{ __('Thông tin tài khoản') }}
                </h2>
            </div>

            <!-- Thông tin cá nhân -->
            <div class="col-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h5 class="mb-0">{{ __('Cập nhật thông tin cá nhân') }}</h5>
                    </div>
                    <div class="card-body">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>

            <!-- Cập nhật mật khẩu -->
            <div class="col-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h5 class="mb-0">{{ __('Cập nhật mật khẩu') }}</h5>
                    </div>
                    <div class="card-body">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>

            <!-- Xóa tài khoản -->
            <div class="col-12 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h5 class="mb-0">{{ __('Xóa tài khoản') }}</h5>
                    </div>
                    <div class="card-body">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
