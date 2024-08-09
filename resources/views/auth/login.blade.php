<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section class="vh-100">
        <div class="row d-flex justify-content-center align-items-center h-100 mx-0">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                     class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-3 col-lg-6 col-xl-4 ">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div
                        class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start mb-4">
                        <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                        <a href="{{ route('login-by-google') }}">
                            <img
                                src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png">
                        </a>

                        {{-- <button type="button" data-mdb-button-init data-mdb-ripple-init
                            class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                        </button>

                        <button type="button" data-mdb-button-init data-mdb-ripple-init
                            class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-linkedin-in"></i>
                        </button> --}}
                    </div>

                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0">Or</p>
                    </div>

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <x-input-label for="email" class="form-label" :value="__('Email')"/>

                        <x-text-input id="email" class="form-control form-control-lg" type="email" name="email"
                                      :value="old('email')" required autofocus autocomplete="username"
                                      placeholder="Nhập email"/>
                        <x-input-error :messages="$errors->get('email')" class="text-danger mt-2"/>
                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-3">
                        <x-input-label for="password" class="form-label" :value="__('Mật khẩu')"/>
                        <x-text-input id="password" class="form-control form-control-lg" type="password"
                                      name="password" required autocomplete="current-password"
                                      placeholder="Nhập mật khẩu"/>
                        <x-input-error :messages="$errors->get('password')" class="text-danger mt-2"/>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <!-- Checkbox -->
                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="" id="remember_me"
                                   name="remember"/>
                            <label class="form-check-label" for="remember_me">
                                {{ __('Ghi nhớ tôi') }}
                            </label>
                        </div>
                        <a href="{{ route('password.request') }}" class="text-body">{{ __('Quên mật khẩu?') }}</a>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <x-primary-button class="btn btn-primary btn-lg"
                                          style="padding-left: 2.5rem; padding-right: 2.5rem;">
                            {{ __('Đăng nhập') }}
                        </x-primary-button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">
                            {{ __('Bạn chưa có tài khoản?') }} <a href="{{ route('register') }}"
                                                                  class="link-danger">{{ __('Đăng ký') }}</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>


    </section>
</x-guest-layout>
