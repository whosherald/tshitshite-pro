@extends('Admin.layout')
@section('admin.content')
        <!-- Start right Content here -->
            <!-- ============================================================== -->
            <?php
                $deceased=DB::table('deceased_info')
                ->get();
            ?>
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                               
                              <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home-1" role="tabpanel">
                                                <fieldset>
                                                    <div class="row">
                                                    
                                                    </div>
                                                    <div class="row">
                                                    
                                                        <div>
                                                            <hr class="line1">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                    <div class="card-tittle" style="background-color:#67a8e4; height:50px; align:center !important; margin-bottom:20px;">
                                                    <h4 style="margin-top:10px !important; margin-left:50% !important;"> BURIAL</h4>
                                                    </div>

                                            
                                                    <div class="row g-3 " novalidate>
                                            <div class="col-md-3">
                                            <label for="validationCustom04" class="form-label">Date of Funeral</label>
                                            <input id="txtCityBilling" name="date_funeral" type="date" class="form-control">  
                                            </div>
                                            <div class="col-md-3">
                                            <label for="validationCustom04" class="form-label">Time of Funeral</label>
                                            <input id="txtCityBilling" name="tym_funeral" type="time" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustomUsername" class="form-label">Burial Order Number</label>
                                                <input id="txtCityBilling" name="order_num" type="text" class="form-control">
                                            </div>
                                            <div class="col-md-3" style="margin-bottom:10px !important">
                                                <label for="validationCustom04" class="form-label">Policy Number</label>
                                                <input id="txtCityBilling" name="policy_num" type="text" class="form-control">
                                                <!-- <div class="invalid-feedback">
                                                    Please select a valid state.
                                                </div> -->
                                            </div>
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
                                                <input id="txtCityBilling" name="graveno" type="text" class="form-control">
                                            </div>
                                            
                                            </div>
                                           
                                        </div>
                                                        <hr>
                                                       
                                                                        
                                                </fieldset>

                                            <div class="button-items"   style="margin-bottom:-1px">
                                                <a href="{{url('/physical')}}" type="button" class="btn btn-success waves-effect waves-light" style="margin-left:10px,margin-bottom:-20px">previous</a>
                                                <div type="submit" class="btn btn-success waves-effect waves-light" style="margin-left:1000px">submit</div>
                                            </div>
                                            
                                                <div class="card">
                                                    <div class="card-body">
                                                    
                                                        <h4 class="card-title">Funeral List</h4>
                                                        
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
                                                                <i class=" mdi mdi-pencil-box-outline display-6 "></i>
                                                                <i class=" mdi  mdi-checkbox-multiple-marked-circle display-6 "></i>
                                                                <i class=" mdi  mdi-gmail display-6 "></i>
                                                            
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
            <!-- end main content-->


@endsection