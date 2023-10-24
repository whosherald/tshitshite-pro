@extends('Admin.layout')
@section('admin.content')

<div class="main-content">

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-tittle" style="background-color:#67a8e4; height:50px; align:center !important;">
                    <h4 style="margin-top:10px !important; margin-left:50% !important;"> CLAIMS DETAILS</h4>
                     </div>
                    <div class="card-body">
                        <div>
                        <h6>Member</h6> 
                        </div>
                        <hr>
                    <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" action="{{ url('/save-applications')}}" method="POST">
                        @csrf
                        <fieldset>                 
                        <div class="row">
                            <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label name="claiming" class="container">Claiming for member
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                        </label>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label name="apply" class="container">Apply waiting period
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                        </label>
                                    </div>
                            </div>
                        </div>
                        
                        <hr>
                             
                                        <div class="row">
                                                  
                                            </div>
                                                <div>
                                                    <h6>Claim Details</h6> 
                                                </div>
                                                <hr>
                                            <div class="row">
                                                 
                                                
                                                </div>
                                                
                                                <div class="row">
                                                                                                                                                                                                                                                                                                               
                                                    <div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">claim date</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="claim_date" type="date" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">claim number</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="claim_number" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">cause of death</label>
                                                            <div class="col-lg-9">
                                                               
                                                            <input id="txtCityBilling" name="cause_death" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Claim Notes</label>
                                                            <div class="col-lg-9">
                                                               
                                                            
                                                                <textarea  name="notes"required class="form-control" rows="5"></textarea>
                                                                
                                                            
                                                            
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">cover amount</label>
                                                            <div class="col-lg-9">
                                                              
                                                            <input id="txtCityBilling" name="cover_amount" type="text" class="form-control"> 
                                                            </div>
                                                            <div class="col-md-6" style="margin-top:20px;">
                                                            
                                                    </div>
                                                    <div class="col-md-6" style="margin-top:20px;>
                                                            <div class="row mb-3">
                                                                <label class="container">Apply waiting period
                                                                <input name="apply_period"type="checkbox" >
                                                                <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                    </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                    <div class="col-md-6">                                                     
                                                                                                                                                                                         
                                                </div>
                                                

                                                  
                        
                                
                               
                            </div>
                    
                            </div>
                                      
                                 <div class="button-items">
                                        <button type="button" class="btn btn-success waves-effect waves-light">print claim</button>
                                        <button type="button" class="btn btn-success waves-effect waves-light">add docs</button>
                                        <button type="button" class="btn btn-success waves-effect waves-light">payment history</button>
                                        <button type="button" class="btn btn-success waves-effect waves-light">claim payment</button>
                                        <button type="button" class="btn btn-success waves-effect waves-light">clear</button>
                                        
                                        <a href="{{url('/claimant-details')}}" type="submit" class="btn btn-success waves-effect waves-light" style="margin-left:650px">Next</a>
                                        
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