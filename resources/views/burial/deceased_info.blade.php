<!-- @extends('Admin.layout')
@section('admin.content')

   <!-- ============================================================== -->

   <?php
        $deceased=DB::table('deceased_info')
                ->get();
   ?>
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-tittle" style="background-color:#67a8e4; height:50px; align:center !important;">
                    <h4 style="margin-top:10px !important; margin-left:50% !important;"> DECEASED INFO </h4>
                     </div>
                    <div class="card-body">
                    
                        <hr>
                                <fieldset>
                                                
                                                
                                                <div class="row">               
                                                <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">first name</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="full_name" type="text" class="form-control">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">last name</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="surname" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Street Address</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="street" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Town or City</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="twn_city" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                        <div class="row g-3 " novalidate>
                                            <div class="col-md-3">
                                            <label for="validationCustom04" class="form-label">ID number</label>
                                            <input id="txtCityBilling" name="id_num" type="text" class="form-control">  
                                            </div>
                                            <div class="col-md-3">
                                            <label for="validationCustom04" class="form-label">Date of Birth</label>
                                            <input id="txtCityBilling" name="date_birth" type="date" class="form-control">
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
                                                <label for="validationCustom04" class="form-label">Code</label>
                                                <input id="txtCityBilling" name="code" type="text" class="form-control">
                                                <!-- <div class="invalid-feedback">
                                                    Please select a valid state.
                                                </div> -->
                                            </div>
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
                                                <input id="txtCityBilling" name="contact_num" type="text" class="form-control">
                                                <!-- <div class="invalid-feedback">
                                                    Please select a valid state.
                                                </div> -->
                                            </div>
                                            </div>
                                            <div class="row g-3 " novalidate>
                                            <div class="col-md-3">
                                            <label for="validationCustom04" class="form-label">date of death</label>
                                            <input id="txtCityBilling" name="cause_death" type="date" class="form-control">  
                                            </div>
                                            <div class="col-md-3">
                                            <label for="validationCustom04" class="form-label">Date of funeral</label>
                                            <input id="txtCityBilling" name="date_death" type="date" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustomUsername" class="form-label">Collected from</label>
                                                <input id="txtCityBilling" name="collect_from" type="text" class="form-control">
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
                                            <input id="txtCityBilling" name="tag_num" type="text" class="form-control">  
                                            </div>
                                            <div class="col-md-3">
                                            <label for="validationCustom04" class="form-label">Fridge Number</label>
                                            <input id="txtCityBilling" name="fridge_num" type="text" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustomUsername" class="form-label">Shelf Number</label>
                                                <input id="txtCityBilling" name="shelf_num" type="text" class="form-control">
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

                                    <div class="button-items" style="margin-top:-30px">                    
                                        <a href="{{url('/physical')}}" type="button" class="btn btn-success waves-effect waves-light" style="margin-left:1110px">Next</a>
                                    </div>
                                    <hr>
                        <div class="container-fluid">

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
            
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

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

                    @foreach($deceased as $decease)
                    <tr>
                        <td>{{$decease->first_name}}</td>
                        <td>{{$decease->last_name}}</td>
                        <td>{{$decease->id_number}}</td>
                        <td>{{$decease->date_of_death}}</td>
                        <td>{{$decease->date_of_funeral}}</td>
                        <td>Active</td>
                        <td>
                        <button type="button" class="btn btn-success waves-effect waves-light">Make Payments</button>
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

@endsection -->