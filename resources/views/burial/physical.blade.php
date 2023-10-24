@extends('Admin.layout')
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
                         <div class="col-lg-12">
                             <div class="card">
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
                                                    <h4 style="margin-top:10px !important; margin-left:50% !important;"> PHYSICAL DESCRIPTION</h4>
                                                    </div>

                                            
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
                                                                <select id="ddlCreditCardType" name="age_gp" class="form-select">
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
                                                                <select id="ddlCreditCardType" name="hair" class="form-select">
                                                                      <option  readonly Selected=" "> </option>
                                                                        <option value="">African</option>
                                                                        <option value="">Other</option>
                                                                    
                                                                </select>
                                                                </div>
                                                            </div>
                                                            <div>
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Notes</label>
                                                                <textarea name='note' required class="form-control" rows="5"></textarea>
                                                            </div>
                                                        </div>

                                                        
                                                        
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">Skin Marks</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="skin" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div>
                    
                                                    

                                                    
                            
                                                </fieldset>
                                       

                                    <div>

                                    <hr>
                                    </div>

                                    <div class="button-items"   style="margin-bottom:20px">
                                    
                                        <a href="{{url('/deceased-info')}}" type="button" class="btn btn-success waves-effect waves-light" style="margin-left:10px">previous</a>
                                        <a href="{{url('/burial')}}" type="button" class="btn btn-success waves-effect waves-light" style="margin-left:1000px">Next</a>
                                    </div>
                                            
                                                <div class="card">
                                                    <div class="card-body">
                                                    
                                                        <h4 class="card-title">funeral list</h4>
                                                        <label for="txt" class="col-lg-1 col-form-label"  style="margin-left:830px !important">search</label>
                        
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



                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>               
@endsection