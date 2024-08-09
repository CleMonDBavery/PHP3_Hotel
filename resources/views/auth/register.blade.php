<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <section class="vh-100">
        <div class="row d-flex justify-content-center align-items-center h-100 mx-0">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                     class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-3 col-lg-6 col-xl-4 ">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <x-input-label for="name" class="form-label" :value="__('Họ và tên')"/>
                        <x-text-input id="name" class="form-control form-control-lg" type="text" name="name"
                                      :value="old('name')" required autofocus autocomplete="name"
                                      placeholder="Nhập họ và tên"/>
                        <x-input-error :messages="$errors->get('name')" class="text-danger mt-2"/>
                    </div>

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <x-input-label for="email" class="form-label" :value="__('Email')"/>
                        <x-text-input id="email" class="form-control form-control-lg" type="email" name="email"
                                      :value="old('email')" required autocomplete="username" placeholder="Nhập email"/>
                        <x-input-error :messages="$errors->get('email')" class="text-danger mt-2"/>
                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <x-input-label for="password" class="form-label" :value="__('Mật khẩu')"/>
                        <x-text-input id="password" class="form-control form-control-lg" type="password"
                                      name="password" required autocomplete="new-password" placeholder="Nhập mật khẩu"/>
                        <x-input-error :messages="$errors->get('password')" class="text-danger mt-2"/>
                    </div>

                    <!-- Confirm Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <x-input-label for="password_confirmation" class="form-label" :value="__('Nhập lại mật khẩu')"/>
                        <x-text-input id="password_confirmation" class="form-control form-control-lg" type="password"
                                      name="password_confirmation" required autocomplete="new-password"
                                      placeholder="Nhập lại mật khẩu"/>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger mt-2"/>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <x-primary-button class="btn btn-primary btn-lg"
                                          style="padding-left: 2.5rem; padding-right: 2.5rem;">
                            {{ __('Đăng ký') }}
                        </x-primary-button>

                        <a href="{{ route('login-by-google') }}">
                            <img
                                src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png">
                        </a>
                        <p class="small fw-bold mt-2 pt-1 mb-0">
                            {{ __("Bạn đã có tài khoản?") }} <a href="{{ route('login') }}"
                                                                class="link-danger">{{ __('Đăng nhập') }}</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-guest-layout>
