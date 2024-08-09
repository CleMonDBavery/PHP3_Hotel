<section>
    <header class="mb-4">
        <h2 class="h4 font-weight-bold text-primary">
            {{ __('Thông tin hồ sơ') }}
        </h2>

        <p class="mt-2 text-muted">
            {{ __("Cập nhật thông tin hồ sơ và địa chỉ email của bạn.") }}
        </p>
    </header>

    <!-- Form gửi xác thực email -->
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <!-- Form cập nhật hồ sơ -->
    <form method="post" action="{{ route('profile.update') }}" class="mt-4">
        @csrf
        @method('patch')

        <div class="mb-3">
            <label for="name" class="form-label">{{ __('Tên') }}</label>
            <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}"
                   required autofocus autocomplete="name"/>
            @error('name')
            <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input id="email" name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}"
                   required autocomplete="username"/>
            @error('email')
            <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-3">
                    <p class="text-muted">
                        {{ __('Địa chỉ email của bạn chưa được xác minh.') }}

                        <button form="send-verification" class="btn btn-link p-0 text-primary">
                            {{ __('Nhấn vào đây để gửi lại email xác minh.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 text-success">
                            {{ __('Một liên kết xác minh mới đã được gửi đến địa chỉ email của bạn.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-primary">{{ __('Lưu') }}</button>

            @if (session('status') === 'profile-updated')
                <p class="text-success mb-0" x-data="{ show: true }" x-show="show" x-transition
                   x-init="setTimeout(() => show = false, 2000)">
                    {{ __('Đã lưu.') }}
                </p>
            @endif
        </div>
    </form>
</section>
