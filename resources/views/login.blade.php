<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Login LMS')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                {{-- <img src="{{ asset('assets/images/logo.svg') }}" alt="logo"> --}}
                            </div>
                            <h4>Hello! Let's get started</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>
                            <form id="loginForm" class="pt-3">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">SIGN IN</button>
                                <div class="mt-3 text-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input" name="remember">
                                            Keep me signed in
                                        </label>
                                    </div>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Don't have an account? <a href="{{ url('register') }}" class="text-primary">Create</a>
                                </div>
                            </form>
                            <div id="responseMessage" class="mt-3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <script>
        document.getElementById('loginForm').addEventListener('submit', async function(event) {
            event.preventDefault();

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            try {
                const response = await fetch('/api/login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({ email, password })
                });

                const data = await response.json();

                const messageDiv = document.getElementById('responseMessage');
                messageDiv.innerHTML = '';

                if (response.ok && data.token) {
                    messageDiv.innerHTML = `
                        <div class="alert alert-success">Login Berhasil! Token Anda: ${data.token}</div>
                    `;
                    setTimeout(() => {
                        window.location.href = '/dashboard'; // Ganti URL sesuai dengan rute dashboard Anda
                    }, 1000);
                } else {
                    messageDiv.innerHTML = `
                        <div class="alert alert-danger">${data.message || 'Login gagal.'}</div>
                    `;
                }
            } catch (error) {
                console.error(error);
                const messageDiv = document.getElementById('responseMessage');
                messageDiv.innerHTML = `
                    <div class="alert alert-danger">Terjadi kesalahan pada aplikasi. Silakan coba lagi.</div>
                `;
            }
        });
    </script>
</body>

</html>
