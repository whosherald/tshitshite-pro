<!doctype html>
<html lang="en">

<!-- Mirrored from themesbrand.com/admiria-multi/layouts/vertical/pages-lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Mar 2022 09:06:15 GMT -->
<head>

        <meta charset="utf-8">
        <title>profile| Tshitshithe</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="../assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="../assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

    </head>

    <body class="authentication-bg"style="background-color:#fff;background-size: cover;background-position: center;">
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
            $email = Session::get('email');
        ?>

        <!-- Loader -->
            <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

         <!-- Begin page -->
         <div class="accountbg" ></div>

        <div class="account-pages mt-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-5 col-xl-6">
                        <div class="card">
                            <div class="card-body" style="background: #ced4da !important;">
                                <div class="text-center mt-4">
                                    <div class="mb-3">
                                        <a href="index.html"><img src="" height="120" alt=""></a>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <h4 class="font-size-18 mt-2 text-center">profile.</h4>
                                    <hr>
                                    <p class="text-muted text-center mb-4">Hello {{ $username }},</p>
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
                                    <form class="form-horizontal" action="{{ url('/usernew-password') }}" method="post">
                                        
                                    @csrf
                                       
                                        
                                        <div class="mb-3">
                                        <label class="form-label" for="userpassword">fullname</label>
                                            <p type="text" name="email" class="form-control" id="userpassword">{{$username}}</p>
                                            <label class="form-label" for="userpassword">Email</label>
                                            <input type="text" name="email" class="form-control" id="userpassword" placeholder="{{$email}}">
                                            
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="userpassword">change password</label>
                                            <input type="password" name="password" class="form-control" id="userpassword" placeholder="">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="userpassword">Confirm password</label>
                                            <input type="password" name="cpassword" class="form-control" id="userpassword" placeholder="">
                                        </div>

                                        <div class="mb-3">
                                            <div class="text-end">
                                                <a href="{{('/dashboard')}}" class="btn w-md waves-effect waves-light" style="background-color:#081546; margin-top:1em ! important;margin-left:-0.5% ! important;cursor: pointer; width:20%;height:2.6em ! important;padding:0.6em">
                                                        <i class="" style="color: white; margin-left:-10%;width:"></i>
                                                                Back
                                                </a>
                                                <button class="btn w-md waves-effect waves-light" type="submit"style="margin-left:80% ! important;margin-top:-4.5em ! important;background: rgb(8, 21, 70);width:20%">Save</button>
                                                
                                                
                                            </div>
                                                    
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>


s
        <!-- JAVASCRIPT -->
        <script src="../assets/libs/jquery/jquery.min.js"></script>
        <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="../assets/libs/simplebar/simplebar.min.js"></script>
        <script src="../assets/libs/node-waves/waves.min.js"></script>

        <script src="../assets/js/app.js"></script>

    </body>

</html>
