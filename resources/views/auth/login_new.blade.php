<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.partials.head.head-meta')
    <title>Sign In | Dasher - Responsive Bootstrap 5 Admin Dashboard</title>
    @include('backend/partials/head/head-links')
</head>

<body>
    <main class="d-flex flex-column justify-content-center vh-100">
        <!--Sign up start-->
        <section>
            <div class="container">
                <div class="row mb-8">
                    <div class="col-xl-4 offset-xl-4 col-md-12 col-12">
                        <div class="text-center">
                            <a href="../../index.html"
                                class="fs-2 fw-bold d-flex align-items-center gap-2 justify-content-center mb-6">
                                <img src="{{ asset('backend/assets/images/brand/logo/logo-icon.svg') }}" alt="" />
                                <span>Dasher</span>
                            </a>
                            <h1 class="mb-1">Welcome Back</h1>
                            @if (Route::has('register'))
                                <p class="mb-0">
                                    Don’t have an account yet?
                                    <a href="{{ route('register') }}" class="text-primary">Register here</a>
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-12">
                        <div class="card card-lg mb-6">
                            <div class="card-body p-6">
                                <form class="needs-validation mb-6" novalidate method="POST"
                                    action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="signinEmailInput" class="form-label">
                                            Email
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="signinEmailInput" name="email" required />
                                        <div class="invalid-feedback">Please enter email.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formSignUpPassword" class="form-label">Password</label>
                                        <div class="password-field position-relative">
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror fakePassword"
                                                id="formSignUpPassword" name="password" required />
                                            <span><i class="ti ti-eye-off passwordToggler"></i></span>
                                            <div class="invalid-feedback">Please enter password.</div>
                                        </div>
                                    </div>

                                    <div class="mb-4 d-flex align-items-center justify-content-between">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="rememberMeCheckbox"
                                                {{ old('remember') ? 'checked' : '' }} name="remember" />
                                            <label class="form-check-label" for="rememberMeCheckbox">Remember me</label>
                                        </div>

                                        <div><a href="forget-password.html" class="text-primary">Forgot Password</a>
                                        </div>
                                    </div>

                                    <div class="d-grid">
                                        <button class="btn btn-primary" type="submit">Sign In</button>
                                    </div>
                                </form>

                                <div class="text-center">
                                    <span>© {{ \Carbon\Carbon::now()->format('Y') }} TIK RSUP Surakarta</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Sign up end-->
        <div class="position-absolute end-0 bottom-0 m-4">
            <div class="dropdown">
                <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center" type="button"
                    aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                    <i class="bi theme-icon-active lh-1"><i class="bi theme-icon bi-sun-fill"></i></i>
                    <span class="visually-hidden bs-theme-text">Toggle theme</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow">
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center active"
                            data-bs-theme-value="light" aria-pressed="true">
                            <i class="ti theme-icon ti ti-sun"></i>
                            <span class="ms-2">Light</span>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center"
                            data-bs-theme-value="dark" aria-pressed="false">
                            <i class="ti theme-icon ti-moon-stars"></i>
                            <span class="ms-2">Dark</span>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center"
                            data-bs-theme-value="auto" aria-pressed="false">
                            <i class="ti theme-icon ti-circle-half-2"></i>
                            <span class="ms-2">Auto</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </main>

    @include('backend/partials/scripts')
    <script src="@@webRoot/assets/js/vendors/password.js"></script>
</body>

</html>
