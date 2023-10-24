<!doctype html>
<html lang="en">
<head>

        <meta charset="utf-8">
        <title>Lock Screen | Tshitshithe</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

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

    
        <?php
            $username = Session::get('username');
        ?>

        <!-- Loader -->
            <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

         <!-- Begin page -->
         <div class="accountbg" style="background: url('assets/images/bg.jpg');background-size: cover;background-position: center;"></div>

        <div class="account-pages mt-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mt-4">
                                    <div class="mb-3">
                                        <a href="index.html"><img src="assets/images/logo.png" height="120" alt="logo"></a>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <h4 class="font-size-18 mt-2 text-center">Locked.</h4>
                                    <p class="text-muted text-center mb-4">Hello {{ $username }}, enter your email to unlock the account!</p>
                                    @if(Session::has('fail'))
                                        <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                            <i class="mdi mdi-18px mdi-account-key"></i><strong> Oh snap!</strong>{{Session::get('fail')}}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @elseif(Session::has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <i class="mdi mdi-18px mdi-account-check"></i><strong> Well done! </strong>{{Session::get('success')}}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif
                                    <form class="form-horizontal" action="{{ url('/unlock') }}" method="post">
                                    @csrf
                                        <div class="user-thumb text-center">
                                            <img src="assets/images/users/avatar-1.jpg" class="rounded-circle img-thumbnail avatar-lg" alt="thumbnail">
                                            <h6 class="font-size-16 mt-3">{{ $username }}</h6>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="userpassword" style="margin-left:2%">Email</label>
                                            <input type="text" name="email" class="form-control" id="userpassword" placeholder="Enter email" style="border-radius:25rem ! important;">
                                        </div>

                                        <div class="mb-3">
                                            <div class="text-end">
                                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit"style="border-radius:25rem ! important;margin-left:73.5%;background: rgb(8, 21, 70);">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                        <div class="mt-5 text-center position-relative">
                            <p class="text-white"><script>document.write(new Date().getFullYear())</script> © Tshitshithe & Bros Funeral Undertakers. Crafted with <i class="mdi mdi-heart text-danger"></i> by Tendai ICT</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/admiria-multi/layouts/vertical/pages-lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Mar 2022 09:06:15 GMT -->
</html>
