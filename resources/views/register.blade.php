<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/logospk.png">
    <title>Rental Mobil</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url(assets/images/big/auth-bg.jpg) no-repeat center center;">
            {{-- <div class="auth-box row"> --}}
                {{-- <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(assets/images/big/3.jpg);">
                </div> --}}
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                            {{-- <img style="width: 150px" src="assets/images/logopt.png" alt="wrapkit"> --}}
                        </div>
                        <h2 class="mt-3 text-center">Regsiter</h2>
                        <p class="text-center">Rental Mobil</p>
                        @if(session()->has('loginError'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('loginError') }}
                        </div>
                        @endif
                        <!-- ... (bagian lain dari HTML) ... -->
                        <form class="mt-4" action="/register" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="name">name</label>
                                        <input class="form-control" name="name" id="name" type="text" placeholder="Masukkan name" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="invalid-feedback mb-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="address">address</label>
                                        <input class="form-control" name="address" id="address" type="text" placeholder="Masukkan address" value="{{ old('address') }}">
                                        @error('address')
                                            <div class="invalid-feedback mb-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="number">Nomor Telepon</label>
                                        <input class="form-control" name="number" id="number" type="number" placeholder="Masukkan nomor telepon" value="{{ old('number') }}">
                                        @error('number')
                                            <div class="invalid-feedback mb-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="sim">Nomor SIM</label>
                                        <input class="form-control" name="sim" id="sim" type="number" placeholder="Masukkan nomor SIM" value="{{ old('sim') }}">
                                        @error('sim')
                                            <div class="invalid-feedback mb-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="password">Password</label>
                                        <input class="form-control" name="password" id="password" type="password" placeholder="Masukkan password">
                                        @error('password')
                                            <div class="invalid-feedback mb-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <input type="hidden" name="roles" value="admin">
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-dark">Register</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    Sudah memiliki akun? <a href="/login" class="text-danger">Sign In</a>
                                </div>
                            </div>
                        </form>
                        <!-- ... (bagian lain dari HTML) ... -->

                    </div>
                </div>
            {{-- </div> --}}
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>