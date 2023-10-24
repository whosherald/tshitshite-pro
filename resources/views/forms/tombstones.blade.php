@extends('Admin.layout')
@section('admin.content')


  <!-- ============================================================== -->

 
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
                                                    
                                                        
                                                    </div>
                                                    
                                                    <div class="row">
                                                    


                                                    <div>
                                        <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" action="{{('/tombstone-application')}}" method="post">
                                            @csrf
                                            
                                            
                                           
                                           
                                        <fieldset>
                                            <div class="page-content">
                                                        <div class="container-fluid">
                                                            
                                                                <div class="col-sm-12">
                                                                    <div class="card"style="margin-top:-70px">
                                                                        
                                                             <div class="card-body" style="margin-top:-40px" >
                                           
                               
                                        <fieldset>
                                                        <div class="container-fluid">
       
                                                    <div class="col-sm-12">
                                                        
                                                            
                                                            <div class="card-body" >
                                                                
                                                                
                                                            
                                                                <fieldset>   
                                                            
                                                        
                                                        <div class="card-body">
                        
                                                        <h3>Tombstone</h3>      
                        
                                        <fieldset>
                                                
                                                                                                 
                                                <div class="row">
                                                <div class="card-tittle" style="background-color:#67a8e4; height:50px; align:center !important;margin-top:20px !important;border-radius: 10px 10px 10px 10px !important;box-shadow: 2px 5px 10px #888888;border: 1px solid;">
                                                <h4 style="margin-top:15px !important; margin-left:40% !important;"> MEMBER</h4>
                                                 </div>
                                            <div>
                                                <hr>
                                            </div>
                                                
                                                <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">first Name</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="firstname" type="text" class="form-control">
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
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">last Name</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="lastname" type="text" class="form-control">
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
                                                            <input id="txtCityBilling" name="id_number" type="date" class="form-control">
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
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Date of Application</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="date_apply" type="date" class="form-control">
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
                                                    
                                                    
                                                    
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Tell Number</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="tellnum" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtLastNameBilling" class="col-lg-3 col-form-label">Cell Number</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="cellnum" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                   
                                                    
                                                </div>

                                                

                                                <div class="row">
                                                <div>
                                                <hr>
                                                 </div>
                                                 <h3>Deceased Info</h3>

                                        
                                                <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">first Name</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="first_name" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Cementry / Crematorium</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="cementary" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">last Name</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="last_name" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Grave NO</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="gravenumber" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">ID Number</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="id_no" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Date of Memorial</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="memorial" type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                   
                                        
                                                    <div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Deceased</label>
                                                                <div class="col-lg-9">
                                                                    <select id="ddlCreditCardType" name="decease" class="form-select">
                                                                        <option  readonly Selected=" "> </option>
                                                                        <option value="">Buried</option>
                                                                        <option value="">Cremated</option>
                                                                        
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                   
                                                 
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtLastNameBilling" class="col-lg-3 col-form-label">Erect</label>
                                                            <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="erect" class="form-select">
                                                                    <option  readonly Selected=" "> </option>
                                                                    <option value=""> </option>
                                                                    <option value="">YES</option>
                                                                    <option value="">NO</option>
                                                                        
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtLastNameBilling" class="col-lg-3 col-form-label">Contact person</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="contact_person" type="number" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="row">
                                                    <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Contact person</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="contact_person" type="number" class="form-control">
                                                                </div>
                                                            
                                                    </div>
                                                    </div> -->
                                                    
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Contact NO</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="contact_number" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                         </div>
                                                    
                                                     </div>
                                                     
                                                     <h5>TOMBSTONES</h5> 
                                                        <div class="row">
                                                        <div class="col sm-6">
                                                             <label class="form-label">tombstone</label>
                                                            <div>
                                                                <textarea name="tombston" required class="form-control" rows="5"></textarea>
                                                            </div>
                                                         </div>
                                                         <div class="col sm-6">
                                                             <label class="form-label">Notes</label>
                                                            <div>
                                                                <textarea name="Notes" required class="form-control" rows="5"></textarea>
                                                            </div>
                                                         </div>
                                                         <div class="col sm-6">
                                                             <label class="form-label">message</label>
                                                            <div>
                                                                <textarea name="message" required class="form-control" rows="5"></textarea>
                                                            </div>
                                                         </div>
                                                         <div class="col sm-6">
                                                             <label class="form-label">Select Tombstone</label>
                                                            <div>
                                                            <input id="txtCityBilling" name="selects" type="file" class="form-control">
                                                            </div>
                                                            
                                                            
                                                         </div> 

                                                        </div>
                                           
                                                    <?php
                                                        $tombstones=DB::table('tomb_deceased_info')
                                                        ->get();
                                                    ?>
                                                    
                                        <div id="liveAlertPlaceholder" class="button-items" style="margin-top:20px">
                                        <button  type="submit" class="btn btn-success waves-effect waves-light" id="liveAlertBtn" style="border-radius: 4px;padding: 8px 15px;color: #fff;}">Submit </button>
                                        
                                       
                                        </div>

                                        <!-- <div id="liveAlertPlaceholder"></div>
                                        <button type="button" class="btn btn-primary" id="liveAlertBtn">Submit</button> -->
                                        

                                        <script>
                                            const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

                                            const alert = (message, type) => {
                                            const wrapper = document.createElement('div')
                                            wrapper.innerHTML = [
                                                `<div class="alert alert-${type} alert-dismissible" role="alert">`,
                                                `   <div>${message}</div>`,
                                                '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
                                                '</div>'
                                            ].join('')

                                            alertPlaceholder.append(wrapper)
                                            }

                                            const alertTrigger = document.getElementById('liveAlertBtn')
                                            if (alertTrigger) {
                                            alertTrigger.addEventListener('click', () => {
                                                alert('Thanks!! your application has SUCCESSFULL', 'success')
                                            })
                                            }
                                        </script>



                                                       
                                        <hr>       
                                                </fieldset>

                             

                                                        <style>
                                                       
                                                        
                                                        .table-secondary {
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
                                                        </style>
                                                    <div class="card-body">
                                                    
                                                       
                                                        <div class="row g-3" style="margin-top:10px !important" >
                                                        
                                                    
                                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                                    <thead>
                                                         <tr>
                                                            <th>first name</th>
                                                            <th>last name</th>
                                                            <th>id number</th>
                                                            <th>contact no</th>
                                                           
                                                            <th>Action</th>
                                
                                                        </tr>
                                                    </thead>


                                                    <tbody>

                                                        @foreach( $tombstones as $tombstone)
                                                            <tr>
                                                                <td>{{$tombstone->first_name}}</td>
                                                                <td>{{$tombstone->last_name}}</td>
                                                                <td>{{$tombstone->id_number}}</td>
                                                                <td>{{$tombstone->contact_no}}</td>
                                                               
                                                            
                                                            
                                                            <td style="width: 100px">
                                                                                                <a class="btn btn-outline-info btn-sm edit" title="Edit">
                                                                                                    <i class="fas fa-pencil-alt"></i>
                                                                                                </a>
                                                                                                
                                                                                                <a class="btn btn-outline-danger btn-sm edit" href="{{('/delete-tombinfo/'.$tombstone->tomb_id)}}" >
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



                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div> 
        </fieldset>  
        </form>            
@endsection