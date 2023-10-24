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
                    <h4 style="margin-top:10px !important; margin-left:50% !important;"> CLAIMANT DETAILS</h4>
                     </div>
                    <div class="card-body">
                        
                        
                                
                                                <div class="row">
                                                  
                                                </div>
                                                <div class="row">
                                                 
                                                    <div>
                                                        <hr class="line1">
                                                    </div>
                                                </div>
                                            <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" action="{{ url('/save-applications')}}" method="POST">
                                                @csrf

                                                <fieldset>
                                                <div class="row">
                                                

                                        
                                                <div class="col-md-6">
                                                         <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Title</label>
                                                            <div class="col-lg-9">
                                                               
                                                                <select class="form-select" name="title" id="ddlCreditCardType">
                                                                    <option value="">Choose</option>
                                                                    
                                                                    <option value="Mr" >Mr</option>
                                                                    <option value="Mrs">Mrs</option>
                                                                    <option value="Miss">Miss</option>
                                                                    <option value="Dr">Dr</option>
                                                                    <option value="Prof">Prof</option>
                                                                    
                                                                </select>
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
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">First Name</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="first_name" type="text" class="form-control">
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
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">ID Number</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="id_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Code </label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="code" type="text" class="form-control">
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
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Contact Number</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="contact_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    
                                                    </div>
                                                </fieldset>
                                                    
                                                    <hr>
                                                <fieldset>
                                                    <div>
                                                        <h5>Beneficiary Banking Details</h5> 
                                                    </div>
                                                    <div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Bank Name</label>
                                                                <div class="col-lg-9">
                                                               
                                                                <select class="form-select"name="bank_name" id="validationCustom04" required>
                                                                    <option value="">Choose</option>
                                                                    
                                                                    <option value="Standard Bank" >Standard Bank</option>
                                                                    <option value="Captec Bank">Captec Bank</option>
                                                                    <option value="FNB Bank">FNB Bank</option>
                                                                    <option value="ABSA Bank">ABSA Bank</option>
                                                                    <option value="Nedbank">Nedbank</option>
                                                                    
                                                                </select>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Account Holder</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="acc_holder" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Bank Branch</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="bank_branch" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Account Number</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="acc_number" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Branch Code</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="branch_code" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Account Type</label>
                                                            <div class="col-lg-9">
                                                               
                                                                <select class="form-select" name="account" id="validationCustom04" required>
                                                                    <option  value="">Choose</option>
                                                                    
                                                                    <option value="Active" >Any</option>
                                                                    <option>Current/Cheque</option>
                                                                    <option>Savings</option>
                
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                    
                                                    
                                                   
                                                    
                                                </div>
                                                

                                                  
                        
                                
                               
                    </div>
                    
                </div>
                                      
                                 <div class="button-items">
                                 <a href="{{url('/claims-details')}}" type="button" class="btn btn-success waves-effect waves-light">Back</a>
                                        

                                        <button type="button" class="btn btn-success waves-effect waves-light">Recent</button>
                                        
                                        <a href="{{url('/deceased-details')}}" type="submit" class="btn btn-success waves-effect waves-light" style="margin-left:1020px">Next</a>
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