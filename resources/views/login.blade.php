<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Optik Sebintang - Login</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="../plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="accountbg"></div>

    <div class="wrapper-page">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5">
                    <div class="card card-pages shadow-none mt-4">
                        <div class="card-body">
                            <div class="text-center mt-0 mb-3">
                                <a href="#" class="logo logo-admin">
                                    <img src="assets/images/optik3.svg" class="mt-3" alt="" height="26"></a>
                                <p class="text-muted w-75 mx-auto mb-4 mt-4">Masukkan Username dan Password Anda</p>
                            </div>

                            <form class="form-horizontal mt-4" action="{{ route('loginProses') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <div class="col-12">
                                        <label for="username">Username</label>
                                        <input class="form-control" type="text" id="username" placeholder="Username" name="username" autocomplete="off">
                                        @error('username')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-12">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                                        @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-12">
                                        <div class="checkbox checkbox-primary">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="showPassword">
                                                <label class="custom-control-label" for="showPassword"> Tampilkan Password</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group text-center mt-3">
                                    <div class="col-12">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                                        {{-- <a href="/dashboard" class="btn btn-primary btn-block waves-effect waves-light">Log In</a> --}}
                                    </div>
                                </div>

                                <div class="form-group text-center mt-4">
                                    <div class="col-12">
                                        <div class="float-left">
                                            {{-- <a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock mr-1"></i> Forgot your password?</a> --}}
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>

                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
    </div>

    <!-- jQuery  -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.min.js"></script>

    <script src="../plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- Sweet-Alert  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

    <!-- sweet alert success-->
    <script>
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session('success') }}',
                showConfirmButton: true,
                timer: 2000
            })
        @endif
    </script>

    <!-- show password-->
    <script>
        $(document).ready(function() {
            $('#showPassword').click(function() {
                if ($(this).is(':checked')) {
                    $('#password').attr('type', 'text');
                } else {
                    $('#password').attr('type', 'password');
                }
            });
        });
    </script>

</body>

</html>
