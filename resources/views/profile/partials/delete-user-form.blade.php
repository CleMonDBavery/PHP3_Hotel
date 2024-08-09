<section class="space-y-4">
    <header>
        <h2 class="h4 font-weight-bold text-primary">
            {{ __('Xóa Tài khoản') }}
        </h2>

        <p class="mt-2 text-muted">
            {{ __('Khi tài khoản của bạn bị xóa, tất cả tài nguyên và dữ liệu của nó sẽ bị xóa vĩnh viễn. Trước khi xóa tài khoản của bạn, hãy tải xuống bất kỳ dữ liệu hoặc thông tin nào mà bạn muốn giữ lại.') }}
        </p>
    </header>

    <button
        class="btn btn-danger"
        type="button"
        data-bs-toggle="modal"
        data-bs-target="#confirmUserDeletionModal">
        {{ __('Xóa Tài khoản') }}
    </button>

    <!-- Modal -->
    <div class="modal fade" id="confirmUserDeletionModal" tabindex="-1" aria-labelledby="confirmUserDeletionModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmUserDeletionModalLabel">{{ __('Xác nhận xóa tài khoản') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="{{ route('profile.destroy') }}" class="p-4">
                    @csrf
                    @method('delete')

                    <div class="modal-body">
                        <p class="mb-3">
                            {{ __('Một khi tài khoản của bạn bị xóa, tất cả tài nguyên và dữ liệu của nó sẽ bị xóa vĩnh viễn. Vui lòng nhập mật khẩu của bạn để xác nhận rằng bạn muốn xóa tài khoản của mình vĩnh viễn.') }}
                        </p>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Mật khẩu') }}</label>
                            <input
                                id="password"
                                name="password"
                                type="password"
                                class="form-control"
                                placeholder="{{ __('Mật khẩu') }}"
                            />
                            @error('password')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Hủy') }}</button>
                        <button type="submit" class="btn btn-danger">{{ __('Xóa Tài khoản') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
