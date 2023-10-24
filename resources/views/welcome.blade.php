<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/uplon/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Apr 2023 12:15:11 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Log In | Tshitshite & Bros|Funeral Undertaker</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />

    </head>

    <body class="authentication-bg"style="background: url('assets/images/bg.jpg');background-size: cover;background-position: center;">
    <style>
        .card{
            background-color:#00aced!important;
        }
        .card {
                position: relative;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                min-width: 0;
                word-wrap: break-word;
                background-color: rgba(0, 0, 0, 0.1);
                background-clip: border-box;
                border: 0 solid rgba(0, 0, 0, 0.125);
                border-radius: 0.25rem;
            }
            body {
                    margin: 0;
                    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                    font-size: 0.9rem;
                    font-weight: 400;
                    line-height: 1.5;
                    color: #2c313e;
                    text-align: left;
                    background-color: rgba(0, 0, 0, 0.1);
                    margin-bottom: 24px;
                }


            .account-card-box .card {
                    border: 4px solid #64b0f2;
                    background-color: #fff;
                    background-clip: border-box;
                    border: 1px solid #eee;
                }
                .account-card-box {
                    border: 4px solid #64b0f2;
                    background-color: #fff;
                    background-clip: border-box;
                    border: 1px solid #eee;
                    margin-bottom: 24px;
                }
                .card {
                    background-color: #fff!important;
                }
    </style>

        <div class="account-pages pt-2 my-5">
            <div class="container" >
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-3 col-xl-5">
                        
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mt-4">
                                    <div class="mb-3">
                                        <a href="index.html"><img src="assets/images/logo.png" height="140" alt="logo"></a>
                                    </div>
                                </div>
                                <style>
                                    .btn-primary {
                                        color: #fff;
                                        background-color: #64b0f2;
                                        border-color: #64b0f2;
                                    }
                                    btn {
                                            display: inline-block;
                                            font-weight: 400;
                                            color: #495057;
                                            text-align: center;
                                            vertical-align: middle;
                                            -webkit-user-select: none;
                                            -moz-user-select: none;
                                            -ms-user-select: none;
                                            user-select: none;
                                            background-color: transparent;
                                            border: 1px solid transparent;
                                            padding: 0.45rem 0.9rem;
                                            font-size: 0.9rem;
                                            line-height: 1.5;
                                            border-radius: 0.30rem;
                                        }
                                </style>
                                <div class="p-3">
                                    <h4 class="font-size-18 mt-2 text-center">Welcome Back !</h4>
                                    <p class="text-muted text-center mb-4">Sign in to continue to Tshitshite Dashboard.</p>
                                    @if(Session::has('fail'))
                                        <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                            <i class="mdi mdi-cancel"></i><strong> Oh snap!</strong>{{Session::get('fail')}}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @elseif(Session::has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <i class="mdi mdi-18px mdi-account-check"></i><strong> Well done! </strong>{{Session::get('success')}}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif
                                    <form class="form-horizontal" action="{{ url('/login') }}" method="post">
                                    @csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="username" style="margin-left:2%">Email</label>
                                            <input type="text" class="form-control" name="email" id="username" placeholder="Enter email"style="border-radius:20rem ! important;">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="userpassword"style="margin-left:2%">Password</label>
                                            <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password"style="border-radius:20rem ! important;">
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-sm-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="customControlInline">
                                                    <label class="form-check-label" for="customControlInline">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-end">
                                                <button class="btn w-md waves-effect waves-light" type="submit" style="border-radius:25rem ! important;margin-left:60%;background: rgb(8, 21, 70);">Log In</button>
                                            </div>
                                        </div>

                                        <div class="mb-0 row">
                                            <div class="col-12 mt-4">
                                                <a href="{{ url('/forgotten-password') }}" class="text-muted"><i class="mdi mdi-lock"></i> Forgotten password?</a>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                            
                        </div>
                       
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <div class="mt-1 text-center position-relative">
                            <p class="text-white"><script>document.write(new Date().getFullYear())</script> © Tshitshithe & Bros Funeral Undertakers.</br> Crafted with <i class="mdi mdi-heart text-danger"></i> by Tendai ICT</p>
                        </div>
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/uplon/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Apr 2023 12:15:11 GMT -->
</html>
