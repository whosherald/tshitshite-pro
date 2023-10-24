@extends('Admin.layout')
@section('admin.content')
        <!-- Start right Content here -->
            <!-- ============================================================== -->
              <!-- ============================================================== -->

              <?php
                     $claims=DB::table('claimant_details')
                    ->get();
                ?>
<form id="form-horizontal" class="form-horizontal form-wizard-wrapper" action="{{ url('/save-applications')}}" method="POST">
@csrf
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-tittle" style="background-color:#67a8e4; height:50px; align:center !important;border-radius: 10px 10px 10px 10px !important;box-shadow: 2px 5px 10px #888888;border: 1px solid;">
                    <h4 style="margin-top:15px !important; margin-left:40% !important;"> CLAIMS LOGGED</h4>
                     </div>
                    <div class="card-body">
                        
                        <hr>
                                <fieldset>
                                                <div class="row">
                                                  
                                                </div>
                                                <div class="row">
                                                 
                                                
                                                </div>
                                                
                                                <div class="row">
                                                                                                                                                                                                                                                                                                               
                                                    <div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Date from</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="datefrom" type="date" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Date to</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="dateto" type="date" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Status</label>
                                                            <div class="col-lg-9">
                                                               
                                                                <select class="form-select" name="status" id="validationCustom04" required>
                                                                    <option selected disabled value="">Choose</option>
                                                                    
                                                                    <option value="Active" >Any</option>
                                                                    <option>New</option>
                                                                    <option>Paid</option>
                                                                    <option>Rejected</option>
                                                                    <option>Supporting documents missing </option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Show entries</label>
                                                            <div class="col-lg-9">
                                                                <select class="form-select" required name="showentries">
                                                                <option selected disabled value="">Choose</option>
                                                                <option value=active>10</option>
                                                                <option>20</option>
                                                                <option>25</option>
                                                                <option>50</option>
                                                                <option>100</option>
                                                                <option>200</option>
                                                                <option>250</option>
                                                                <option>500</option>  
                                                                </select>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="col-md-6">                                                     
                                                                                                                                                                                         
                                                </div>

                                                <style>
                                                       
                                                        
                                                             .table-secondary 
                                                            {
                                                               --bs-table-bg: #e2e3e5;
                                                               --bs-table-striped-bg: #d7d8da;
                                                               --bs-table-striped-color: #000;
                                                               --bs-table-active-bg: #cbccce;
                                                               --bs-table-active-color: #fff;
                                                               --bs-table-hover-bg: #d1d2d4;
                                                               --bs-table-hover-color: #000;
                                                               color: #000;
                                                               border-color: #cbccce;
                                                           }
                                                           .table>:not(:last-child)>:last-child>*
                                                           {

                                                               background-color:#555659; ! important;
                                                           }

                                                               .btn-outline-danger 
                                                           {
                                                               color: #ea553d;
                                                               border-color: #ea553d;
                                                           }
                                                           .btn-outline-info 
                                                           {
                                                               color: #3bc3e9;
                                                               border-color: #3bc3e9;
                                                           }

                                                           .table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
                                                                border: 1px solid #ddd;
                                                            }
                                                            .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
                                                                z-index: 3;
                                                                color: #fff;
                                                                cursor: default;
                                                                background-color: #337ab7;
                                                                border-color: #337ab7;
                                                            }
                                                       </style>
                                                

                                                  
                        
                                </fieldset>
                               
                    </div>
                    
                <!-- </div>
                                      
                <label for="txt" class="col-lg-1 col-form-label"  style="margin-left:940px !important">search</label>
                        
                        <input id="txt" name="search" type="text" class="">
                <div class="row g-3" style="margin-top:10px !important" >
                                                        -->
                <hr>
                           
                
                            </div>
                            
                            <table id="datatable" class="table table-secondary table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <thead>
                                            <tr>
                                                <th>first name</th>
                                                <th>last name</th>
                                                <th>id number</th>
                                                <th>branch name</th>
                                                <th>claim date</th>
                                                <th>cause of death</th>                                               
                                                <th>province</th>
                                                <!-- <th>status</th> -->
                                                <th>town/city</th>
                                                
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                   
                                                   @foreach($claims as $claim)
                                                       <tr>
                                                           <td>{{$claim->first_name}}</td>
                                                           <td>{{$claim->last_name}}</td>
                                                           <td>{{$claim->id_number}}</td>
                                                           <td>{{$claim->bank_branch}}</td>
                                                           <td>{{$claim->claim_date}}</td>
                                                           <td>{{$claim->cause_of_death}}</td>
                                                           <td>{{$claim->province}}</td>
                                                           <td>{{$claim->town_city}}</td>
                                                           
                                                           <td style="width: 100px">
                                                               <a class="btn btn-outline-info btn-sm edit" title="Edit">
                                                                   <i class="fas fa-pencil-alt"></i>
                                                               </a>
                                                               <a class="btn btn-outline-danger btn-sm delete" title="delete"
                                                                href="{{('/delete-logg/'.$claim->claimant_id)}}">
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
</form>
@endsection