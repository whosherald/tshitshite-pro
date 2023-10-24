<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from coderthemes.com/uplon/layouts/vertical/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Apr 2023 12:15:43 GMT -->
    <head>
        <meta charset="utf-8" />
        <title>form member|Tshitshite & Bros|Funeral Undertaker</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Responsive Table css -->
        <link href="assets/libs/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />
        {{-- <link href="assets/libs/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" /> --}}
        <link href="assets/css/layout_forms.css" rel="stylesheet"/>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://kit.fontawesome.com/a34114923c.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css">
        <script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>
        <script>
            iziToast.settings({
                resetOnHover: true,
                icon: 'material-icons',
                transitionIn: 'flipInX',
                // transitionOut: 'flipOutX',
                onOpening: function() {
                    console.log('callback abriu!');
                },
                onClosing: function() {
                    console.log("callback fechou!");
                }
            });
        </script>
        <!-- Preloader styles -->
        <style>
            .loader {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(255, 255, 255, 0.8);
                z-index: 9999;
            }

            .loader::before {
                content: "";
                display: block;
                position: absolute;
                top: 50%;
                left: 50%;
                width: 60px;
                height: 60px;
                margin-top: -30px;
                margin-left: -30px;
                border-radius: 50%;
                border: 4px solid transparent;
                border-top-color: #3498db;
                animation: spin 2s linear infinite;
            }

            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
        </style>
        {{-- <link href="assets/css/claims.css" rel="stylesheet"/> --}}
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">
            <!-- Topbar Start -->
            <div class="overall-container" style="">
                <!-- ========== Left Sidebar Start ========== -->
                <div class="left-side-menu" style="flex:2;">

                    <div class="slimscroll-menu">

                        <!--- Sidemenu -->
                        <div id="sidebar-menu">

                            <ul class="metismenu" id="side-menu">
                                <li>
                                    <a href="{{ url('/dashboard') }}" style="color:#e4e6eb" onclick="inProgress()">
                                        <i class="mdi mdi-view-dashboard"></i>
                                        <span> Dashboard </span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <!-- End Sidebar -->

                        <div class="clearfix"></div>

                    </div>
                    <!-- Sidebar -left -->

                </div>
                <!-- Left Sidebar End -->
                <div class="dashboard-container" style="flex: 13;">
                    <div class="top">
                        <div class="navbar-custom" style="z-index: 1">
                            {{-- <div class="logo-box" style="background: none">
                                <a href="index.html" class="logo text-center logo-dark">
                                    <span class="logo-lg">
                                        <img src="assets/images/logo.png" alt="" height="55"style="margin-top:-3px">
                                        <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                                    </span>
                                    <span class="logo-sm">
                                        <!-- <span class="logo-lg-text-dark">U</span> -->
                                        <img src="assets/images/logo-sm.png" alt="" height="20">
                                    </span>
                                </a>

                                <a href="index.html" class="logo text-center logo-light">
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-light.png" alt="" height="22">
                                        <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                                    </span>
                                    <span class="logo-sm">
                                        <!-- <span class="logo-lg-text-dark">U</span> -->
                                        <img src="assets/images/logo-sm-light.png" alt="" height="24">
                                    </span>
                                </a>
                            </div> --}}

                            <div class="small-left-side-menu" style="margin-right: 0.2em">
                                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" style="background:none; border:none; font-size: 1.5em"><i id="menu-bar" class="fa-sharp fa-solid fa-bars" style="color:black"></i></button>
                                <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                                    <div class="offcanvas-header" style="background: rgba(205, 237, 255, 0.596); box-shadow: -4px -2px 10px 1px #696969;">
                                        <span class="logo-sm-2">
                                            <img src="assets/images/logo-sm.png" alt="" height="20">
                                        </span>
                                    <h6 class="offcanvas-title" id="offcanvasScrollingLabel">Navigation</h6>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>

                                    <div class="offcanvas-body">
                                        <ul class="metismenu" id="side-menu">

                                            <li class="nav-item">
                                                <a class="nav-item-top" href="{{ url('/dashboard') }}">
                                                    <i id="nav-icon" class="mdi mdi-view-dashboard"></i>
                                                    <span> Dashboard</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-item-top" href="javascript: void(0);">
                                                    <i id="nav-icon" class="mdi mdi-flip-horizontal"></i>
                                                    <span> Member</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <ul class="nav-second-level" aria-expanded="false">
                                                    <li><a href="{{('/member-capture')}}">member capture</a></li>
                                                    <li><a href="{{('/member-capture')}}">member captures</a></li>

                                                </ul>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-item-top" href="javascript: void(0);">
                                                    <i id="nav-icon" class="mdi mdi-google-pages"></i>
                                                    <span> Administration</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <ul class="nav-second-level" aria-expanded="false">
                                                    <li><a href="pages-starter.html">find member</a></li>

                                                </ul>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-item-top" href="javascript: void(0);">
                                                    <i id="nav-icon" class="mdi mdi-content-copy"></i>
                                                    <span> Payments </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <ul class="nav-second-level" aria-expanded="false">
                                                    <li><a href="{{('/policy-payments')}}">policy payments</a></li>

                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-item-top" href="javascript: void(0);">
                                                    <i id="nav-icon" class="mdi mdi-format-underline"></i>
                                                    <span> Claim </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <ul class="nav-second-level" aria-expanded="false">
                                                    <li><a href="{{('/member-claim')}}">Member Claims</a></li>
                                                    <li><a href="ui-cards.html">Claims Logged</a></li>

                                                </ul>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-item-top" href="javascript: void(0);">
                                                    <i id="nav-icon" class="mdi mdi-package-variant-closed"></i>
                                                    <span> Funeral Service </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <ul class="nav-second-level" aria-expanded="false">
                                                    <li><a href="components-grid.html">Burial</a></li>
                                                    <li><a href="components-range-sliders.html">Mortuary</a></li>
                                                    <li><a href="components-sweet-alert.html">tombstone</a></li>
                                                    <li><a href="components-ratings.html">Fleet Management</a></li>
                                                    <li><a href="components-treeview.html">Quotation</a></li>

                                                </ul>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- @if(request()->url() !== url('profile')) -->
                                <ul class="list-unstyled topnav-menu float-right mb-0 topbar-navigation">
                                    <li class="dropdown notification-list">
                                        <a class="nav-link dropdown-toggle waves-effect waves-light Actionpreload" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="mdi mdi-bell-outline noti-icon"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                            <!-- item  class="Actionpreload"-->
                                            <div class="dropdown-item noti-title">
                                                <h5 class="font-16 text-white m-0">
                                                    <span class="float-right">
                                                        <a href="#" class="text-white">
                                                            <small>Clear All</small>
                                                        </a>
                                                    </span>Notification
                                                </h5>
                                            </div>

                                            <div class="slimscroll noti-scroll">

                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                    <div class="notify-icon bg-success">
                                                        <i class="mdi mdi-settings-outline" style="color:white"></i>
                                                    </div>
                                                    <p class="notify-details">New settings
                                                        <small class="text-muted">There are new settings available</small>
                                                    </p>
                                                </a>

                                            </div>

                                            <!-- All-->
                                            <a href="javascript:void(0);" class="dropdown-item text-primary notify-item notify-all">
                                                View all
                                                <i class="fi-arrow-right" style="color:white"></i>
                                            </a>

                                        </div>
                                    </li>

                                    <li class="dropdown notification-list">
                                        <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="mdi mdi-email-outline noti-icon"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                            <!-- item-->
                                            <div class="dropdown-item noti-title">
                                                <h5 class="font-16 text-white m-0">
                                                    <span class="float-right">
                                                        <a href="#" class="text-white">
                                                            <small>Clear All</small>
                                                        </a>
                                                    </span>Messages
                                                </h5>
                                            </div>

                                            <div class="slimscroll noti-scroll">

                                                <div class="inbox-widget">
                                                    <a href="#">
                                                        <div class="inbox-item">
                                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="rounded-circle" alt=""></div>
                                                            <p class="inbox-item-author">Chadengle</p>
                                                            <p class="inbox-item-text text-truncate">Hey! there I'm available...</p>
                                                        </div>
                                                    </a>
                                                </div> <!-- end inbox-widget -->

                                            </div>
                                            <!-- All-->
                                            <a href="javascript:void(0);" class="dropdown-item text-primary notify-item notify-all">
                                                View all
                                                <i class="fi-arrow-right" style="color:white"></i>
                                            </a>

                                        </div>
                                    </li>

                                    <li class="dropdown notification-list">
                                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" style="display:flex; align-items:center;">
                                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                            <span class="d-none d-sm-inline-block ml-1 font-weight-medium" style="color: black">{{ Auth::user()->name }}</span>
                                        </a>


                                        <div class="dropdown-menu dropdown-menu-right profile-dropdown" style="background:#c1c6db">
                                            <!-- item-->
                                            <div class="dropdown-header noti-title" style="background: #010e46;">
                                                <h6 class="text-overflow text-white m-0">Welcome !</h6>
                                            </div>

                                            <div class="dropdown-item notify-item Actionpreload" style="">
                                                <i class="mdi mdi-account-outline"></i>
                                                <a href="{{ route('profile.edit') }}" style="font-family: 'Helvetica Neue', Arial, sans-serif;">Profile</a>
                                            </div>

                                            <!-- item-->
                                            <div class="dropdown-item notify-item Actionpreload">
                                                <i class="mdi mdi-logout-variant"></i>
                                                <a href="{{ route('logout') }}" style="font-family: 'Helvetica Neue', Arial, sans-serif;">Log Out</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            <!-- @endif -->
                            <!-- LOGO -->
                        </div>
                        <!-- end Topbar -->
                        <script>
                            async function inProgress() {
                                try {
                                    const token = '{{ csrf_token() }}';
                                    const response1 = await fetch('/in-progress', {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'X-CSRF-TOKEN': token
                                        }
                                    });

                                    if (response1.ok) {
                                        const data = await response1.json();
                                        iziToast.question({
                                            timeout: false,
                                            close: false,
                                            overlay: true,
                                            displayMode: 'once',
                                            id: 'question',
                                            zindex: 999,
                                            title: 'Confirm',
                                            message: 'Are you sure you want to complete the form later?',
                                            position: 'topCenter',
                                            buttons: [
                                                ['<button><b>YES</b></button>', function (instance, toast) {
                                                    instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                                                    // User confirmed, redirect to the dashboard
                                                    window.location.href = '/dashboard';
                                                }, true],
                                                ['<button>NO</button>', function (instance, toast) {
                                                    instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                                                }]
                                            ]
                                        });
                                    } else {
                                        throw new Error('Main Member ID check error: ' + response1.status);
                                    }
                                } catch (error) {
                                    // Handle mainMemberId check error
                                    console.log(error);
                                    return false;
                                }
                            }

                        </script>
                        @yield('admin.formContent')
                    </div>

                    <!-- Footer Start -->
                    <div class="footer" style="background: rgb(116, 116, 122); color: white">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <script>document.write(new Date().getFullYear())</script> © Tshitshithe.
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-sm-end d-none d-sm-block">
                                        Crafted with <i class="mdi mdi-heart text-danger"></i> by Tendai ICT
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end Footer -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->

        <!-- /Right-bar -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!--Form Wizard-->
        <script src="assets/libs/jquery-steps/jquery.steps.min.js"></script>

        <script src="assets/libs/jquery-validation/jquery.validate.min.js"></script>

        <!-- Init js-->
        <script src="assets/js/pages/form-wizard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="iziToast.min.js" type="text/javascript"></script>

    </body>
    <!-- Show preloader when navigating to other pages -->
    <script>
        // Show preloader when clicking on links
        // document.querySelectorAll('a').forEach(function(link) {
        //     link.addEventListener('click', function(event) {
        //         event.preventDefault();
        //         document.querySelector('.loader').style.display = 'block';
        //         window.location.href = link.href;
        //     });
        // });

        // Show preloader when submitting forms
        document.querySelectorAll('form').forEach(function(form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                document.querySelector('.loader').style.display = 'block';
                form.submit();
            });
        });
        window.onbeforeunload = function() {
            document.querySelector('.loader').style.display = 'block';
        };
    </script>
    <!-- Mirrored from coderthemes.com/uplon/layouts/vertical/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Apr 2023 12:15:44 GMT -->
</html>
