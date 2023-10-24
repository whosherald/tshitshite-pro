<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from coderthemes.com/uplon/layouts/vertical/index-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Apr 2023 12:14:08 GMT -->
    <head>
        <meta charset="utf-8" />
        <title>Layout|Tshitshite & Bros|Funeral Undertaker</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico">

        <!-- App css -->
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
        {{-- <link href="/assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" /> --}}
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/libs/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">

        <link href="assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" />

        <!-- 3d piechart -->
        <!-- Morris.js -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.4/raphael-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<!-- charts -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />

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
                background-color: rgba(0, 0, 0, 0.8);
                z-index: 9999;
            }

            .loader::before {
                content: "Loading";
                display: block;
                position: absolute;
                top: calc(50% + 40px);
                left: 50%;
                transform: translate(-50%, -50%);
                font-size: 24px;
                color: #fff;
            }

            .loader::after {
                content: "...";
                display: block;
                position: absolute;
                top: calc(50% + 40px);
                left: calc(50% + 60px);
                transform: translateY(-50%);
                font-size: 24px;
                color: #fff;
                animation: loadingDots 1s steps(4, end) infinite;
            }

            .loader .spinner {
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

            @keyframes loadingDots {
                0%, 20% { content: ""; }
                40% { content: "."; }
                60% { content: ".."; }
                80%, 100% { content: "..."; }
            }

        </style>
        <link href="/assets/css/layout.css" rel="stylesheet"/>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
        //   ['Claims',     11],
          ['Member In-progress', {{$In_Progress_App}}],
        //   ['Funerals',  2],
          ['Member',   {{ $Completed_App }}]
        ]);

        var options = {
          title: '',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['2023', 'Pending-App', 'copmleted-App', 'funerals', 'completed-Claims', 'pending-claims', 'Average'],
          ['Aug',  165,      938,         522,             998,           450,      614.6],
          ['Sep',  135,      1120,        599,             1268,          288,      682],
          ['Oct',  {{$In_Progress_App}},      {{ $Completed_App }},        587,             807,           397,      623],
          ['Nov',  139,      1110,        615,             968,           215,      609.4],
          ['Dec',  136,      691,         629,             1026,          366,      569.6]
        ]);

        var options = {
          title : '',
          vAxis: {title: ''},
          hAxis: {title: 'Member'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
        
    </head>

    <body style="min-height: auto;">
    @php

        $role=Session::get('role');
        $username=Session::get('username');
    @endphp

        <!-- Preloader -->
        <div class="loader">
            <div class="spinner"></div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">
            <div class="overall-container" >
                <!-- ========== Left Sidebar Start ========== -->
                <div class="left-side-menu">

                    <div class="slimscroll-menu">

                        <!--- Sidemenu -->
                        <div id="sidebar-menu" style="display: flex; flex-direction:column;">

                            <span class="logo-lg d-flex justify-content-center mb-4 tshi-logo" style="">
                            <img src="/assets/images/logo-light.png" alt="" height="95"style="margin-top:20px">
                            </span>
                            {{-- <span class="logo-sm d-flex justify-content-center mb-4">
                                <!-- <span class="logo-lg-text-dark">U</span> -->

                            </span> --}}

                            <ul class="metismenu" id="side-menu">
                                <li class="menu-title" style="margin-bottom:1em">
                                    

                                </li>


                                @if(request()->url() == url('dashboard') || request()->url() == url('tables-member-capture-in-progress') || request()->url() == url('tables-claims-completed') || request()->url() == url('tables-claims-in-progress') || request()->url() == url('/'))
                                    <li style="color: white ! important">
                                        <a class="Actionpreload navi-item" href="{{('/dashboard')}}" >
                                            <div class="d-flex align-items-center" style="" >
                                                <i class="mdi mdi-view-dashboard"></i>
                                                <span>Dashboard</span>
                                            </div>
                                        </a>

                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" class=" navi-item">
                                            <div class="d-flex align-items-center" style="" >
                                                <i class="mdi mdi-flip-horizontal"></i>
                                                <span> Member</span>
                                            </div>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a class="Actionpreload" href="{{('/member-capture')}}">member capture</a></li>
                                        </ul>
                                    </li>

                                    @if($role==2)
                                    <li>
                                        <a href="javascript: void(0);" class=" navi-item">
                                            <div class="d-flex align-items-center" style="" >
                                                <i class="mdi mdi-google-pages"></i>
                                                <span> Admin</span>
                                            </div>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a class="Actionpreload" href="{{('/register-user')}}">Register User</a></li>

                                        </ul>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a class="Actionpreload" href="{{('/tables-member-capture-completed')}}">My Member</a></li>

                                        </ul>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a class="Actionpreload" href="{{('/find-broker')}}">My Brokers</a></li>

                                        </ul>
                                    </li>
                                    @elseif($role==1)
                                    <li>
                                        <a href="javascript: void(0);" class=" navi-item">
                                            <div class="d-flex align-items-center" style="" >
                                                <i class="mdi mdi-google-pages"></i>
                                                <span> Admin</span>
                                            </div>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a class="Actionpreload" href="{{('/register-user')}}">Register User</a></li>

                                        </ul>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a class="Actionpreload" href="{{('/tables-member-capture-completed')}}">My Member</a></li>

                                        </ul>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a class="Actionpreload" href="{{('/find-broker')}}">My Brokers</a></li>

                                        </ul>
                                    </li>
                                    @elseif($role==0)
                                    <li>
                                        <a href="javascript: void(0);" class=" navi-item">
                                            <div class="d-flex align-items-center" style="" >
                                                <i class="mdi mdi-google-pages"></i>
                                                <span> Admin</span>
                                            </div>
                                        </a>
                                        
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a class="Actionpreload" href="{{('/tables-member-capture-completed')}}">My Member</a></li>

                                        </ul>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a class="Actionpreload" href="{{('/find-broker')}}">My Brokers</a></li>

                                        </ul>
                                    </li>
                                
                                    @endif
                                    <li>
                                        <a href="javascript: void(0);" class=" navi-item">
                                            <div class="d-flex align-items-center" style="" >
                                                <i class="mdi mdi-content-copy"></i>
                                                <span> Payments</span>
                                            </div>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a class="Actionpreload" href="{{('/policy-payments')}}">policy payments</a></li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" class=" navi-item">
                                            <div class="d-flex align-items-center" style="" >
                                                <i class="mdi mdi-format-underline"></i>
                                                <span> Claim </span>
                                            </div>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a class="Actionpreload" href="{{('/member-claim')}}">Member Claims</a></li>
                                            <li><a class="Actionpreload" href="ui-cards.html">Claims Logged</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="javascript: void(0);" class=" navi-item">
                                            <div class="d-flex align-items-center" style="margin-right:3.5em;" >
                                                <i class="mdi mdi-package-variant-closed"></i>
                                                <div>
                                                    <span> Funeral Service </span>
                                                </div>
                                            </div>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a class="Actionpreload" href="components-grid.html">Burial</a></li>
                                            <li><a class="Actionpreload" href="components-range-sliders.html">Mortuary</a></li>
                                            <li><a class="Actionpreload" href="components-sweet-alert.html">tombstone</a></li>
                                            <li><a class="Actionpreload" href="components-ratings.html">Fleet Management</a></li>
                                            <li><a class="Actionpreload" href="components-treeview.html">Quotation</a></li>

                                        </ul>
                                    </li>
                                @elseif(request()->url() == url('member-capture'))
                                    <li>
                                        <a class="navi-item" href="#" onclick="inProgress()" style="color: white">
                                            <div class="d-flex align-items-center" style="" >
                                                <i class="mdi mdi-view-dashboard"></i>
                                                <span>Dashboard</span>
                                            </div>
                                        </a>
                                    </li>
                                @else
                                    <li>
                                        <a class="navi-item" href="{{ url('/dashboard') }}" style="color: white">
                                            <div class="d-flex align-items-center" style="" >
                                                <i class="mdi mdi-view-dashboard"></i>
                                                <span>Dashboard</span>
                                            </div>
                                        </a>
                                    </li>
                                @endif

                            </ul>

                        </div>
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
                                                ['<button class="Actionpreload"><b>YES</b></button>', function (instance, toast) {
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
                        <!-- End Sidebar -->

                        <div class="clearfix"></div>

                    </div>
                    <!-- Sidebar -left -->

                </div>
                <!-- Left Sidebar End -->
                <div class="dashboard-container">

                    <div class="navbar-custom" style="">

                            <div class="small-left-side-menu" style="margin-right: 0.2em">
                                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" style="background:none; border:none; font-size: 1.5em"><i id="menu-bar" class="fa-sharp fa-solid fa-bars" style="color:black"></i></button>
                                <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                                    <div class="offcanvas-header" style="background: #010e46; box-shadow: -4px -2px 10px 1px #696969;">
                                        <span class="logo-sm-2">
                                            <img src="/assets/images/logo-sm.png" alt="" height="20">
                                        </span>
                                        <h6 class="offcanvas-title"id="offcanvasScrollingLabel">Navigation</h6>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close" style="background-color: #c1c6db !important"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <ul class="metismenu" id="side-menu">

                                            @if(request()->url() == url('dashboard') || request()->url() == url('/'))
                                                <li>
                                                    <a class="Actionpreload navi-item" href="{{ url('/dashboard') }}" style="color: black">
                                                        <hr style="padding: 0em; margin:0em">
                                                        <i class="mdi mdi-view-dashboard"></i>
                                                        Dashboard
                                                        <hr style="padding: 0em; margin:0em">
                                                    </a>

                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);" class=" navi-item">
                                                        <hr style="padding: 0em; margin:0em">
                                                        <i class="mdi mdi-flip-horizontal"></i>
                                                        <span> Member</span>
                                                        <hr style="padding: 0em; margin:0em">
                                                    </a>
                                                    <ul class="nav-second-level" aria-expanded="false">
                                                        <li><a class="Actionpreload" href="{{('/member-capture')}}">member capture</a></li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <a href="javascript: void(0);" class=" navi-item">
                                                        <hr style="padding: 0em; margin:0em">
                                                        <i class="mdi mdi-google-pages"></i>
                                                        <span> Administration</span>
                                                        <hr style="padding: 0em; margin:0em">
                                                    </a>
                                                    <ul class="nav-second-level" aria-expanded="false">
                                                        <li><a class="Actionpreload" href="pages-starter.html">find member</a></li>

                                                    </ul>
                                                    
                                                </li>

                                                <li>
                                                    <a href="javascript: void(0);" class=" navi-item">
                                                        <hr style="padding: 0em; margin:0em">
                                                        <i class="mdi mdi-content-copy"></i>
                                                        <span> Payments </span>
                                                        <hr style="padding: 0em; margin:0em">
                                                    </a>
                                                    <ul class="nav-second-level" aria-expanded="false">
                                                        <li><a class="Actionpreload" href="{{('/policy-payments')}}">policy payments</a></li>

                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);" class=" navi-item">
                                                        <hr style="padding: 0em; margin:0em">
                                                        <i class="mdi mdi-format-underline"></i>
                                                        <span> Claim </span>
                                                        <hr style="padding: 0em; margin:0em">
                                                    </a>
                                                    <ul class="nav-second-level" aria-expanded="false">
                                                        <li><a class="Actionpreload" href="{{('/member-claim')}}">Member Claims</a></li>
                                                        <li><a class="Actionpreload" href="ui-cards.html">Claims Logged</a></li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <a href="javascript: void(0);" class=" navi-item">
                                                        <hr style="padding: 0em; margin:0em">
                                                        <i class="mdi mdi-package-variant-closed"></i>
                                                        <div>
                                                            <span> Funeral Service </span>
                                                        </div>

                                                        <hr style="padding: 0em; margin:0em">
                                                    </a>
                                                    <ul class="nav-second-level" aria-expanded="false">
                                                        <li><a class="Actionpreload" href="components-grid.html">Burial</a></li>
                                                        <li><a class="Actionpreload" href="components-range-sliders.html">Mortuary</a></li>
                                                        <li><a class="Actionpreload" href="components-sweet-alert.html">tombstone</a></li>
                                                        <li><a class="Actionpreload" href="components-ratings.html">Fleet Management</a></li>
                                                        <li><a class="Actionpreload" href="components-treeview.html">Quotation</a></li>

                                                    </ul>
                                                </li>
                                            @elseif(request()->url() == url('member-capture'))
                                                <li>
                                                    <a class="" href="#" onclick="inProgress()" style="color:black"><i class="mdi mdi-view-dashboard"></i>Dashboard</a>
                                                </li>
                                            @else
                                                <li>
                                                    <a class="Actionpreload" href="{{ url('/dashboard') }}" style="color: black">
                                                        <hr style="padding: 0em; margin:0em">
                                                        <i class="mdi mdi-view-dashboard"></i>
                                                        Dashboard
                                                        <hr style="padding: 0em; margin:0em">
                                                    </a>
                                                </li>
                                            @endif


                                        </ul>
                                    </div>
                                </div>
                            </div>

                        @if(request()->url() !== url('profile'))
                            <ul class="list-unstyled topnav-menu float-right mb-0 topbar-navigation">
                                <li class="dropdown notification-list">
                                    {{-- <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"> --}}
                                        <i class="mdi mdi-bell-outline noti-icon"></i>
                                    {{-- </a> --}}
                                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                        {{-- <div class="dropdown-item noti-title">
                                            <h5 class="font-16 text-white m-0">
                                                <span class="float-right">
                                                    <a href="#" class="text-white">
                                                        <small>Clear All</small>
                                                    </a>
                                                </span>Notification
                                            </h5>
                                        </div>

                                        <div class="slimscroll noti-scroll">
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-success">
                                                    <i class="mdi mdi-settings-outline" style="color:white"></i>
                                                </div>
                                                <p class="notify-details">New settings
                                                    <small class="text-muted">There are new settings available</small>
                                                </p>
                                            </a>

                                        </div>
                                        <a href="javascript:void(0);" class="dropdown-item text-primary notify-item notify-all">
                                            View all
                                            <i class="fi-arrow-right" style="color:white"></i>
                                        </a> --}}

                                    </div>
                                </li>

                                <li class="dropdown notification-list">
                                    {{-- <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"> --}}
                                        <i class="mdi mdi-email-outline noti-icon"></i>
                                    {{-- </a> --}}
                                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                        {{-- <div class="dropdown-item noti-title">
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
                                                        
                                                    </div>
                                                </a>
                                            </div> <!-- end inbox-widget -->

                                        </div>

                                        <a href="javascript:void(0);" class="dropdown-item text-primary notify-item notify-all">
                                            View all
                                            <i class="fi-arrow-right" style="color:white"></i>
                                        </a> --}}
                                    </div>
                                </li>

                                <li class="dropdown notification-list">
                                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" style="display:flex; align-items:center;">
                                        <img src="/assets/images/users/tshitshite-admin-icon.png" alt="user-image" class="rounded-circle">
                                        <span class="d-none d-sm-inline-block ml-1 font-weight-medium" style="color: black">{{ $username }}</span>
                                    </a>


                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown" style="background:#c1c6db">
                                        <!-- item-->
                                        <div class="dropdown-header noti-title" style="background: #010e46;">
                                            <h6 class="text-overflow text-white m-0">Welcome !</h6>
                                        </div>

                                        <div class="dropdown-item notify-item Actionpreload" style="">
                                            <i class="mdi mdi-account-outline"></i>
                                            <a href="{{url('/user_profile')}}" style="font-family: 'Helvetica Neue', Arial, sans-serif;">Profile</a>
                                        </div>

                                        <!-- item-->
                                        <div class="dropdown-item notify-item">
                                            <i class="mdi mdi-logout-variant"></i>
                                            <a href="{{ url('/logout') }}">Logout</a>
                                                                                           
                                            

                                        </div>
                                    </div>
                                </li>
                            </ul>
                        @endif
                        <!-- LOGO -->
                        
                    </div>

                    @yield('admin.content')

                    </div>
                    
                    <div class="footer">
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
                </div>
            </div>
            
        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->

        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!--Morris Chart-->
        <script src="assets/libs/morris-js/morris.min.js"></script>
        <script src="assets/libs/raphael/raphael.min.js"></script>

        <!-- Dashboard init js-->
        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
        <!-- DataTables JS -->
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <!-- DataTables Select JS -->
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function () {
                $('#member_capture_completeProgressTable').DataTable();
                $('#member_capture_inProgressTable').DataTable();
                $('#claims_completeProgressTable').DataTable();
                $('#claims_inProgressTable').DataTable();
            });
        </script>

        <script>
            document.querySelector("#member_capture_completeProgressTable_paginate > ul > li.paginate_button.page-item.active").style.backgroundColor = 'red';
        </script>
        <!-- Show preloader when navigating to other pages -->
        <script>
            const loader = document.querySelector('.loader');

            const startLoading = () => {
                loader.style.display = 'block';
            };

            const stopLoading = () => {
                loader.style.display = 'none';
            };

            // Show preloader on link click and form submission
            const activatePreloader = (event) => {
                event.preventDefault();
                startLoading();
                if (event.target.href) {
                    window.location.href = event.target.href;
                } else {
                    window.location.reload();
                }
            };


            // Add event listeners to links and forms
            document.querySelectorAll('.Actionpreload').forEach(function(element) {
                element.addEventListener('click', activatePreloader);
            });

            // Show preloader when leaving the page
            window.onbeforeunload = () => {
                startLoading();
            };

            window.addEventListener('pageshow', () => {
                console.log('pageshow event called');
                stopLoading();
            });

            // Show preloader when using the back button
            window.addEventListener('popstate', () => {
                startLoading();
            });
        </script>

        <script>
            // Get the left-side-menu and dashboard-container elements
            // Check if the viewport width is at least 1024px
            function updateStyles() {
                const leftSideMenu = document.querySelector('.left-side-menu');
                const leftSideMenuStyle = window.getComputedStyle(leftSideMenu);
                const dashboardContainer = document.querySelector('.dashboard-container');
                if (window.matchMedia('(min-width: 767.98px) and (max-width: 1024px)').matches) {

                    // Set the new styles for the left-side-menu and dashboard-container elements
                    leftSideMenu.style.position = 'fixed';
                    leftSideMenu.style.top = '0';
                    leftSideMenu.style.bottom = '0';
                    dashboardContainer.style.marginLeft = '8.5%';
                    dashboardContainer.style.width = '91.5%';
                }
                else if (window.matchMedia('(max-width: 767.97px)').matches) {
                    // Set the new styles for the left-side-menu and dashboard-container elements

                    dashboardContainer.style.marginLeft = '0%';
                    dashboardContainer.style.width = '100%';
                }
                else{
                    leftSideMenu.style.position = '';
                    leftSideMenu.style.top = '';
                    leftSideMenu.style.bottom = '';
                    dashboardContainer.style.marginLeft = '';
                    dashboardContainer.style.width = '';
                }
            }
            updateStyles();
            window.addEventListener('resize', updateStyles);

        //

    </body>

    <!-- Mirrored from coderthemes.com/uplon/layouts/vertical/index-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Apr 2023 12:14:46 GMT -->
</html>
