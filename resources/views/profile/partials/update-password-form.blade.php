<section class="mt-5">
    <header class="mb-4">
        <h2 class="h4 text-light">
            {{ __('Update Password') }}
        </h2>
        <p class="text-secondary">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <div class="mb-3" style="max-width: 50%;">
            <label for="update_password_current_password" class="form-label fs-5 text-light">
                {{ __('Current Password') }}
            </label>
            <input
                id="update_password_current_password"
                name="current_password"
                type="password"
                class="form-control bg-dark text-white py-3"
                autocomplete="current-password"
            >
            @if ($errors->updatePassword->get('current_password'))
                <div class="text-danger mt-1">
                    {{ $errors->updatePassword->first('current_password') }}
                </div>
            @endif
        </div>

        <div class="mb-3" style="max-width: 50%;">
            <label for="update_password_password" class="form-label fs-5 text-light">
                {{ __('New Password') }}
            </label>
            <input
                id="update_password_password"
                name="password"
                type="password"
                class="form-control bg-dark text-white py-3"
                autocomplete="new-password"
            >
            @if ($errors->updatePassword->get('password'))
                <div class="text-danger mt-1">
                    {{ $errors->updatePassword->first('password') }}
                </div>
            @endif
        </div>

        <div class="mb-3" style="max-width: 50%;">
            <label for="update_password_password_confirmation" class="form-label fs-5 text-light">
                {{ __('Confirm Password') }}
            </label>
            <input
                id="update_password_password_confirmation"
                name="password_confirmation"
                type="password"
                class="form-control bg-dark text-white py-3"
                autocomplete="new-password"
            >
            @if ($errors->updatePassword->get('password_confirmation'))
                <div class="text-danger mt-1">
                    {{ $errors->updatePassword->first('password_confirmation') }}
                </div>
            @endif
        </div>

        <div class="d-flex align-items-center gap-3 mt-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'password-updated')
                <span class="text-success small">
                    {{ __('Saved.') }}
                </span>
            @endif
        </div>
    </form>
</section>
