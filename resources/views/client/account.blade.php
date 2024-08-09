@extends('layouts.client.app')
@section('title')
    <title>Tài khoản</title>
@endsection
@section('content')
<section id="background">
    <div id="logreg-forms">
        <form class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Đăng nhập</h1>
            <div class="social-login">
                <button class="btn google-btn social-btn w-100" type="button"><span><i class="fab fa-google-plus-g"></i> Đăng nhập bằng google</span> </button>
            </div>
            <p style="text-align:center"> OR </p>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email" autofocus="">
            <input type="password" id="inputPassword" class="form-control" placeholder="Mật khẩu">

            <button class="btn btn-dark btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Đăng nhập</button>
            <a href="#" id="forgot_pswd">Quên mật khẩu?</a>
            <hr>
            <!-- <p>Don't have an account!</p>  -->
            <button class="btn btn-secondary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i>
               Tạo tài khoảng mới</button>
        </form>



        <form action="" class="form-signup">
        <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Đăng kí</h1>
            <div class="social-login">
                <button class="btn google-btn social-btn w-100" type="button"><span><i class="fab fa-google-plus-g"></i> Đăng kí bằng google</span> </button>
            </div>

            <p style="text-align:center">Hoặc</p>

            <input type="text" id="user-name" class="form-control" placeholder="Họ và tên" autofocus="">
            <input type="email" id="user-email" class="form-control" placeholder="Email " autofocus="">
            <input type="password" id="user-pass" class="form-control" placeholder="Mật kẩu" autofocus="">
            <input type="password" id="user-repeatpass" class="form-control" placeholder="Nhập lại mật khẩu" autofocus="">

            <button class="btn btn-dark btn-block" type="submit"><i class="fas fa-user-plus"></i>Đăng kí</button>
            <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Trở lại</a>
        </form>
    </div>
</section>
@endsection
