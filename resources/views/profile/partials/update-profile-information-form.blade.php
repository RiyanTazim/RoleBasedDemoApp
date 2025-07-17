<section class="mt-5">

    <style>
        .theme-adaptive-input {
            background-color: #f1f1f1;
            /* Light mode */
            color: #212529;
        }

        @media (prefers-color-scheme: dark) {
            .theme-adaptive-input {
                background-color: #333;
                color: #f1f1f1;
            }
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            {{-- <div class="col-md-5"> --}}

            <div class="mb-4 text-start">
                <h2 class="h4 text-light">{{ __('Profile Information') }}</h2>
                <p class="text-secondary">
                    {{ __("Update your account's profile information and email address.") }}
                </p>
            </div>

            {{-- Hidden form for email verification --}}
            <form id="send-verification" method="POST" action="{{ route('verification.send') }}">
                @csrf
            </form>

            {{-- Profile Update Form --}}
            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label for="name" class="form-label text-light fs-5">{{ __('Name') }}</label>
                    <input type="text" id="name" name="name" class="form-control theme-adaptive-input py-3"
                        value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>
                    @error('name')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label text-light fs-5">{{ __('Email') }}</label>
                    <input type="email" id="email" name="email" class="form-control theme-adaptive-input py-3"
                        value="{{ old('email', $user->email) }}" required autocomplete="username">
                    @error('email')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror

                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                        <div class="mt-2">
                            <p class="text-warning small">
                                {{ __('Your email address is unverified.') }}
                                <button form="send-verification" class="btn btn-link p-0 text-warning">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="text-success small mt-1">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif
                        </div>
                    @endif
                </div>

                <div class="d-flex align-items-center gap-3 mt-4">
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                    @if (session('status') === 'profile-updated')
                        <span class="text-success small">{{ __('Saved.') }}</span>
                    @endif
                </div>
            </form>
            {{-- </div> --}}
        </div>
    </div>
</section>
