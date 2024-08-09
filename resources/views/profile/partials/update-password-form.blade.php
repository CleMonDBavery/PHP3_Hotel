<section>
    <header class="mb-4">
        <h2 class="h4 font-weight-bold text-primary">
            {{ __('Cập nhật Mật khẩu') }}
        </h2>

        <p class="mt-2 text-muted">
            {{ __('Đảm bảo rằng tài khoản của bạn đang sử dụng mật khẩu dài và ngẫu nhiên để bảo mật.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-4">
        @csrf
        @method('put')

        <!-- Current Password -->
        <div class="mb-3">
            <label for="update_password_current_password" class="form-label">{{ __('Mật khẩu hiện tại') }}</label>
            <input id="update_password_current_password" name="current_password" type="password" class="form-control"
                   autocomplete="current-password"/>
            @error('current_password')
            <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>

        <!-- New Password -->
        <div class="mb-3">
            <label for="update_password_password" class="form-label">{{ __('Mật khẩu mới') }}</label>
            <input id="update_password_password" name="password" type="password" class="form-control"
                   autocomplete="new-password"/>
            @error('password')
            <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="update_password_password_confirmation" class="form-label">{{ __('Xác nhận mật khẩu') }}</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password"
                   class="form-control" autocomplete="new-password"/>
            @error('password_confirmation')
            <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>

        <!-- Save Button -->
        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-primary">{{ __('Lưu') }}</button>

            @if (session('status') === 'password-updated')
                <p class="text-success mb-0" x-data="{ show: true }" x-show="show" x-transition
                   x-init="setTimeout(() => show = false, 2000)">
                    {{ __('Đã lưu.') }}
                </p>
            @endif
        </div>
    </form>
</section>
