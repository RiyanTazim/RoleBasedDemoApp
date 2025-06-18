<!doctype html>
<html lang="en" data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" dir="ltr"
    data-pc-theme="dark">

<head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/phosphor/duotone/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link" />
</head>

<body>
    <div class="auth-main relative">
        <div class="auth-wrapper v1 flex items-center w-full h-full min-h-screen">
            <div class="auth-form flex items-center justify-center grow flex-col min-h-screen relative p-6 ">
                <div class="w-full max-w-[350px] relative">
                    <div class="auth-bg ">
                        <span
                            class="absolute top-[-100px] right-[-100px] w-[300px] h-[300px] block rounded-full bg-theme-bg-1 animate-[floating_7s_infinite]"></span>
                        <span
                            class="absolute top-[150px] right-[-150px] w-5 h-5 block rounded-full bg-primary-500 animate-[floating_9s_infinite]"></span>
                        <span
                            class="absolute left-[-150px] bottom-[150px] w-5 h-5 block rounded-full bg-theme-bg-1 animate-[floating_7s_infinite]"></span>
                        <span
                            class="absolute left-[-100px] bottom-[-100px] w-[300px] h-[300px] block rounded-full bg-theme-bg-2 animate-[floating_9s_infinite]"></span>
                    </div>
                    <div class="card sm:my-12 w-full shadow-none">
                        <div class="card-body !p-10">
                            <div class="text-center mb-8">
                                <a href="#"><img src="{{ asset('assets/images/logo-dark.svg') }}" alt="img"
                                        class="mx-auto auth-logo" /></a>
                            </div>

                            <!-- Session Status -->
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <h4 class="text-center font-medium mb-4">Login</h4>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <!-- Email -->
                                <div class="mb-3">
                                    <input type="email" name="email" id="email"
                                        class="form-control @error('email') is-invalid @enderror" value=""
                                        required autofocus placeholder="Email Address" autocomplete="new-email" />
                                    @error('email')
                                        <div class="text-sm text-red-600 mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="mb-4">
                                    <input type="password" name="password" id="password"
                                        class="form-control @error('password') is-invalid @enderror" required
                                        placeholder="Password" autocomplete="new-password" />
                                    @error('password')
                                        <div class="text-sm text-red-600 mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Remember Me & Forgot Password -->
                                <div class="flex mt-1 justify-between items-center flex-wrap">
                                    <div class="form-check">
                                        <input class="form-check-input input-primary" type="checkbox" name="remember"
                                            id="remember" {{ old('remember') ? 'checked' : '' }} />
                                        <label class="form-check-label text-muted" for="remember">
                                            {{ __('Remember me') }}
                                        </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <h6 class="font-normal text-primary-500 mb-0">
                                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                                        </h6>
                                    @endif
                                </div>

                                <!-- Login Button -->
                                <div class="mt-4 text-center">
                                    <button type="submit" class="btn btn-primary mx-auto shadow-2xl">
                                        {{ __('Log in') }}
                                    </button>
                                </div>
                            </form>

                            <!-- Register Link -->
                            <div class="flex justify-between items-end flex-wrap mt-4">
                                <h6 class="font-medium mb-0">Don't have an Account?</h6>
                                <a href="{{ route('register') }}" class="text-primary-500">Create Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Required JS -->
        <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/icon/custom-icon.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>
        <script src="{{ asset('assets/js/component.js') }}"></script>
        <script src="{{ asset('assets/js/theme.js') }}"></script>
        <script src="{{ asset('assets/js/script.js') }}"></script>

        <!-- Layout Init Scripts -->
        <script>
            layout_change('false');
            layout_theme_sidebar_change('dark');
            change_box_container('false');
            layout_caption_change('true');
            layout_rtl_change('false');
            preset_change('preset-1');
            main_layout_change('vertical');
        </script>
    </div>
</body>

</html>
