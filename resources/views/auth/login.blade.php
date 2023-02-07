<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MyKasir</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/app.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/pages/auth.css">
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="/login">
                            <img src="{{ asset('template') }}/assets/images/logo/logo.png"alt="Logo">
                        </a>
                    </div>
                        @if(Session::has('pesan'))
                            <div class="alert alert-danger alert-dismissible show fade">
                                {{ Session::get('pesan') }}
                            </div>
                        @endif
                    <h1 class="auth-title">Login</h1>
                    <p class="auth-subtitle mb-5">Login MyKasir Dengan Data Yang Sudah Ada.</p>
                    <form method="POST" action="/login">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="username" name="username" class="form-control form-control-xl"
                                placeholder="Username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        @error('username')
                            <div class="alert alert-danger alert-dismissible show fade">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password" class="form-control form-control-xl"
                                placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        @error('password')
                            <div class="alert alert-danger alert-dismissible show fade">
                                {{ $message }}
                            </div>
                        @enderror
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Login</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                </div>
            </div>
        </div>

    </div>
</body>

</html>
