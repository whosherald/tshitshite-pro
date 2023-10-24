<!doctype html>
<html lang="en">
    
<!-- Mirrored from themesbrand.com/admiria-multi/layouts/vertical/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Mar 2022 09:05:26 GMT -->
    <head>
    
        <meta charset="utf-8">
        <title>TSHITSHITHE |BURIAL</title>
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

    <body data-sidebar="dark">

    

        <!-- Loader -->
            <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="#" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo.png" alt=""  height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="#" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-light.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="36">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>

                        <div class="d-none d-sm-block ms-2">
                            <h4 class="page-title">Funeral Service</h4>
                        </div>
                    </div>

                    <!-- Search input -->
                    <div class="search-wrap" id="search-wrap">
                        <div class="search-bar">
                            <input class="search-input form-control" placeholder="Search">
                            <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                <i class="mdi mdi-close-circle"></i>
                            </a>
                        </div>
                    </div>

                    
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Main</li>


                                    <li>
                                    <a href="{{ url('/dashboard') }}" class="waves-effect">
                                          
                                            <i class="mdi mdi-view-dashboard"></i>
                                            <span> Dashboard </span>
                                        </a>
                                    </li>   
                         </li>
                    </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title"></h4>
                                     <style>

                                        .wizard>.steps a, .wizard>.steps a:active, .wizard>.steps a:hover{
                                            border-radius: 10px 0 10px 2px !important;
                                            border: 1px solid;
                                            padding: 10px;
                                            box-shadow: 2px 5px 10px #888888;
                                                }
                                     </style>

                                        <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" action="{{ url('/funeral-application')}}" method="post">
                                            @csrf
                                            <h3>Deceased Info</h3>
                                            <hr>
                                            
                                        <fieldset>
                                            <div class="page-content">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="card">
                                                                        
                                                             <div class="card-body">
                                                    <div>
                                                                             
                                                </div>
                               
                                        <fieldset>
                                                        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card"style="margin-top:-60px !important;">
                    <div class="card-tittle" style="background-color:#67a8e4; height:50px; align:center !important;margin-top:-90px !important;border-radius: 10px 10px 10px 10px !important;box-shadow: 2px 5px 10px #888888;border: 1px solid;">
                    <h4 style="margin-top:10px !important; margin-left:40% !important;"> DECEASED INFO</h4>
                     </div>
                    <div class="card-body" >
                        
                        <hr>
                    
                        <fieldset>   
                       
                

                        <div class="card-body">
                    
                        
                                <fieldset>
                                                
                                                
                                    <div class="row">               
                                               
                                        <div class="row g-3 " novalidate>
                                            <div class="col-md-3">
                                                <label for="validationCustom04" class="form-label">first name</label>
                                                <input id="txtCityBilling" name="first_name" type="text" class="form-control">  
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom04" class="form-label">last name</label>
                                                <input id="txtCityBilling" name="last_name" type="text" class="form-control">  
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom04" class="form-label">ID number</label>
                                                <input id="txtCityBilling" name="id_number" type="text" class="form-control">  
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom04" class="form-label">Town or City</label>
                                                <input id="txtCityBilling" name="town_city" type="date" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustomUsername" class="form-label">Province</label>
                                                <select class="form-select" name="province" id="validationCustom04" required>
                                                    <option selected disabled value="">Choose...</option>
                                                    <option>...</option>
                                                    <option value="Active" >Active</option>
                                                    <option>Limpopo</option>
                                                    <option>Gauteng</option>
                                                    <option>North west</option>
                                                    <option>Mpumalanga</option>
                                                    <option>Eastern Cape</option>
                                                    <option>Kwazulu Natal</option>
                                                    <option>Northern Cape</option>
                                                    <option>Freestate</option>
                                                    <option>Western Cape</option>
                                                </select>
                                            </div>
                                                <div class="col-md-3" style="margin-bottom:10px !important">
                                                    <label for="validationCustom04" class="form-label">Street Address</label>
                                                    <input id="txtCityBilling" name="street_address" type="text" class="form-control">
                                                <!-- <div class="invalid-feedback">
                                                    Please select a valid state.
                                                </div> -->
                                                </div>
                                                <div class="col-md-3">
                                                     <label for="validationCustom04" class="form-label">Date of Birth</label>
                                                    <input id="txtCityBilling" name="date_of_birth" type="text" class="form-control">  
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="validationCustom04" class="form-label">Code</label>
                                                    <input id="txtCityBilling" name="code" type="text" class="form-control">  
                                                </div>
                                            </div>
                                           
                                        
                                                
                                        <div class="row g-3 " novalidate>
                                            <div class="col-md-3">
                                                <label for="validationCustom04" class="form-label">Body Collection Car Registration</label>
                                                <input id="txtCityBilling" name="car_reg" type="text" class="form-control">  
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom04" class="form-label">Status</label>
                                                    <select class="form-select" name="status" id="validationCustom04" required>
                                                        <option selected disabled value="">Choose...</option>
                                                        <option>...</option>
                                                        <option value="Active" >Select option</option>
                                                        <option>Body Collection</option>
                                                        <option>Mortuary</option>
                                                        <option>Arragement</option>
                                                        
                                                    </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustomUsername" class="form-label">Contact Person</label>
                                                <input id="txtCityBilling" name="contact_person" type="text" class="form-control">
                                            </div>
                                            <div class="col-md-3" style="margin-bottom:10px !important">
                                                <label for="validationCustom04" class="form-label">Contact number</label>
                                                <input id="txtCityBilling" name="contact_number" type="text" class="form-control">
                                                <!-- <div class="invalid-feedback">
                                                    Please select a valid state.
                                                </div> -->
                                            </div>
                                            </div>
                                            <div class="row g-3 " novalidate>
                                            <div class="col-md-3">
                                            <label for="validationCustom04" class="form-label">date of death</label>
                                            <input id="txtCityBilling" name="cause_of_death" type="date" class="form-control">  
                                            </div>
                                            <div class="col-md-3">
                                            <label for="validationCustom04" class="form-label">Date of funeral</label>
                                            <input id="txtCityBilling" name="date_of_death" type="date" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustomUsername" class="form-label">Collected from</label>
                                                <input id="txtCityBilling" name="collected_from" type="text" class="form-control">
                                            </div>
                                            <div class="col-md-3" style="margin-bottom:10px !important">
                                                <label for="validationCustom04" class="form-label">Body Collection Driver</label>
                                                <input id="txtCityBilling" name="collect_driver" type="text" class="form-control">
                                                <!-- <div class="invalid-feedback">
                                                    Please select a valid state.
                                                </div> -->
                                            </div>
                                            </div>
                                            <div class="row g-3 " novalidate>
                                            <div class="col-md-3">
                                            <label for="validationCustom04" class="form-label">Tag Number/Bl663</label>
                                            <input id="txtCityBilling" name="tag_number" type="text" class="form-control">  
                                            </div>
                                            <div class="col-md-3">
                                            <label for="validationCustom04" class="form-label">Fridge Number</label>
                                            <input id="txtCityBilling" name="fridge_number" type="text" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustomUsername" class="form-label">Shelf Number</label>
                                                <input id="txtCityBilling" name="shelf_number" type="text" class="form-control">
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtLastNameBilling" class="col-lg-3 col-form-label">Gender</label>
                                                    
                                                            <div class="col-lg-3">
                                                                <div class="row">
                                                                    <div class="col md-6">
                                                                        <label for="txtLastNameBilling" class="col-lg-3col-form-label">Male</label>
                                                                    </div>
                                                                    <div class="col md-3">
                                                                        <input id="txtCityBilling" name="man" type="radio" >
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col md-6">
                                                                        <label for="txtLastNameBilling" class="col-lg-3col-form-label">Female</label>
                                                                    </div>
                                                                    <div class="col md-3">
                                                                        <input id="txtCityBilling" name="women" type="radio" >
                                                                    </div>
                                                                </div>
                                                       
                                                                </div>
                                                       
                                                             </div>
                                                            </div>
                                                            
                                                            
                                                    </div>
                                            </div>

                                   <hr>
                        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                
                        
                    <?php
                        $deceased=DB::table('deceased_info')
                        ->get();
                    ?>       
                                                                
                        
                <h5 class="card-title">Funeral List</h5>
                <label for="txt" class="col-lg-1 col-form-label"  style="margin-left:820px !important">search</label>
                        
                        <input id="txt" name="search" type="text" class="">
                <div class="row g-3" style="margin-top:10px !important" >
                    <style>
                        .table>:not(:last-child)>:last-child>*{
                        background-color:#555659;
                        }
                    </style>
            
            <table id="datatable" class="table table-secondary table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead style="background-color:#053f9c">
                    <tr>
                        <th>first name</th>
                        <th>last name</th>
                        <th>id number</th>
                        <th>date of death</th>
                        <th>date of funeral</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>

                    @foreach($deceased as $decease)
                    <tr>
                        <td>{{$decease->first_name}}</td>
                        <td>{{$decease->last_name}}</td>
                        <td>{{$decease->id_number}}</td>
                        <td>{{$decease->date_of_death}}</td>
                        <td>{{$decease->date_of_funeral}}</td>
                        
                        <td style="width: 100px">
                             <a class="btn btn-outline-info btn-sm edit" title="Edit">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                                                            
                            <a class="btn btn-outline-danger btn-sm edit" href="{{('/delete-info/'.$decease->deceased_id)}}">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> 

<!-- end row -->
</div> 
                                           
</div>
                                            
                                        
                                                    
                                </fieldset>
                               
                    </div>
                    
                </div>
                                      
                                 
                                                       
                <hr>
                           
                
            </div>
            
        </div>
        
        
    </div>
    
</div>
</div>              
                          
                                                                                                    

                                                  
                        
                        </fieldset>
                               
            
                       
                        </fieldset>
                                                   
                                            
                             <h3>Physical Description</h3>
                        <fieldset>
                                            <h3></h3>
                                            <div class="row">
            <div class="col-sm-12">
                <div class="card" style="margin-top:-40px">
                    <div class="card-tittle" style="background-color:#67a8e4; height:50px; align:center !important;border-radius: 10px 10px 10px 10px !important;box-shadow: 2px 5px 10px #888888;border: 1px solid;">
                    <h4 style="margin-top:10px !important; margin-left:40% !important;"> PHYSICAL DESCRIPTION</h4>
                     </div>
                    <div class="card-body">
                        
                        
                                
                                                <div class="row">
                                                  
                                                </div>
                                                <div class="row">
                                                 
                                                    <div>
                                                        <hr class="line1">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    
                                                    </div>
                                                    <div class="row">
                                                    
                                                       
                                                    </div>
                                                    
                                                    <div class="row">
                                                    

                                            
                                                    <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">Personal Items</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtCityBilling" name="personal_items" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">Embalming</label>
                                                                <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="embalme" class="form-select">
                                                                      <option  readonly Selected=" "> </option>
                                                                        <option value="">International Embalming</option>
                                                                        <option value="">Local Embalming</option>
                                                                    
                                                                </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">Coffine Size</label>
                                                                <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="coffine" class="form-select">
                                                                      <option  readonly Selected=" "> </option>
                                                                        <option value="">Normal</option>
                                                                        <option value="">Oversize</option>
                                                                        <option value="">Overlength</option>
                                                                        
                                                                    
                                                                </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">Dental Condition</label>
                                                                <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="dental" class="form-select">
                                                                      <option  readonly Selected=" "> </option>
                                                                        <option value="">Crowns</option>
                                                                        <option value="">Gold Teeth</option>
                                                                        <option value="">Adornments</option>
                                                                        <option value="">False Teeth</option>
                                                                    
                                                                </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">General Condition</label>
                                                                <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="general" class="form-select">
                                                                      <option  readonly Selected=" "> </option>
                                                                        <option value="">CompleteBody</option>
                                                                        <option value="">IncompleteBody</option>
                                                                        <option value="">Well-Preserved</option>
                                                                        <option value="">Decomposed</option>
                                                                    
                                                                </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">Age Group</label>
                                                                <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="age_group" class="form-select">
                                                                      <option  readonly Selected=" "> </option>
                                                                        <option value="">Adult</option>
                                                                        <option value="">Child</option>
                                                                    
                                                                </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">Head Hair</label>
                                                                <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="head_hair" class="form-select">
                                                                      <option  readonly Selected=" "> </option>
                                                                        <option value="">African</option>
                                                                        <option value="">Other</option>
                                                                    
                                                                </select>
                                                                </div>
                                                            </div>
                                                            <div>
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Notes</label>
                                                                <textarea name='notes' required class="form-control" rows="5"></textarea>
                                                            </div>
                                                        </div>

                                                        
                                                        
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">Skin Marks</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="skin_marks" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div>

                                                        <hr>
                                                        <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div>
                </div>
                        
                        
                                                                
                        
                <h5 class="card-title">Funeral List</h5>
                <label for="txt" class="col-lg-1 col-form-label"  style="margin-left:820px !important">search</label>
                        
                        <input id="txt" name="search" type="text" class="">
                <div class="row g-3" style="margin-top:10px !important" >
                <style>
                    .table>:not(:last-child)>:last-child>*{
                    background-color:#555659;
                    }
                </style>

                <?php
                    $physicals=DB::table('deceased_info')
                    ->get();
                ?>
            
            <table id="datatable" class="table table-secondary table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                                <thead style="background-color:#053f9c">
                    <tr>
                        <th>first name</th>
                        <th>last name</th>
                        <th>id number</th>
                        <th>date of death</th>
                        <th>date of funeral</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>

                    @foreach($physicals as $physical)
                    <tr>
                        <td>{{$physical->first_name}}</td>
                        <td>{{$physical->last_name}}</td>
                        <td>{{$physical->id_number}}</td>
                        <td>{{$physical->date_of_death}}</td>
                        <td>{{$physical->date_of_funeral}}</td>
                        
                        <td style="width: 100px">
                            <a class="btn btn-outline-info btn-sm edit" title="Edit">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                                                            
                            <a class="btn btn-outline-danger btn-sm delete" href="{{('/delete-physical/'.$decease->deceased_id)}}">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> 

<!-- end row -->
</div> 
                                    </div>

                                    
                                                    

                                                    
                            

                                               
                                               
                                            </fieldset>
                                            <h3>Burial</h3>
                                            <fieldset>
                                            <div class="row">
            <div class="col-sm-12">
                <div class="card" style="margin-top:-30px">
                    <div class="card-tittle" style="background-color:#67a8e4; height:50px; align:center !important;border-radius: 10px 10px 10px 10px !important;box-shadow: 2px 5px 10px #888888;border: 1px solid;">
                    <h4 style="margin-top:10px !important; margin-left:40% !important;"> BURIAL</h4>
                     </div>
                    <div class="card-body">
                        
                                
                                         <div class="row">
                                                  
                                                </div>
                                                <div class="row">
                                                 
                                                    <div>
                                                        <hr class="line1">
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                
                                             
                                                <fieldset>
                                                <div class="row">
                                                    
                                                    </div>
                                                    <div class="row">
                                                    
                                                        
                                                    </div>
                                                    
                                    <div class="row">
                                                    

                                            
                                         <div class="row g-3 " novalidate>
                                            <div class="col-md-3">
                                                <label for="validationCustom04" class="form-label">Date of Funeral</label>
                                                <input id="txtCityBilling" name="date_of_funeral" type="date" class="form-control">  
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom04" class="form-label">Time of Funeral</label>
                                                <input id="txtCityBilling" name="time_of_funeral" type="time" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustomUsername" class="form-label">Burial Order Number</label>
                                                <input id="txtCityBilling" name="order_number" type="text" class="form-control">
                                            </div>
                                            <div class="col-md-3" style="margin-bottom:10px !important">
                                                <label for="validationCustom04" class="form-label">Policy Number</label>
                                                <input id="txtCityBilling" name="policy_number" type="text" class="form-control">
                                                <!-- <div class="invalid-feedback">
                                                    Please select a valid state.
                                                </div> -->
                                            </div>
                                        </div>
                                           
                                   

                                        <div class="row g-3 " novalidate>
                                            <div class="col-md-3">
                                                <label for="validationCustom04" class="form-label">Funeral/Driverandcar</label>
                                                <input id="txtCityBilling" name="funeral_driver" type="text" class="form-control">  
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom04" class="form-label">Cementary/Crematorium</label>
                                                <input id="txtCityBilling" name="cementry" type="text" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustomUsername" class="form-label">Grave Number</label>
                                                <input id="txtCityBilling" name="grave_number" type="text" class="form-control">
                                            </div>
                                            
                                        </div>
                                           
                                    </div>
                                                        <hr>
                                               
                                            
                                                <div class="card">
                                                    <div class="card-body">
                                                    
                                                        <h4 class="card-title">Funeral List</h4>
                                                        
                                                        <div class="row g-3" style="margin-top:10px !important" >
                                                        <?php
                                                            $burials=DB::table('deceased_info')
                                                            ->get();
                                                        ?>
                                                        
                                                    
                                                        <table id="datatable" class="table table-secondary table-hover dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                                            <thead>
                                                            <tr>
                                                            <th>first name</th>
                                                            <th>last name</th>
                                                            <th>id number</th>
                                                            <th>date of death</th>
                                                            <th>date of funeral</th>
                                                            <th>Action</th>
                                                                
                                                                
                                                        </tr>
                                                            </thead>


                                                            <tbody>
                                                            @foreach($burials as $burial)
                                                            <tr>
                                                            <td>{{$burial->first_name}}</td>
                                                            <td>{{$burial->last_name}}</td>
                                                            <td>{{$burial->id_number}}</td>
                                                            <td>{{$burial->date_of_death}}</td>
                                                            <td>{{$burial->date_of_funeral}}</td>
                                                            
                                                            <td style="width: 100px">
                                                                <a class="btn btn-outline-info btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                                 </a>
                                                            
                                                                <a class="btn btn-outline-danger btn-sm delete" href="{{('/delete-burial/'.$burial->deceased_id)}}" >
                                                                <i class="fa fa-trash"></i>
                                                                </a>
                                                            </td>
                                                            </tr>
                                                            
                                                            @endforeach
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>
                
                                             </div>
                                            </div>
                                            <div class="tab-pane p-3" id="profile-1" role="tabpanel">
                                            <fieldset>
                                                <div class="row">
                                                  
                                                </div>
                                                <div class="row">
                                                 
                                                    
                                                </div>
                                            </div>    
                                            
                                            <style>
                                            .wizard>.actions a, .wizard>.actions a:active, .wizard>.actions a:hover
                                             {
                                                background-color: #67a8e4;
                                                border-radius: 4px;
                                                padding: 8px 15px;
                                                color: #030714;
                                                border-radius: 4px;
                                                padding: 8px 15px;
                                                border-radius: 10px 10px 10px 10px !important;
                                                box-shadow: 2px 5px 10px #888888;
                                                border: 1px solid;
                                            }
                                            .wizard>.actions .disabled a, .wizard>.actions .disabled a:active, .wizard>.actions .disabled a:hover {
                                                opacity: .65;
                                                background-color: #67a8e4;
                                                color: #01030a;
                                                cursor: not-allowed;
                                            }
                                           </style>
                        
                                            
                                            </fieldset>
                                            
                                           
                                            
                                        
                                            <h3>Terms and conditions</h3>
                                            <fieldset>
                                                <div class="p-3">
                                                    <div class="">
                                                        <input type="checkbox" class="form-check-input me-2" id="customCheck1">
                                                        <label class="form-label" name="terms" for="customCheck1">I agree with the Terms and Conditions.</label>
                                                    </div>
                                                </div>  
                                                <button  type="submit" style="background-color:#67a8e4;border-radius: 4px;padding: 8px 15px;border-radius: 10px 10px 10px 10px !important;box-shadow: 2px 5px 10px #888888;border: 1px solid;}">Final </button>
 
                                            </fieldset>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- row end -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © TSHITSHITHE.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Tendai ICT
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- end main content-->

        </div>

        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0">
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="Layouts-1">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch">
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="Layouts-2">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="Layouts-3">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox"  id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>
            
            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- form wizard -->
        <script src="assets/libs/jquery-steps/build/jquery.steps.min.js"></script>

        <!-- form wizard init -->
        <script src="assets/js/pages/form-wizard.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/admiria-multi/layouts/vertical/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Mar 2022 09:05:28 GMT -->
</html>
