<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <style>
        body {
            background: #007bff;
            background: linear-gradient(to right, #0062E6, #33AEFF);
        }

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
        }

        .btn-google {
            color: white !important;
            background-color: #ea4335;
        }

        .btn-facebook {
            color: white !important;
            background-color: #3b5998;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">

                @if (Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                        <strong>Sukses!</strong> Akun anda berhasil dibuat.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (Session::get('error'))
                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                        <strong>Oops!</strong> Email atau password salah.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card border-0 shadow rounded-3 mb-5 mt-2">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
                        <form action="{{ route('login.authenticate') }}" method="POST">
                            @csrf

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="name"
                                    placeholder="name@example.com" required>
                                <label for="floatingInput">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" name="password"
                                    placeholder="Password" required>
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign
                                    In</button>

                                <br>
                                <a href="{{ route('register') }}">Register Now</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card border-0 shadow rounded-3 mb-5 mt-2">
                    <div class="card-body p-sm-3">
                        <div class="fs-3 text-center mb-2">Akun Login</div>
                        <div class="d-flex flex-row justify-content-center flex-wrap">
                            <ul class="mx-auto">
                                <li>
                                    <div class="fs-5">Admin</div>
                                    <div class="fs-6">Username : Admin</div>
                                    <div class="fs-6">Password : password</div>
                                </li>
                            </ul>
                            <ul class="mx-auto">
                                <li>
                                    <div class="fs-5">Kabag Administrasi</div>
                                    <div class="fs-6">Username : Yanti</div>
                                    <div class="fs-6">Password : password</div>
                                </li>
                            </ul>
                            <ul class="mx-auto">
                                <li>
                                    <div class="fs-5">Kabag Keuangan</div>
                                    <div class="fs-6">Username : Yanto</div>
                                    <div class="fs-6">Password : password</div>
                                </li>
                            </ul>
                            <ul class="mx-auto">
                                <li>
                                    <div class="fs-5">Kabag Marketing</div>
                                    <div class="fs-6">Username : Suryana</div>
                                    <div class="fs-6">Password : password</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
