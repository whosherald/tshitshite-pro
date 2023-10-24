@extends('Admin.layout')
@section('admin.content')

   <!-- ============================================================== -->

<div class="main-content">

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-tittle" style="background-color:#67a8e4; height:50px; align:center !important;">
                    <h4 style="margin-top:10px !important; margin-left:50% !important;"> DECEASED DETAILS</h4>
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
                                                
                                             <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" action="{{ url('/save-applications')}}" method="POST">
                                                @csrf 
                                                <fieldset>
                                                <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">First Name</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="first_name" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Street Address</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="street_address" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Last Name</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="last_name" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Town or City</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="town_city" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">ID Number</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="id_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Province</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="province" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Date of Birth</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="date_of_birth" type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Time of Funeral </label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="time_of_funeral" type="time" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Date of death</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="date_of_death" type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Cemetery</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="cemetery" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Cause of Death</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="cause_of_death" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Code</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="code" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Date of Funeral</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="date_of_funeral" type="date" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Collected From</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="collected_from" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Driver and Car</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="driver_car" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Grave No</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="grave_no" type="text" class="form-control">
                                                            </div>
                                                        </div>
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
                                                                        <input id="txtCityBilling" name="txtCityBilling" type="radio" >
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col md-6">
                                                                        <label for="txtLastNameBilling" class="col-lg-3col-form-label">Female</label>
                                                                    </div>
                                                                    <div class="col md-3">
                                                                        <input id="txtCityBilling" name="txtCityBilling" type="radio" >
                                                                    </div>
                                                                </div>
                                                       
                                                                </div>
                                                       
                                                             </div>
                                                            </div>
                                                            
                                                            
                                                    </div>
                                                    
                                                    
                                                   
                                                    
                                                </div>
                                                

                                                  
                        
                                
                               
                    </div>
                    
                </div>
                                      
                                 <div class="button-items">
                                 <a href="{{url('/claimant-details')}}" type="button" class="btn btn-success waves-effect waves-light">Back</a>

                                        <button type="button" class="btn btn-success waves-effect waves-light">Reset</button>
                                        <!-- <button type="submit" class="btn btn-success waves-effect waves-light" style="margin-left:1040px">Save</button> -->
                                        <button  type="submit"class="btn btn-success waves-effect waves-light">FINAL </button>
                                 </div>
                                 
                                                       
                <hr>
                           
                
                            </div>
            
        </div>
        
        
    </div>
    
</div>
</div>
</fieldset>
</form>
@endsection