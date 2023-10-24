@extends('Admin.layout')
@section('admin.content')

    <link href="assets/css/member-capture.css" rel="stylesheet"/>

        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12" style="">
                        <div class="">

                            <div class="row mt-3" style="background: none">
                                <div class="col-12" style="padding: 0 1em; z-index: 0; background: none; margin-top:-3.7% ! important">
                                    <h5 >Member Capture</h5>

                                    {{-- Progress Blocks --}}
                                    <div class=" mb-4 mt-4 progress" style="z-index: 0; margin-top:1% ! important">
                                        <div class="progress-row" style="">
                                            <div class="p-2 process d-flex box-top" style="border-radius: 0.5em; align-items:center; gap:1em; box-shadow: 10px 6px 7px rgba(0, 0, 0, 0.2);" >
                                                <div class="d-flex justify-content-center align-items-center ml-1 box-top-no" style=" border-radius: 50%; border: 1.5px solid black;">1</div>
                                                <h6 style="">Capture New Member</h6>
                                            </div>
                                            <div class="p-2 process d-flex box-top" style="border-radius: 0.5em; align-items:center; gap:1em; box-shadow: 10px 6px 7px rgba(0, 0, 0, 0.2);" >
                                                <div class="d-flex justify-content-center align-items-center ml-1 box-top-no" style=" border-radius: 50%; border: 1.5px solid black;">2</div>
                                                <h6 style="color:black">Policy Details</h6>
                                            </div>
                                            <div class="p-2 process d-flex box-top" style="border-radius: 0.5em; align-items:center; gap:1em; box-shadow: 10px 6px 7px rgba(0, 0, 0, 0.2);" >
                                                <div class="d-flex justify-content-center align-items-center ml-1 box-top-no" style=" border-radius: 50%; border: 1.5px solid black;">3</div>
                                                <h6 style="">Capturing Extended Member</h6>
                                            </div>
                                            <div class="p-2 process d-flex box-bottom" style="border-radius: 0.5em; align-items:center; gap:1em; box-shadow: 10px 6px 7px rgba(0, 0, 0, 0.2);" >
                                                <div class="d-flex justify-content-center align-items-center ml-1 box-bottom-no" style=" border-radius: 50%; border: 1.5px solid black;">4</div>
                                                <h6 style="">Beneficiary Details</h6>
                                            </div>
                                        </div>
                                        <div class="progress-row" style="">
                                            <div class="p-2 process d-flex box-bottom" style="border-radius: 0.5em; align-items:center; gap:1em; box-shadow: 10px 6px 7px rgba(0, 0, 0, 0.2);" >
                                                <div class="d-flex justify-content-center align-items-center ml-1 box-bottom-no" style=" border-radius: 50%; border: 1.5px solid black;">5</div>
                                                <h6 style="">Payment Methods</h6>
                                            </div>
                                            <div class="p-2 process d-flex box-bottom" style="border-radius: 0.5em; align-items:center; gap:1em; box-shadow: 10px 6px 7px rgba(0, 0, 0, 0.2);" >
                                                <div class="d-flex justify-content-center align-items-center ml-1 box-bottom-no" style=" border-radius: 50%; border: 1.5px solid black;">6</div>
                                                <h6 style="">Verfication</h6>
                                            </div>
                                            <div class="p-2 process d-flex box-bottom" style="border-radius: 0.5em; align-items:center; gap:1em; box-shadow: 10px 6px 7px rgba(0, 0, 0, 0.2);" >
                                                <div class="d-flex justify-content-center align-items-center ml-1 box-bottom-no" style=" border-radius: 50%; border: 1.5px solid black;">7</div>
                                                <h6 style="">Compliance</h6>
                                            </div>
                                            <div class="p-2 process d-flex box-bottom" style="border-radius: 0.5em; align-items:center; gap:1em; box-shadow: 10px 6px 7px rgba(0, 0, 0, 0.2);" >
                                                <div class="d-flex justify-content-center align-items-center ml-1 box-bottom-no" style=" border-radius: 50%; border: 1.5px solid black;">8</div>
                                                <h6 style="">Uploads</h6>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <hr > --}}
                                    <form id="wizard-validation-form"  >
                                        <div>
                                        @csrf 

                                            <section>
                                                <input type="hidden" name="section" value="section1">

                                                <h3 class="text-sm-start">Sales Representative</h3>
                                                <hr>
                                                <div class="row d-flex mt-4" style="justify-content: space-between">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Sales Rep Code:</label>
                                                                <select  name="sales_rep_code" id="sales_rep_code" class="form-control" style="width: 70%; margin-left: 10px;" >
                                                                    <option value="" selected>{{ isset($saleRep) ? $saleRep->sales_rep_code : '' }}</option>
                                                                    <option value="123" selected>123</option>
                                                                    <option value="456" selected>456</option>
                                                                    <option value="789" selected>789</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Sales Rep Name:</label>
                                                                <input class="form-control" id="name" name="name" type="text" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($saleRep) ? $saleRep->name : '' }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row d-flex" style="justify-content: space-between">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Branch Name:</label>
                                                                <input class="form-control" id="branch_name" name="branch_name" type="text" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($saleRep) ? $saleRep->branch_name : '' }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Email Address:</label>
                                                                <input class="form-control" id="email" name="email" type="email" style="width: 70%; margin-left: 10px;"
                                                                    onchange="EmailValidation()" placeholder="{{ isset($saleRep) ? $saleRep->email : '' }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row d-flex" style="justify-content: space-between">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Policy Number:</label>
                                                                <input class="form-control" id="policy_number" name="policy_number" type="text" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($saleRep) ? $saleRep->policy_number : '' }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Agent Name:</label>
                                                                <input id="agent_number" name="agent_number" type="text" class="form-control" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($saleRep) ? $saleRep->agent_number : '' }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr >
                                                <h3>Main Member</h3>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="fullname" class=" col-form-label" style="width: 20%;">Full Names</label>
                                                                    <input class="required form-control" id="full-name"
                                                                    onkeyup="updateInitials()" name="fullname" type="text"
                                                                    style="width: 59.5%; margin-left: 9px;" placeholder="{{ isset($mainMember) ? $mainMember->fullname : '' }}">
                                                                    <input class="required form-control" id="initialsyyy" name="initials" type="text" style="width: 18%; gap:1em" placeholder="initials">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="surname" class="col-form-label" style="width: 20%;">Surname:</label>
                                                                <input class="required form-control" id="surname" name="surname" type="text" style="width: 80%; margin-left: 10px;"
                                                                    placeholder="{{ isset($mainMember) ? $mainMember->surname : '' }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->

                                                    <!-- script for generating initials -->
                                                    <script>
                                                            function updateInitials() {
                                                                var fullNameInput = document.getElementById('full-name');
                                                                var initialsOutput = document.getElementById('initials');
                                                                var fullName = fullNameInput.value;
                                                                // console.log(fullName)
                                                                var initials = getInitials(fullName);
                                                                console.log(initials)
                                                                document.getElementById('initialsyyy').value = initials;
                                                                initialsOutput.innerHTML = initials;
                                                                // initialsOutput.textContent = initials;
                                                            }

                                                            function getInitials(fullName) {
                                                                var names = fullName.split(' ');
                                                                var initials = '';

                                                                for (var i = 0; i < names.length; i++) {
                                                                    var name = names[i];
                                                                    if (name.length > 0) {
                                                                        initials += name.charAt(0).toUpperCase();
                                                                    }
                                                                }

                                                                return initials;

                                                            }
                                                        </script>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="password2"class="col-form-label" style="width: 20%;">Title:</label>
                                                                <select  name="title" class="required form-control" id="title" style="width: 36%; margin-left: 6px;">

                                                                    <option value="">{{ isset($mainMember) ? $mainMember->title : '' }}</option>
                                                                    <option value="mrs">Mrs</option>
                                                                    <option value="mr">Mr</option>
                                                                    <option value="dr">Dr</option>
                                                                    <option value="miss">Miss</option>
                                                                    <option value="prof">Prof</option>

                                                                </select>
                                                                <select id="gender" name="gender" class="form-control" style="width: 40%; gap:1rem;">
                                                                    <option value=""> Gender:</option>
                                                                    <option value="F">Female</option>
                                                                    <option value="M">Male</option>
                                                                    <option value="">Other</option>
                                                                </select>
                                                                        
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 20%;">Marital Status:</label>
                                                                <select id="marital_status" name="marital_status" class="form-control" style="width: 80%; margin-left: 10px;">
                                                                <option value="">{{ isset($mainMember) ? $mainMember->marital_status : '' }}</option>
                                                                <option value="S">Single</option>
                                                                <option value="M">Married</option>
                                                                <option value="D">Divorced</option>
                                                                <option value="W">Window</option>
                                                                </select>
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="id_number" class="col-form-label" style="width: 20%;">ID No:</label>
                                                                <input id="identityNumber" name="id_number"type="text" maxlength="13"                                   
                                                                onkeyup="generateDateOfBirth()" class="required form-control" style="width: 59.5%; margin-left: 9px;"                                                                    
                                                                placeholder="{{ isset($mainMember) ? $mainMember->id_number : '' }}">
                                                                <input class="form-control" name="age" type="text" style="width: 18%; gap:1rem"                            
                                                                placeholder="Age:"id="age" disabled>
                                                                        
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 20%;">Date of Birth:</label>
                                                                <input name="date_of_birth" type="date" class="required form-control" style="width: 80%; margin-left: 10px;"                                              
                                                                placeholder="{{ isset($mainMember) ? $mainMember->date_of_birth : '' }}" id="dateOfBirth" disabled>   
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->


                                                <!-- <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Date of Birth:</label>
                                                                <input id="date_of_birth" name="date_of_birth" type="date" onchange="calAge()"class="form-control" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($mainMember) ? $mainMember->date_of_birth : '' }}">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Age:</label>
                                                                <input class="form-control" id="age" name="age" type="number" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($mainMember) ? $mainMember->age : '' }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>end row -->

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 20%;">Passport Num:</label>
                                                                <input class="required form-control" id="passport_number" name="passport_number" type="text" style="width: 80%; margin-left: 10px;" 
                                                                placeholder="{{ isset($mainMember) ? $mainMember->passport_number : '' }}">                                                                       
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 20%;">Citizenship:</label>
                                                                <select id="citizenship" name="citizenship" class="form-control" style="width: 80%; margin-left: 10px;">
                                                                <option value=""> {{ isset($mainMember) ? $mainMember->citizenship : '' }}</option>
                                                                <option value="RSA">South Africa</option>
                                                                <option value="ZMA">Zambia</option>
                                                                <option value="MZQ">Mozambique</option>
                                                                </select>                                                                                                                                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->

                                                                <!-- script for date of birth -->
                                                        <script>
                                                        function generateDateOfBirth() {
                                                            const identityNumberInput = document.getElementById(
                                                                'identityNumber');
                                                            const dateOfBirthInput = document.getElementById(
                                                                'dateOfBirth');

                                                            const identityNumber = identityNumberInput.value;
                                                            if (identityNumber.length === 13) {
                                                                const year = identityNumber.substring(0, 2);
                                                                const month = identityNumber.substring(2, 4);
                                                                const day = identityNumber.substring(4, 6);

                                                                const currentDate = new Date();
                                                                const currentYear = currentDate.getFullYear().toString()
                                                                    .substring(2, 4);
                                                                const prefix = (currentYear - year >= 0) ? '20' : '19';
                                                                const generatedDateOfBirth = prefix + year + '-' +
                                                                    month + '-' + day;

                                                                const currentyear1 = new Date().getFullYear();
                                                                const year1 = prefix + year;
                                                                console.log(year1)

                                                                age = currentyear1 - year1;
                                                                console.log(age)
                                                                document.getElementById("age").value = age;

                                                                dateOfBirthInput.value = generatedDateOfBirth;
                                                            } else {
                                                                dateOfBirthInput.value = '';
                                                            }
                                                        }
                                                        </script>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 20%;">Province:</label>
                                                                <select id="province" name="province" class="form-control" style="width: 80%; margin-left: 10px;">
                                                                    <option value=""> {{ isset($mainMember) ? $mainMember->province : '' }}</option>
                                                                    <option value="gauteng">gauteng</option>
                                                                    <option value="limpopo">limpopo</option>
                                                                    <option value="free state">free state</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 20%;">Town or City:</label>
                                                                <input class="form-control" id="city" name="city" type="text" style="width: 80%; margin-left: 10px;" 
                                                                placeholder="{{ isset($mainMember) ? $mainMember->city : '' }}">  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 20%;">Street Address:</label>
                                                                <input class="form-control" id="street_address" name="street_address" type="text" style="width: 80%; margin-left: 10px;" 
                                                                placeholder="{{ isset($mainMember) ? $mainMember->street_address : '' }}"> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 20%;">PO Box:</label>
                                                                <input id="po_box" name="po_box" type="text" class="form-control" style="width: 59.5%; margin-left: 9px; 
                                                                placeholder="{{ isset($mainMember) ? $mainMember->po_box : '' }}"> 
                                                                <input class="form-control" id="postal_code" name="postal_code" type="text" style="width: 18%; gap:1em" 
                                                                placeholder="postal code:">  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 20%;">Captured by:</label>
                                                                <input class="form-control" id="captured_name" name="captured_name" type="text" style="width: 80%; margin-left: 10px;" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 20%;">Captured email:</label>
                                                                <input class="form-control" id="captured_email" name="captured_email" type="text" style="width: 80%; margin-left: 10px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->

                                            </section>

                                            <section>
                                                <input type="hidden" name="section" value="section2">

                                                <h3>Policy Details</h3>
                                                <div class="row d-flex mt-4" style="justify-content: space-between">
                                                    <div class="col-md-6">
                                                        <div class="form-group clearfix">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Policy Type</label>

                                                                <select class="form-control"onChange="myplan()" id="policy_type" name="policy_type" style="width: 70%; margin-left: 10px;">
                                                                    <option id="producttype"  readonly name="product_type" value="plan_A ">{{ isset($policyDetails) ? $policyDetails->policy_type : '' }}</option>
                                                                    <option id="producttype"  readonly name="product_type" value="plan_A ">plan_A</option>
                                                                    <option id="producttype"  readonly name="product_type" value="plan_B ">plan_B</option>
                                                                    <option id="producttype"  readonly name="product_type" value="plan_C ">plan_C</option>
                                                                    <option id="producttype"  readonly name="product_type" value="plan_D ">plan_D</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Policy Status</label>

                                                                <select id="policy_status" name="policy_status" class="form-control" style="width: 70%; margin-left: 10px;">
                                                                    <option value="">{{ isset($policyDetails) ? $policyDetails->policy_status : '' }}</option>
                                                                    <option value="Active">Active </option>
                                                                    <option value="Archieve">Archive</option>
                                                                    <option value="Cancelled">Cancelled</option>
                                                                    <option value="Deceased">Deceased</option>
                                                                    <option value="Deleted">Deleted</option>
                                                                    <option value="On Trial">On Trial</option>
                                                                    <option value="Lapsed">Lapsed</option>
                                                                    <option value="In Arrears">In Arrears</option>
                                                                    <option value="Lead">Lead</option>
                                                                    <option value="NTU">NTU</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Policy Start Date</label>
                                                                <input class="form-control" id="policy_start_date" name="policy_start_date" type="date"style="width: 70%; margin-left: 10px;" placeholder="{{ isset($policyDetails) ? $policyDetails->policy_start_date : '' }}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Inception Date</label>
                                                                <input id="inception_date" name="inception_date" type="date" class="form-control" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($policyDetails) ? $policyDetails->inception_date : '' }}">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Premium</label>
                                                                <input class="form-control" id="premium" name="premium" type="text"style="width: 70%; margin-left: 10px;" placeholder="{{ isset($policyDetails) ? $policyDetails->premium : '' }}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Cover Amount</label>
                                                                <input id="cover_amount" name="cover_amount" type="text" class="form-control"style="width: 70%; margin-left: 10px;" placeholder="{{ isset($policyDetails) ? $policyDetails->cover_amount : '' }}">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->

                                                <script>

                                                    function prodplan(){
                                                        var inputage = document.getElementById("prodtype").value;

                                                        console.log(year)

                                                        age = currentyear-year;
                                                        console.log(age)

                                                        document.getElementById("prodprem").value=age;

                                                    }

                                                </script>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Policy Cover Date</label>
                                                                <input class="form-control" id="policy_cover_date" name="policy_cover_date" type="date"style="width: 70%; margin-left: 10px;" placeholder="{{ isset($policyDetails) ? $policyDetails->policy_cover_date : '' }}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Total Premium</label>
                                                                <input id="total_premium" name="total_premium" type="text" class="form-control"style="width: 70%; margin-left: 10px;" placeholder="{{ isset($policyDetails) ? $policyDetails->total_premium : '' }}">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Under written By</label>
                                                                <input class="form-control" id="underwritten_by" name="underwritten_by" type="text"style="width: 70%; margin-left: 10px;" placeholder="{{ isset($policyDetails) ? $policyDetails->underwritten_by : '' }}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Policy Number</label>
                                                                <input class="form-control" id="policy_number" name="policy_number" type="text"style="width: 70%; margin-left: 10px;" placeholder="{{ isset($policyDetails) ? $policyDetails->policy_number : '' }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->


                                            </section>

                                            <section>
                                                <input type="hidden" name="section" value="section3">
                                                <h3>Extended Member</h3>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 20%;">Full names:</label>                                                                       
                                                                <input class="required form-control" id="emfullname"  name="emfullname" type="text"                                                                       
                                                                style="width: 59.5%; margin-left: 9px;"onkeyup="updateExtended()"> 
                                                                <input class="form-control" id="eminitials" placeholder="initials" name="eminitials" type="text"style="width: 18%; gap:1em">                                                                       
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 20%;">Surname:</label>
                                                                <input id="emsurname" name="emsurname" type="text" class="form-control"style="width: 80%; margin-left: 10px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- script for generating initials -->
                                                <script>
                                                    function updateExtended() {
                                                        var fullNameInput = document.getElementById('emfullname');
                                                        var initialsOutput = document.getElementById('initials');
                                                        var fullName = fullNameInput.value;
                                                        // console.log(fullName)
                                                        var initials = getInitials(fullName);
                                                        console.log(initials)
                                                        document.getElementById('eminitials').value = initials;
                                                        initialsOutput.innerHTML = "initials";
                                                        // initialsOutput.textContent = initials;
                                                    }

                                                    function getInitials(fullName) {
                                                        var names = fullName.split(' ');
                                                        var initials = '';

                                                        for (var i = 0; i < names.length; i++) {
                                                            var name = names[i];
                                                            if (name.length > 0) {
                                                                initials += name.charAt(0).toUpperCase();
                                                            }
                                                        }

                                                        return initials;

                                                    }
                                                </script>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 20%;">Title:</label>
                                                                <select id="emtitle" name="emtitle" class="form-control"style="width: 36%; margin-left: 6px;">
                                                                    <option value="">Title</option>
                                                                    <option value="Mr">Mr</option>
                                                                    <option value="Mrs">Mrs</option>
                                                                    <option value="Dr">Dr</option>
                                                                    <option value="Prof">Prof</option>
                                                                    <option value="Adv">Adv</option>
                                                                </select>
                                                                <select id="emgender" name="emgender" class="form-control"style="width: 40%; gap:1rem;">
                                                                    <option value="">Gender:</option>
                                                                    <option value="F">Female</option>
                                                                    <option value="M">Male</option>
                                                                    <option value="Other">Other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 20%;">Relationship:</label>
                                                                <select id="emrelationship" name="emrelationship" class="form-control"style="width: 80%; margin-left: 10px;">
                                                                    <option value="">select</option>
                                                                    <option value="Spouse">Spouse</option>
                                                                    <option value="child">child</option>
                                                                    <option value="father">father</option>
                                                                    <option value="mother">mother</option>
                                                                    <option value="sibling">sibling</option>
                                                                    <option value="Free extended">Free extended</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 20%;">ID No:</label>
                                                                <input class="required form-control" maxlength="13" id="emid_number" name="emid_number" type="text"                                                                        
                                                                style="width: 59.5%; margin-left: 9px;" onkeyup="generateDateOfBirths()">  
                                                                <input class="required form-control" placeholder="Age:"name="age"type="text"                                                                           
                                                                style="width: 18%; gap:1rem" id="age_ext" disabled>                                                                      
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 20%;">Date of Birth:</label>
                                                                <input id="emdate_of_birth" name="emdate_of_birth" type="date" class="form-control"style="width: 80%; margin-left: 10px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- script for date of birth -->
                                                <script>
                                                    function generateDateOfBirths() {
                                                        const identityNumberInput = document.getElementById(
                                                            'emid_number');
                                                        const dateOfBirthInput = document.getElementById(
                                                            'emdate_of_birth');

                                                        const emid_number = identityNumberInput.value;
                                                        if (emid_number.length === 13) {
                                                            const year = emid_number.substring(0, 2);
                                                            const month = emid_number.substring(2, 4);
                                                            const day = emid_number.substring(4, 6);


                                                            // Check if month value is between 1 and 12
                                                            if (month > 0 && month <= 12) {
                                                                // Check if day value is between 1 and 31
                                                                if (day > 0 && day <= 31) {
                                                                    const currentDate = new Date();
                                                                    const currentYear = currentDate.getFullYear()
                                                                        .toString().substring(2, 4);
                                                                    const prefix = (currentYear - year >= 0) ? '20' :
                                                                        '19';
                                                                    const generatedDateOfBirths = prefix + year + '-' +
                                                                        month + '-' + day;

                                                                    const currentyear1 = new Date().getFullYear();
                                                                    const year1 = prefix + year;
                                                                    console.log(year1)

                                                                    age = currentyear1 - year1;
                                                                    console.log(age)
                                                                    document.getElementById("age_ext").value = age;

                                                                    dateOfBirthInput.value = generatedDateOfBirths;
                                                                } else {
                                                                    alert("Please enter a valid day.");
                                                                    day = ''; // Clear the day value
                                                                    dateOfBirthInput.value = '';
                                                                }
                                                            } else {
                                                                alert("Please enter a valid month.");
                                                                month = ''; // Clear the month value
                                                                dateOfBirthInput.value = '';
                                                            }
                                                        } else {

                                                            dateOfBirthInput.value = '';
                                                        }
                                                    }
                                                </script>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center"style="gap:1em">                                                                        
                                                                <label for="tellphone" class="col-form-label" style="width: 20%;">Email Address:</label>
                                                                <input id="ememail" name="ememail" type="text" class="form-control"style="width: 80%; margin-left: 10px;">                                                                                                                                                                
                                                            </div>
                                                        </div>
                                                    </div>    
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 20%;">Cellphone:</label>
                                                                <input class="form-control" id="emcellphone" name="emcellphone" type="text"style="width: 80%; margin-left: 10px;">                                                                  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                    $explans=DB::table('exproducts_plan')
                                                    ->get();
                                                ?>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 20%;">Policy Type:</label>
                                                                <select onChange="myplan()" id="empolicy_type"name="empolicy_type"                                                                        
                                                                class="required form-control"style="width: 80%; margin-left: 10px;">                                                                    
                                                                @foreach($explans as $explan)
                                                                <option id="policy_type" readonly name="product_type"value="{{ $explan->explan_type }}">{{ $explan->explan_type }}</option>                                                                  
                                                                @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 20%;">Cover Amount:</label>
                                                                <input class="form-control" id="emcover_amount" name="emcover_amount" type="text"style="width: 80%; margin-left: 10px;">                                                                       
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 20%;">Add Premium:</label>
                                                                <input class="form-control" id="emadd_premium" name="emadd_premium" type="text"style="width: 80%; margin-left: 10px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 20%;">Total Premium:</label>
                                                                <input id="emtotal_premium" name="emtotal_premium" type="text" class="form-control"style="width: 80%; margin-left: 10px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr>
                                                <button id="addExtMember" type="button" class="btn mb-2" style="background:#010e46; font-family: 'Helvetica Neue', Arial, sans-serif; color:rgba(255, 255, 255, 0.912)" onclick="addExtendedMember()">Add Extended Member</button>
                                                <hr>
                                                {{-- Table --}}

                                                <div class="table-responsive" style="width: 100%; border: none; border-radius: 0.5em; overflow-x: auto;">

                                                    <table id="datatable" class="table table-sm tablestriped align-middle data-table " style="width: 100%; margin-bottom: 0; border:none; font-family: 'Helvetica Neue', Arial, sans-serif;">
                                                        <thead class="" style="background:#010e46;color:rgba(255, 255, 255, 0.912);">
                                                            <tr>
                                                                <th style="padding:0.5em; vertical-align: top;">FullNames</th>
                                                                <th style="padding:0.5em; vertical-align: top;">Surname</th>
                                                                <th style="padding:0.5em; vertical-align: top;">ID Number</th>
                                                                <th style="padding:0.5em; vertical-align: top;">Relationship</th>
                                                                <th style="padding:0.5em; vertical-align: top;">Email Address</th>
                                                                <th style="padding:0.5em; vertical-align: top;">Cellphone</th>
                                                                <th style="padding:0.5em; vertical-align: top;">Gender</th>
                                                                <th style="padding:0.5em; vertical-align: top;">Policy Type</th>
                                                                <th style="padding:0.5em; vertical-align: top;">Date of Birth</th>                                        
                                                                <th style="padding:0.5em; vertical-align: top;">Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="extendedMember_body" class="table-bordered">
                                                            @forelse ($extendedMembers as $extendedMember)
                                                            <tr>
                                                                <td style="vertical-align: middle">{{ $extendedMember->emfullname }}</td>
                                                                <td style="vertical-align: middle">{{ $extendedMember->emsurname }}</td>
                                                                <td style="vertical-align: middle">{{ $extendedMember->emid_number }}</td>
                                                                <td style="vertical-align: middle">{{ $extendedMember->emrelationship }}</td>
                                                                <td style="vertical-align: middle">{{ $extendedMember->ememail }}</td>
                                                                <td style="vertical-align: middle">{{ $extendedMember->emcellphone }}</td>
                                                                <td style="vertical-align: middle">{{ $extendedMember->emgender }}</td>
                                                                <td style="vertical-align: middle">{{ $extendedMember->empolicy_type }}</td>
                                                                <td style="vertical-align: middle">{{ $extendedMember->emdate_of_birth }}</td>                                                                
                                                                <td style="display: flex; align-items: center; justify-content: space-around;gap:0.5em; border:none; padding:0.5em">
                                                                    <button type="button" class="btn btn-sm show-confirm action" onclick="editMember({{ $extendedMember->em_id }})" style="background:none;">
                                                                        <i class="fa fa-edit fa-lg" style=""></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-sm show-confirm action Actionpreload" onclick="deleteMember({{ $extendedMember->em_id }})" style="background:none; ">
                                                                        <i class="fa fa-trash fa-lg" style="border:none"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            @empty
                                                            <tr>
                                                                <td id="no-extended-members" colspan="12">No extended members found.</td>
                                                            </tr>
                                                            @endforelse
                                                        </tbody>
                                                    </table>
                                                </div>


                                                <script>
                                                    function deleteMember(memberId) { //Delete button
                                                        fetch('/member-capture/' + memberId, {
                                                            method: 'POST',
                                                            headers: {
                                                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                                            'Content-Type': 'application/x-www-form-urlencoded'
                                                            },
                                                            body: 'section=3&_method=DELETE'
                                                        })
                                                        .then(function(response) {
                                                            if (response.ok) {
                                                            // Success! Refresh the page or update the UI as needed
                                                            location.reload();
                                                            } else {
                                                            // Error handling
                                                            console.log('Delete request failed with status:', response.status);
                                                            }
                                                        })
                                                        .catch(function(error) {
                                                            console.log('Delete request error:', error);
                                                        });
                                                    }
                                                    function editMember(memberId) {
                                                        window.location.href = '/member-capture/' + memberId + '/edit';
                                                    }

                                                    function checkFieldsE(extendedMember) {
                                                        if (
                                                            extendedMember.emfullname === '' ||
                                                            extendedMember.emsurname === '' ||
                                                            extendedMember.emrelationship === '' ||
                                                            extendedMember.emid_number === '' ||
                                                            extendedMember.empolicy_type === '' ||
                                                            extendedMember.coverAmount === ''
                                                        ) {
                                                            let emptyFields = [];
                                                            if (extendedMember.emfullname === '') emptyFields.push('Full Name');
                                                            if (extendedMember.emsurname === '') emptyFields.push('Surname');
                                                            if (extendedMember.emrelationship === '') emptyFields.push('Relationship');
                                                            if (extendedMember.emid_number === '') emptyFields.push('ID Number');
                                                            if (extendedMember.empolicy_type === '') emptyFields.push('Policy');
                                                            if (extendedMember.coverAmount === '') emptyFields.push('Cover Amount');

                                                            iziToast.warning({
                                                                title: 'Warning',
                                                                message: 'The following fields are required:\n' + emptyFields.join('\n'),
                                                                position: 'topCenter',
                                                                timeout: false
                                                            });
                                                            return false;
                                                        }
                                                        return true;
                                                    }

                                                    function addExtendedMember() {
                                                        var title = document.getElementById('emtitle').value;
                                                        var relationship = document.getElementById('emrelationship').value;
                                                        var fullName = document.getElementById('emfullname').value;
                                                        var surname = document.getElementById('emsurname').value;
                                                        var idNumber = document.getElementById('emid_number').value;
                                                        var dateOfBirth = document.getElementById('emdate_of_birth').value;
                                                        var cellphone = document.getElementById('emcellphone').value;
                                                        var email = document.getElementById('ememail').value;
                                                        var initials = document.getElementById('eminitials').value;
                                                        var gender = document.getElementById('emgender').value;
                                                        var coverAmount = document.getElementById('emcover_amount').value;
                                                        var policyType = document.getElementById('empolicy_type').value;
                                                        var addPremium = document.getElementById('emadd_premium').value;
                                                        var totalPremium = document.getElementById('emtotal_premium').value;

                                                        var extendedMember = {
                                                            _token: '{{ csrf_token() }}',
                                                            section: 'section3',
                                                            emtitle: title,
                                                            emrelationship: relationship,
                                                            emfullname: fullName,
                                                            emsurname: surname,
                                                            emid_number: idNumber,
                                                            emdate_of_birth: dateOfBirth,
                                                            emcellphone: cellphone,
                                                            ememail: email,
                                                            eminitials: initials,
                                                            emgender: gender,
                                                            emcover_amount: coverAmount,
                                                            empolicy_type: policyType,
                                                            emadd_premium: addPremium,
                                                            emtotal_premium: totalPremium
                                                        };
                                                        console.log("first", extendedMember);

                                                        if (checkFieldsE(extendedMember)) {
                                                            fetch('/member-capture', {
                                                                method: 'POST',
                                                                headers: {
                                                                    'Content-Type': 'application/json',
                                                                    'X-CSRF-TOKEN': extendedMember._token
                                                                },
                                                                body: JSON.stringify(extendedMember)
                                                            })
                                                            .then(response => response.json())
                                                            .then(response => {
                                                                document.getElementById('emtitle').value = '';
                                                                document.getElementById('emrelationship').value = '';
                                                                document.getElementById('emfullname').value = '';
                                                                document.getElementById('emsurname').value = '';
                                                                document.getElementById('emid_number').value = '';
                                                                document.getElementById('emdate_of_birth').value = '';
                                                                document.getElementById('emcellphone').value = '';
                                                                document.getElementById('ememail').value = '';
                                                                document.getElementById('eminitials').value = '';
                                                                document.getElementById('emgender').value = '';
                                                                document.getElementById('emcover_amount').value = '';
                                                                document.getElementById('empolicy_type').value = '';
                                                                document.getElementById('emadd_premium').value = '';
                                                                document.getElementById('emtotal_premium').value = '';

                                                                console.log("input", response.input);
                                                                console.log("Extended member", response);

                                                                if (response.error) {
                                                                    iziToast.error({
                                                                        title: 'Error',
                                                                        message: "An error occurred: " + response.error,
                                                                        position: 'topCenter',
                                                                        timeout: false
                                                                    });
                                                                } else {
                                                                    var noExtendedMembersRow = document.querySelector("#no-extended-members");
                                                                    if (noExtendedMembersRow) {
                                                                        noExtendedMembersRow.remove();
                                                                    }

                                                                    var newRow = document.createElement("tr");
                                                                    newRow.className = "extended_member-row";
                                                                    newRow.setAttribute("data-id", response.extendedMember.em_id);

                                                                    newRow.innerHTML = `
                                                                        <td style='vertical-align: middle'>${response.input.emfullname}</td>
                                                                        <td style='vertical-align: middle'>${response.input.emsurname}</td>
                                                                        <td style='vertical-align: middle'>${response.input.emid_number}</td>
                                                                        <td style='vertical-align: middle'>${response.input.emrelationship}</td>
                                                                        <td style='vertical-align: middle'>${response.input.ememail}</td>
                                                                        <td style='vertical-align: middle'>${response.input.emcellphone}</td>
                                                                        <td style='vertical-align: middle'>${response.input.emgender}</td>
                                                                        <td style='vertical-align: middle'>${response.input.empolicy_type}</td>
                                                                        <td style='vertical-align: middle'>${response.input.emdate_of_birth}</td></td>
                                                        
                                                                    `;

                                                                    var buttonColumn = document.createElement("td");
                                                                    buttonColumn.style.cssText = "display: flex; align-items: center; justify-content: space-around;gap:0.5em; border:none; padding:0.5em";

                                                                    var editButton = document.createElement("button");
                                                                    editButton.type = "button";
                                                                    editButton.className = "btn btn-sm edit show-confirm action";
                                                                    editButton.style.background = "none";
                                                                    editButton.innerHTML = '<i class="fas fa-edit fa-lg"></i>';
                                                                    editButton.addEventListener("click", function() {
                                                                        editMember(response.extendedMember.em_id);
                                                                    });

                                                                    var deleteButton = document.createElement("button");
                                                                    deleteButton.type = "button";
                                                                    deleteButton.className = "btn btn-sm show-confirm action Actionpreload";
                                                                    deleteButton.style.background = "none";
                                                                    deleteButton.innerHTML = '<i class="fa fa-trash fa-lg"></i>';
                                                                    deleteButton.addEventListener("click", function() {
                                                                        deleteMember(response.extendedMember.em_id);
                                                                    });

                                                                    buttonColumn.appendChild(editButton);
                                                                    buttonColumn.appendChild(deleteButton);
                                                                    newRow.appendChild(buttonColumn);

                                                                    var extendedMemberBody = document.getElementById("extendedMember_body");
                                                                    var noMembersRow = extendedMemberBody.querySelector("tr.no-members");
                                                                    if (noMembersRow) {
                                                                        extendedMemberBody.removeChild(noMembersRow);
                                                                    }

                                                                    extendedMemberBody.appendChild(newRow);
                                                                }

                                                            })
                                                        }
                                                    }

                                                    $(document).ready(function() {

                                                        $("#addExtMember").on("click", async function() {
                                                            var title = document.getElementById('emtitle').value;
                                                            var relationship = document.getElementById('emrelationship').value;
                                                            var fullName = document.getElementById('emfullname').value;
                                                            var surname = document.getElementById('emsurname').value;
                                                            var idNumber = document.getElementById('emid_number').value;
                                                            var dateOfBirth = document.getElementById('emdate_of_birth').value;
                                                            var cellphone = document.getElementById('emcellphone').value;
                                                            var email = document.getElementById('ememail').value;
                                                            var initials = document.getElementById('eminitials').value;
                                                            var gender = document.getElementById('emgender').value;
                                                            var coverAmount = document.getElementById('emcover_amount').value;
                                                            var policyType = document.getElementById('empolicy_type').value;
                                                            var addPremium = document.getElementById('emadd_premium').value;
                                                            var totalPremium = document.getElementById('emtotal_premium').value;

                                                            var extendedMember = {
                                                                _token: '{{ csrf_token() }}',
                                                                section: 'section3',
                                                                emtitle: title,
                                                                emrelationship: relationship,
                                                                emfullname: fullName,
                                                                emsurname: surname,
                                                                emid_number: idNumber,
                                                                emdate_of_birth: dateOfBirth,
                                                                emcellphone: cellphone,
                                                                ememail: email,
                                                                eminitials: initials,
                                                                emgender: gender,
                                                                emcover_amount: coverAmount,
                                                                empolicy_type: policyType,
                                                                emadd_premium: addPremium,
                                                                emtotal_premium: totalPremium
                                                            };
                                                            console.log("first")

                                                            if (checkFieldsE(extendedMember)) {
                                                                await fetch('/member-capture', {
                                                                    method: 'POST',
                                                                    headers: {
                                                                        'Content-Type': 'application/json',
                                                                        'X-CSRF-TOKEN': extendedMember._token // Include the CSRF token header
                                                                    },
                                                                    body: JSON.stringify(extendedMember)
                                                                })
                                                                .then(response => response.json())
                                                                .then(response => {
                                                                    // Clear input fields
                                                                    document.getElementById('emtitle').value = '';
                                                                    document.getElementById('emrelationship').value = '';
                                                                    document.getElementById('emfullname').value = '';
                                                                    document.getElementById('emsurname').value = '';
                                                                    document.getElementById('emid_number').value = '';
                                                                    document.getElementById('emdate_of_birth').value = '';
                                                                    document.getElementById('emcellphone').value = '';
                                                                    document.getElementById('ememail').value = '';
                                                                    document.getElementById('eminitials').value = '';
                                                                    document.getElementById('emgender').value = '';
                                                                    document.getElementById('emcover_amount').value = '';
                                                                    document.getElementById('empolicy_type').value = '';
                                                                    document.getElementById('emadd_premium').value = '';
                                                                    document.getElementById('emtotal_premium').value = '';

                                                                    console.log("input", response.input);
                                                                    console.log("Extended member", response);
                                                                    if(response.error){
                                                                        iziToast.error({
                                                                            title: 'Error',
                                                                            message: "An error occurred: " + response.error,
                                                                            position: 'topCenter',
                                                                            timeout: false
                                                                        });
                                                                    }
                                                                    else{

                                                                        $("#no-extended-members").remove();
                                                                        var newRow = $("<tr>");
                                                                        newRow.addClass("extended_member-row"); // Add a custom class to the row
                                                                        newRow.attr("data-id", response.extendedMember.em_id);

                                                                        newRow.append("<td style='border: 1px solid;'>" + response.input.emfullname + "</td>");
                                                                        newRow.append("<td style='border: 1px solid;'>" + response.input.emsurname + "</td>");
                                                                        newRow.append("<td style='border: 1px solid;'>" + response.input.emid_number + "</td>");
                                                                        newRow.append("<td style='border: 1px solid;'>" + response.input.emrelationship + "</td>");
                                                                        newRow.append("<td style='border: 1px solid;'>" + response.input.emfullname + "</td>");
                                                                        newRow.append("<td style='border: 1px solid;'>" + response.input.emsurname + "</td>");
                                                                        newRow.append("<td style='border: 1px solid;'>" + "01" + "</td>");
                                                                        newRow.append("<td style='border: 1px solid;'>" + "DevOps" + "</td>");
                                                                        newRow.append("<td style='border: 1px solid;'>" + "01/01/2023" + "</td>");
                                                                        newRow.append("<td style='border: 1px solid;'>" + "02/02/2023" + "</td>");
                                                                        newRow.append("<td style='border: 1px solid;'>" + "03/03/2023" + "</td>");
                                                                        var buttonColumn = $('<td style="width: 110px; display: flex; align-items: center; justify-content: space-around;"></td>');

                                                                        var editButton = $('<button type="button" class="btn btn-outline-info btn-sm edit" style="background:none;"><i class="fas fa-pencil-alt"></i></button>');
                                                                        editButton.on('click', function() {
                                                                            editMember(response.extendedMember.em_id);
                                                                        });


                                                                        buttonColumn.append(editButton);

                                                                        var deleteButton = $('<button type="button" class="btn btn-sm show-confirm action Actionpreload" style="background:none;"><i class="fa fa-trash fa-lg"></i></button>');
                                                                        deleteButton.on('click', function() {
                                                                            deleteMember(response.extendedMember.em_id);
                                                                        });
                                                                        buttonColumn.append(deleteButton);
                                                                        newRow.append(buttonColumn);
                                                                        $("#extendedMember_body tr.no-members").remove();
                                                                        $("#extendedMember_body").append(newRow);
                                                                    }
                                                                })
                                                                .catch(error => {
                                                                    console.log(error);
                                                                });
                                                            }
                                                        });
                                                    });
                                                </script>

                                            </section>

                                            <section>
                                                <input type="hidden" name="section" value="section4">
                                                <h3>Beneficiary Details</h3>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Title:</label>
                                                                <select id="bd_title" name="bd_title" class="form-control"style="width: 70%; margin-left: 10px;">
                                                                    <option value="">Title</option>
                                                                    <option value="Mr">Mr</option>
                                                                    <option value="Miss">Miss</option>
                                                                    <option value="Mrs">Mrs</option>
                                                                    <option value="Dr">Dr</option>
                                                                    <option value="Prof">Prof</option>
                                                                    <option value="Adv">Adv</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Relationship:</label>
                                                                <select id="bd_relationship" name="bd_relationship" class="form-control"style="width: 70%; margin-left: 10px;">
                                                                    <option value="">select</option>
                                                                    <option value="Spouse">Spouse</option>
                                                                    <option value="child">child</option>
                                                                    <option value="father">father</option>
                                                                    <option value="mother">mother</option>
                                                                    <option value="sibling">sibling</option>
                                                                    <option value="Free extended">Free extended</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Full names:</label>
                                                                <input class="form-control" id="bd_fullnames" name="bd_fullnames" type="text"style="width: 70%; margin-left: 10px;">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Surname:</label>
                                                                <input id="bd_surname" name="bd_surname" type="text" class="form-control"style="width: 70%; margin-left: 10px;">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">ID No:</label>
                                                                <input class="form-control" id="bd_id_number" name="bd_id_number" type="text"style="width: 70%; margin-left: 10px;">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Date of Birth:</label>
                                                                <input id="bd_date_of_birth" name="bd_date_of_birth" type="date" class="form-control"style="width: 70%; margin-left: 10px;">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Cellphone:</label>
                                                                <input class="form-control" id="bd_cellphone" name="bd_cellphone" type="text"style="width: 70%; margin-left: 10px;">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Email Address:</label>
                                                                <input id="bd_email" name="bd_email" type="text" class="form-control"style="width: 70%; margin-left: 10px;">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Initials:</label>
                                                                <input class="form-control" id="bd_initials" name="bd_initials" type="text"style="width: 70%; margin-left: 10px;">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Gender:</label>
                                                                <select id="bd_gender" name="bd_gender" class="form-control"style="width: 70%; margin-left: 10px;">
                                                                    <option value=""></option>
                                                                    <option value="F">Female</option>
                                                                    <option value="M">Male</option>
                                                                    <option value="other">Other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Work Tell:</label>
                                                                <input class="form-control" id="bd_work_tell" name="bd_work_tell" type="text"style="width: 70%; margin-left: 10px;">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Percentage:</label>
                                                                <input id="bd_percentage" name="bd_percentage" type="number" class="form-control"style="width: 70%; margin-left: 10px;">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->
                                                <hr>

                                                <!-- start add button beneficiary -->
                                                <div id="inputFormRow">
                                                    <button id="addRow" type="button" class="btn" style="background:#010e46; font-family: 'Helvetica Neue', Arial, sans-serif; color:white" onclick="addBeneficiary()">Add Beneficiary</button>
                                                </div>

                                                <!-- button beneficiary style -->


                                                <script>
                                                    function AddBen(){
                                                        ++counterben
                                                        console.log(counterben);

                                                        addBens(); //$('#ben'+counter).show();
                                                        document.getElementById("bencounter").setAttribute("value", counterben);
                                                    }
                                                </script>

                                                <hr>

                                                <h4 style="padding-top: 0.3em">Benefinciary list</h4>
                                                <div class="table-responsive" style="width: 100%; border: none; border-radius: 0.5em; overflow-x: auto;">
                                                    <table id="datatable" class="table table-sm tablestriped align-middle data-table " style="width: 100%; margin-bottom: 0; border:none; font-family: 'Helvetica Neue', Arial, sans-serif;">
                                                        <thead class="text-light " style="background:#010e46;">
                                                            <tr>
                                                                <th style="padding:0.5em; vertical-align: top;">FIRST NAME</th>
                                                                <th style="padding:0.5em; vertical-align: top;">LAST NAME</th>
                                                                <th style="padding:0.5em; vertical-align: top;">ID NUMBER</th>
                                                                <th style="padding:0.5em; vertical-align: top;">GENDER</th>
                                                                <th style="padding:0.5em; vertical-align: top;">CELL</th>
                                                                <th style="padding:0.5em; vertical-align: top;">EMAIL</th>
                                                                <th style="padding:0.5em; vertical-align: top;">ACTIONS</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="beneficiaryMember_body" class="table-bordered">
                                                            @forelse ($beneficiaryMembers as $beneficiaryMember)
                                                            <tr>
                                                                <td style="vertical-align: middle">{{ $beneficiaryMember->bd_fullnames }}</td>
                                                                <td style="vertical-align: middle">{{ $beneficiaryMember->bd_surname }}</td>
                                                                <td style="vertical-align: middle">{{ $beneficiaryMember->bd_id_number }}</td>
                                                                <td style="vertical-align: middle">{{ $beneficiaryMember->bd_gender }}</td>
                                                                <td style="vertical-align: middle">{{ $beneficiaryMember->bd_cellphone }}</td>
                                                                <td style="vertical-align: middle">{{ $beneficiaryMember->bd_email }}</td>

                                                                <td style="display: flex;  justify-content: space-around; border:none; padding:0.5em 0;">
                                                                    <button type="button" class="btn btn-sm show-confirm action" onclick="editMembers({{ $beneficiaryMember->bd_id }})" style="background:none;">
                                                                        <i class="fa fa-edit fa-lg" style="border:none"></i>
                                                                    </button>               
                                                                    <button type="button" class="btn btn-sm show-confirm action Actionpreload" onclick="deleteMember({{ $beneficiaryMember->bd_id }})" style="background:none;">
                                                                        <i class="fa fa-trash fa-lg" style="border:none;"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            @empty
                                                            <tr>
                                                                <td id="no-beneficiary-members" colspan="12">No beneficiary members found.</td>
                                                            </tr>
                                                            @endforelse
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <script>

                                                    function deleteMember(memberId) { //Delete button
                                                        fetch('/member-capture/' + memberId, {
                                                            method: 'POST',
                                                            headers: {
                                                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                                                'Content-Type': 'application/x-www-form-urlencoded'
                                                            },
                                                            body: 'section=3&_method=DELETE'
                                                        })
                                                        .then(function(response) {
                                                            if (response.ok) {
                                                            // Success! Refresh the page or update the UI as needed
                                                            location.reload();
                                                            } else {
                                                            // Error handling
                                                            console.log('Delete request failed with status:', response.status);
                                                            }
                                                        })
                                                        .catch(function(error) {
                                                            console.log('Delete request error:', error);
                                                        });
                                                    }
                                                    function editMembers(memberId) {
                                                        window.location.href = '/member-capture/' + memberId + '/edit';
                                                    }

                                                    // Function to check if fields are empty
                                                    function checkFields(beneficiaryMember) {
                                                        if (
                                                            beneficiaryMember.bd_fullnames === '' ||
                                                            beneficiaryMember.bd_surname === '' ||
                                                            beneficiaryMember.bd_relationship === '' ||
                                                            beneficiaryMember.bd_id_number === ''
                                                        ) {
                                                            let emptyFields = [];
                                                            if (beneficiaryMember.bd_fullnames === '') emptyFields.push('Full Name,');
                                                            if (beneficiaryMember.bd_surname === '') emptyFields.push('Surname,');
                                                            if (beneficiaryMember.bd_relationship === '') emptyFields.push('Relationship,');
                                                            if (beneficiaryMember.bd_id_number === '') emptyFields.push('ID Number,');

                                                            iziToast.warning({
                                                                title: 'Warning',
                                                                message: 'The following fields are required:\n' + emptyFields.join('\n'),
                                                                position: 'topCenter',
                                                                timeout: false
                                                            });
                                                            return false;
                                                        }
                                                        return true;
                                                    }

                                                    function addBeneficiary() {
                                                        var title = document.getElementById('bd_title').value;
                                                        var relationship = document.getElementById('bd_relationship').value;
                                                        var fullName = document.getElementById('bd_fullnames').value;
                                                        var surname = document.getElementById('bd_surname').value;
                                                        var idNumber = document.getElementById('bd_id_number').value;
                                                        var dateOfBirth = document.getElementById('bd_date_of_birth').value;
                                                        var cellphone = document.getElementById('bd_cellphone').value;
                                                        var email = document.getElementById('bd_email').value;
                                                        var initials = document.getElementById('bd_initials').value;
                                                        var gender = document.getElementById('bd_gender').value;
                                                        var workTell = document.getElementById('bd_work_tell').value;
                                                        var percentage = document.getElementById('bd_percentage').value;

                                                        var beneficiaryMember = {
                                                            _token: document.querySelector('input[name="_token"]').value,
                                                            section: 'section4',
                                                            bd_title: title,
                                                            bd_relationship: relationship,
                                                            bd_fullnames: fullName,
                                                            bd_surname: surname,
                                                            bd_id_number: idNumber,
                                                            bd_date_of_birth: dateOfBirth,
                                                            bd_cellphone: cellphone,
                                                            bd_email: email,
                                                            bd_initials: initials,
                                                            bd_gender: gender,
                                                            bd_work_tell: workTell,
                                                            bd_percentage: percentage
                                                        };

                                                        if (checkFields(beneficiaryMember)) {
                                                            fetch('/member-capture', {
                                                                method: 'POST',
                                                                headers: {
                                                                    'Content-Type': 'application/json',
                                                                    'X-CSRF-TOKEN': beneficiaryMember._token
                                                                },
                                                                body: JSON.stringify(beneficiaryMember)
                                                            })
                                                            .then(response => response.json())
                                                            .then(response => {
                                                                document.getElementById('bd_title').value = '';
                                                                document.getElementById('bd_relationship').value = '';
                                                                document.getElementById('bd_fullnames').value = '';
                                                                document.getElementById('bd_surname').value = '';
                                                                document.getElementById('bd_id_number').value = '';
                                                                document.getElementById('bd_date_of_birth').value = '';
                                                                document.getElementById('bd_cellphone').value = '';
                                                                document.getElementById('bd_email').value = '';
                                                                document.getElementById('bd_initials').value = '';
                                                                document.getElementById('bd_gender').value = '';
                                                                document.getElementById('bd_work_tell').value = '';
                                                                document.getElementById('bd_percentage').value = '';

                                                                if (response.error) {
                                                                    iziToast.error({
                                                                        title: 'Error',
                                                                        message: "An error occurred: " + response.error,
                                                                        position: 'topCenter',
                                                                        timeout: false
                                                                    });

                                                                } else {
                                                                    var noBeneficiaryMembersRow = document.querySelector("#no-beneficiary-members");
                                                                    if (noBeneficiaryMembersRow) {
                                                                        noBeneficiaryMembersRow.remove();
                                                                    }

                                                                    var newRow = document.createElement("tr");
                                                                    newRow.className = "beneficiary_member-row";
                                                                    newRow.setAttribute("data-id", response.beneficiaryMember.bd_id);

                                                                    newRow.innerHTML = `
                                                                        <td style='vertical-align: middle'>${response.input.bd_fullnames}</td>
                                                                        <td style='vertical-align: middle'>${response.input.bd_surname}</td>
                                                                        <td style='vertical-align: middle'>${response.input.bd_id_number}</td>
                                                                        <td style='vertical-align: middle'>${response.input.bd_gender}</td>
                                                                        <td style='vertical-align: middle'>${response.input.bd_cellphone}</td>
                                                                        <td style='vertical-align: middle'>${response.input.bd_email}</td>
                                                                    `;

                                                                    var buttonColumn = document.createElement("td");
                                                                    buttonColumn.style.cssText = "display: flex; align-items: center; justify-content: space-around;gap:0.5em; border:none; padding:0.5em";

                                                                    var editButton = document.createElement("button");
                                                                    editButton.type = "button";
                                                                    editButton.className = "btn btn-sm edit show-confirm action";
                                                                    editButton.style.background = "none";
                                                                    editButton.innerHTML = '<i class="fas fa-edit fa-lg"></i>';
                                                                    editButton.addEventListener("click", function() {
                                                                        editMembers(response.beneficiaryMember.bd_id);
                                                                    });

                                                                    var deleteButton = document.createElement("button");
                                                                    deleteButton.type = "button";
                                                                    deleteButton.className = "btn btn-sm show-confirm action Actionpreload";
                                                                    deleteButton.innerHTML = '<i class="fa fa-trash fa-lg"></i>';
                                                                    deleteButton.addEventListener("click", function() {
                                                                        deleteMember(response.beneficiaryMember.bd_id);
                                                                    });

                                                                    buttonColumn.appendChild(editButton);
                                                                    buttonColumn.appendChild(deleteButton);
                                                                    newRow.appendChild(buttonColumn);

                                                                    var beneficiaryMemberBody = document.getElementById("beneficiaryMember_body");
                                                                    var noMembersRow = beneficiaryMemberBody.querySelector("tr.no-members");
                                                                    if (noMembersRow) {
                                                                        beneficiaryMemberBody.removeChild(noMembersRow);
                                                                    }

                                                                    beneficiaryMemberBody.appendChild(newRow);
                                                                }
                                                            })
                                                            .catch(error => {
                                                                console.log(error);
                                                            });
                                                        }
                                                    }

                                                </script>
                                            </section>

                                            <section style= "padding:1em;">
                                                <input type="hidden" name="section" value="section5">
                                                <h3>Method of Payment</h3>
                                                <div>
                                                    <input type="checkbox" name="chkDebit" id="chkbox1" <?php if ($currentPaymentMethod === "chkDebit") echo 'checked'; ?> onchange="toggleElement('debithide', this.checked)" style="height:20px;width:20px">
                                                    <label for="chkDebit">Debit Order</label>
                                                    <div id="debithide" style=" display:none">
                                                        <hr>

                                                        <div class="row">
                                                            <div class="col" id="mainshide">
                                                                <input type="checkbox" name="chkbox" id="hidemain" onchange="memberHide()" style="height:20px;width:20px">
                                                                <label for="chk">Main Member</label>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col"id="premiumhides">
                                                                <input type="checkbox" name="prembox" id="pprem" onchange="showpremium()" style="height:20px;width:20px" >
                                                                <label for="pprem">Premium payer</label>
                                                            </div>
                                                        </div>


                                                        <div id="premiumhide" style="display:none ! important">

                                                            <div class="row"id="to-show">

                                                                <div class="col-md-6">
                                                                    <div class="row mb-3">
                                                                        <label for="txtCityBilling" class="col-lg-3 col-form-label">Account Holder</label>
                                                                        <div class="col-lg-9">
                                                                            <input id="dpAcc_holder" name="dpAcc_holder" type="text" class="form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dpAcc_holder : '' }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                        <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Account Number:</label>
                                                                        <div class="col-lg-9">
                                                                            <input id="dpaccount_number" name="dpaccount_number" type="text" class="form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dpaccount_number : '' }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="row mb-3">
                                                                        <label for="txtEmailAddressShipping"class="col-lg-3 col-form-label">Bank Name:</label>
                                                                        <div class="col-lg-9">
                                                                            <select id="dpbank_name" name="dpbank_name" class="form-control" style="margin-left:130px ! important;width:100% ! important">
                                                                                <option value="">{{ isset($paymentDebit) ? $paymentDebit->dpbank_name : '' }}</option>
                                                                                <option value="FNB">FNB</option>
                                                                                <option value="standard_bank">Standard Bank</option>
                                                                                <option value="Capitec">Capitec</option>
                                                                                <option value="Nedbank">Nedbank</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="row mb-3">
                                                                        <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Account Type:</label>
                                                                        <div class="col-lg-9">
                                                                            <select id="ddlCreditCardType" name="dpaccount_number" class="form-control" style="margin-left:130px ! important;width:100% ! important">
                                                                                <option value="">{{ isset($paymentDebit) ? $paymentDebit->dpaccount_number : '' }}</option>
                                                                                <option value="cheque">cheque</option>
                                                                                <option value="savings">savings</option>
                                                                                <option value="transmission">transmission</option>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-row mb-3">
                                                                        <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Branch Code:</label>
                                                                        <div class="col-lg-9">
                                                                            <input id="txtEmailAddressShipping" name="dpbranch_code" type="text" class="form-control"placeholder="{{ isset($paymentDebit) ? $paymentDebit->dpbranch_code : '' }}">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="row mb-3">
                                                                        <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Frequency:</label>
                                                                        <div class="col-lg-9">
                                                                            <!-- <input id="txtEmailAddressShipping" name="debit_date" style="height:36px" type="date" class="form-control"> -->
                                                                            <select id="ddlCreditCardType"name="dpfrequency" style="height:36px" class="form-control" >
                                                                                <option value=""> {{ isset($paymentDebit) ? $paymentDebit->dpfrequency : '' }} </option>
                                                                                <option value="December Debit Date">December Debit Date</option>
                                                                                <option value="Monthly">Monthly</option>
                                                                                <option value="Half Yearly">Half Yearly</option>
                                                                                <option value="Yearly">Yearly</option>
                                                                                <option value="Other">Other</option>


                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="row mb-3">
                                                                        <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Debit Day:</label>
                                                                        <div class="col-lg-9">
                                                                            <input id="debit_date" name="debit_date" style="height:36px" type="date" class="form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dpdebit_day : '' }} ">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="row mb-3">
                                                                        <label for="txtNameCard" class="col-lg-3 col-form-label">Cellphone</label>
                                                                        <div class="col-lg-9">
                                                                            <input id="dpcell_number" name="dpcell_number" type="text" class="form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dpcell_number : '' }}">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="row mb-3">
                                                                        <label for="txtNameCard" class="col-lg-3 col-form-label">Street Address</label>
                                                                        <div class="col-lg-9">
                                                                            <input id="dpstreet_address" name="dpstreet_address" type="text" class="form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dpstreet_address : '' }}">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="row mb-3">
                                                                        <label for="ddlCreditCardType" class="col-lg-3 col-form-label">PO Box</label>
                                                                        <div class="col-lg-9">
                                                                        <input id="dppo_box" name="dppo_box" type="text" class="form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dppo_box : '' }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="row mb-3">
                                                                        <label for="txtCreditCardNumber" class="col-lg-3 col-form-label">Town or City</label>
                                                                        <div class="col-lg-9">
                                                                            <input id="dptown" name="dptown" type="text" class="form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dptown : '' }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="row mb-3">
                                                                        <label for="txtCardVerificationNumber" class="col-lg-3 col-form-label">Province</label>
                                                                        <div class="col-lg-9">
                                                                            <select id="dppronvice" name="dppronvice" class="form-control" >
                                                                                <option value=""> {{ isset($paymentDebit) ? $paymentDebit->dppronvice : '' }} </option>
                                                                                <option value="gauteng">gauteng</option>
                                                                                <option value="limpopo">limpopo</option>
                                                                                <option value="free state">free state</option>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="row mb-3">
                                                                        <label for="txtExpirationDate" class="col-lg-3 col-form-label">Street Code</label>
                                                                        <div class="col-lg-9">
                                                                            <input id="txtExpirationDate" name="mem_residential_code" type="text" class="form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dppostal_code : '' }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="row mb-3">
                                                                        <label for="txtExpirationDate" class="col-lg-3 col-form-label">Postal Code</label>
                                                                        <div class="col-lg-9">
                                                                            <input id="txtExpirationDate" name="dppostal_code" type="text" class="form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dppostal_code : '' }}">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <hr>

                                                            </div>

                                                        </div>

                                                        <script type="text/javascript">
                                                            function showpremium(){
                                                                var checkbox = document.getElementById("premiumhides");

                                                                if(checkbox.checked){
                                                                    document.getElementById("premiumhide").style.display="block";
                                                                //    document.getElementById("stophide").style.display="none";

                                                                    console.log("i am runining");
                                                                }
                                                                else{
                                                                    document.getElementById("premiumhide").style.display="none";
                                                                    // document.getElementById("stophide").style.display="block";


                                                                }


                                                            }
                                                        </script>

                                                        <hr>

                                                        <br/>

                                                        <div class="row"id="to-show">

                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtCityBilling" class="col-lg-3 col-form-label">Account Holder</label>
                                                                    <div class="col-lg-9">
                                                                        <input id="dpAcc_holder" name="dpAcc_holder" type="text" class="form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dpAcc_holder : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Account Number:</label>
                                                                    <div class="col-lg-9">
                                                                        <input id="dpaccount_number" name="dpaccount_number" type="number" class="form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dpaccount_number : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Bank Name:</label>
                                                                    <div class="col-lg-9">
                                                                        <input id="dpbank_name" name="dpbank_name" type="text" class="form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dpbank_name : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Account Type:</label>
                                                                    <div class="col-lg-9">
                                                                        <input id="dpaccount_type" name="dpaccount_type" type="text" class="form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dpaccount_type : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtEmailAddressShipping"class="col-lg-3 col-form-label">Branch Code:</label>
                                                                    <div class="col-lg-9">
                                                                        <input id="dpbranch_code" name="dpbranch_code" type="text" class="form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dpbranch_code : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtEmailAddressShipping"class="col-lg-3 col-form-label">Frequency:</label>
                                                                    <div class="col-lg-9">
                                                                        <!-- <input id="txtEmailAddressShipping" name="debit_date" style="height:36px" type="date" class="form-control"> -->
                                                                        <select id="dpfrequency" name="dpfrequency"  class="form-control">
                                                                            <option value="">{{ isset($paymentDebit) ? $paymentDebit->dpfrequency : '' }}</option>
                                                                            <option value="December Debit Date">December Debit Date</option>
                                                                            <option value="Monthly">Monthly</option>
                                                                            <option value="Half Yearly">Half Yearly</option>
                                                                            <option value="Yearly">Yearly</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Debit Day:</label>
                                                                    <div class="col-lg-9">
                                                                        <input id="dpdebit_day" name="dpdebit_day" style="height:36px" type="date" class="form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dpdebit_day : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtNameCard" class="col-lg-3 col-form-label">Cellphone</label>
                                                                    <div class="col-lg-9">
                                                                        <input id="dpcell_number" name="dpcell_number" type="text" class="form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dpcell_number : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtNameCard" class="col-lg-3 col-form-label">Street Address</label>
                                                                    <div class="col-lg-9">
                                                                        <input id="dpstreet_address" name="dpstreet_address" type="text" class="form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dpstreet_address : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="ddlCreditCardType" class="col-lg-3 col-form-label">PO Box</label>
                                                                    <div class="col-lg-9">
                                                                    <input id="dppo_box" name="dppo_box" type="text" class="form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dppo_box : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtCreditCardNumber" class="col-lg-3 col-form-label">Town or City</label>
                                                                    <div class="col-lg-9">
                                                                        <input id="dptown" name="dptown" type="text" class="form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dptown : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtCardVerificationNumber" class="col-lg-3 col-form-label">Province</label>
                                                                    <div class="col-lg-9">
                                                                        <select id="dppronvice" name="dppronvice" class="form-control">
                                                                            <option value="">{{ isset($paymentDebit) ? $paymentDebit->dppronvice : '' }}</option>
                                                                            <option value="gauteng">gauteng</option>
                                                                            <option value="limpopo">limpopo</option>
                                                                            <option value="free state">free state</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtExpirationDate" class="col-lg-3 col-form-label">Postal Code</label>
                                                                    <div class="col-lg-9">
                                                                        <input id="dppostal_code" name="dppostal_code" type="text" class="form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dppostal_code : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <input type="checkbox" name="chkStop" id="chkbox2" <?php if ($currentPaymentMethod === "chkStop") echo 'checked'; ?> onchange="toggleElement('stophide', this.checked)" style="height:20px;width:20px">
                                                    <label for="chkStop">Stop Order</label>
                                                    <div id="stophide" style="display:none">
                                                        <br/>
                                                        <div class="row"id="to-show">
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtCityBilling" class="col-lg-3 col-form-label">Account Holder</label>
                                                                    <div class="col-lg-9">
                                                                        <input id="txtCompanyShipping" name="spAcc_holder" type="text" class="form-control" placeholder="{{ isset($stopOrderPayment) ? $stopOrderPayment->spAcc_holder : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Account Number:</label>
                                                                    <div class="col-lg-9">
                                                                        <input id="txtEmailAddressShipping" name="spAcc_number" type="text" class="form-control" placeholder="{{ isset($stopOrderPayment) ? $stopOrderPayment->spAcc_number : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Bank Name:</label>
                                                                    <div class="col-lg-9">
                                                                        <select id="ddlCreditCardType" name="spBank_name" class="form-control">
                                                                            <option value=""> {{ isset($stopOrderPayment) ? $stopOrderPayment->spBank_name : '' }} </option>
                                                                            <option value="FNB">FNB</option>
                                                                            <option value="standard_bank">Standard Bank</option>
                                                                            <option value="Capitec">Capitec</option>
                                                                            <option value="Nedbank">Nedbank</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Account Type:</label>
                                                                    <div class="col-lg-9">
                                                                        <select id="ddlCreditCardType" name="spAcc_type" class="form-control">
                                                                            <option value="">{{ isset($stopOrderPayment) ? $stopOrderPayment->spAcc_type : '' }}</option>
                                                                            <option value="cheque">cheque</option>
                                                                            <option value="savings">savings</option>
                                                                            <option value="transmission">transmission</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtExpirationDate" class="col-lg-3 col-form-label" >Day:</label>
                                                                    <div class=" age col-lg-9">
                                                                        <input type="date" id="ddlCreditCardType" name="spDebit_date" placeholder="{{ isset($stopOrderPayment) ? $stopOrderPayment->spDebit_date : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Status</label>
                                                                    <div class="col-lg-9">
                                                                        <select id="ddlCreditCardType" name="sp_status" class="form-control">
                                                                            <option value="">{{ isset($stopOrderPayment) ? $stopOrderPayment->sp_status : '' }}</option>
                                                                            <option value="Active">Active</option>
                                                                            <option value="Not-Active">Not-Active</option>
                                                                            <option value="Cancel Stop Order">Cancel Stop Order</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div>
                                                    <input type="checkbox" name="chkCash" id="chkbox3" <?php if ($currentPaymentMethod === "chkCash") echo 'checked'; ?> onchange="toggleElement('cashhide', this.checked)" style="height:20px;width:20px">
                                                    <label for="chkCash">Card Payment</label>
                                                    <div id="cashhide" style="display:none;">
                                                        <br/>
                                                        <div class="row" class="p-6">
                                                        <a href="{{('/card-payment')}}" class="btn btn-sm text-white mt-2" style="background-color:#081546; margin-top:2em ! important;margin-left:13px ! important;cursor: pointer; width:10%;">
                                                            <i class="" style="color: white; margin-right:0.7em"></i>
                                                            Online Payment
                                                        </a>
                                                    </div>
                                                        <!-- <div class="row" id="to-show">
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtCompanyShipping" class="col-lg-3 col-form-label">Fullname(s)</label>
                                                                    <div class="col-lg-9">
                                                                        <input id="txtCompanyShipping" name="cp_fullname" type="text" class="form-control" placeholder="{{ isset($cashPayment) ? $cashPayment->cp_fullname : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Surname</label>
                                                                    <div class="col-lg-9">
                                                                        <input id="txtEmailAddressShipping" name="cp_surname" type="text" class="form-control" placeholder="{{ isset($cashPayment) ? $cashPayment->cp_surname : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>

                                                <div>
                                                    <input type="checkbox" name="chkPersal" id="chkbox4" <?php if ($currentPaymentMethod === "chkPersal") echo 'checked'; ?> onchange="toggleElement('persa', this.checked)" style="height:20px;width:20px">
                                                    <label for="chkPersal">Persal</label>
                                                    <div id="persa" style=" display:none">
                                                        <br/>
                                                        <p><strong> PERSAL INFORMATION: ID Copy and Payslip for Persal Deduction or Letter from Employment</strong></p>

                                                        <div class="row"id="to-show">
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtCityBilling" class="col-lg-3 col-form-label">Employment details/Authorisation employer:</label>
                                                                    <div class="col-lg-9">
                                                                        <input id="txtCompanyShipping" name="persal_emp" type="text" class="form-control" placeholder="{{ isset($persalPayment) ? $persalPayment->persal_emp : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Persal no:</label>
                                                                    <div class="col-lg-9">
                                                                        <input id="txtEmailAddressShipping" name="persal_num" type="text" class="form-control" placeholder="{{ isset($persalPayment) ? $persalPayment->persal_num : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Cellphone no:</label>
                                                                    <div class="col-lg-9">
                                                                        <input id="txtEmailAddressShipping" name="persal_cell" type="text" class="form-control" placeholder="{{ isset($persalPayment) ? $persalPayment->persal_cell : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Paypoint</label>
                                                                    <div class="col-lg-9">

                                                                        <input id="txtEmailAddressShipping" name="persal_Paypoint" type="text" class="form-control" placeholder="{{ isset($persalPayment) ? $persalPayment->persal_Paypoint : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Persal Holder</label>
                                                                    <div class="col-lg-9">
                                                                        <input id="txtEmailAddressShipping" name="persal_holder" type="text" class="form-control" placeholder="{{ isset($persalPayment) ? $persalPayment->persal_holder : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">premium</label>
                                                                    <div class="col-lg-9">
                                                                        <input id="txtEmailAddressShipping" name="persal_premium" style="height:36px" type="date" class="form-control" placeholder="{{ isset($persalPayment) ? $persalPayment->persal_premium : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtNameCard" class="col-lg-3 col-form-label">Street Address</label>
                                                                    <div class="col-lg-9">
                                                                        <input id="txtNameCard" name="persal_address" type="text" class="form-control" placeholder="{{ isset($persalPayment) ? $persalPayment->persal_address : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="ddlCreditCardType" class="col-lg-3 col-form-label">PO Box</label>
                                                                    <div class="col-lg-9">
                                                                    <input id="txtNameCard" name="persal_po_box" type="text" class="form-control" placeholder="{{ isset($persalPayment) ? $persalPayment->persal_po_box : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtCreditCardNumber" class="col-lg-3 col-form-label">Town or City</label>
                                                                    <div class="col-lg-9">
                                                                        <input id="txtCreditCardNumber" name="persal_town" type="text" class="form-control" placeholder="{{ isset($persalPayment) ? $persalPayment->persal_town : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtCardVerificationNumber" class="col-lg-3 col-form-label">Province</label>
                                                                    <div class="col-lg-9">
                                                                    <select id="ddlCreditCardType" name="persal_province" class="form-control">
                                                                            <option value="">{{ isset($persalPayment) ? $persalPayment->persal_province : '' }}</option>
                                                                            <option value="gauteng">gauteng</option>
                                                                            <option value="limpopo">limpopo</option>
                                                                            <option value="free state">free state</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtExpirationDate" class="col-lg-3 col-form-label">Street Code</label>
                                                                    <div class="col-lg-9">
                                                                        <input id="txtExpirationDate" name="persal_code" type="text" class="form-control" placeholder="{{ isset($persalPayment) ? $persalPayment->persal_code : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtExpirationDate" class="col-lg-3 col-form-label">Postal Code</label>
                                                                    <div class="col-lg-9">
                                                                        <input id="txtExpirationDate" name="persal_postal_code" type="text" class="form-control" placeholder="{{ isset($persalPayment) ? $persalPayment->persal_postal_code : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="row" class="p-6">
                                                        <a href="{{('/card-payment')}}" class="btn btn-sm text-white mt-2" style="background-color:#081546; margin-top:2em ! important;margin-left:13px ! important;cursor: pointer; width:10%;">
                                                            <i class="" style="color: white; margin-right:0.7em"></i>
                                                            Online Payment
                                                        </a>
                                                    </div> -->
                                                </div>

                                                {{--    script to check and uncheck  --}}
                                                <script>
                                                    var initialisationIsDone= false;

                                                    function init(){
                                                        if(!initialisationIsDone){
                                                            let currentPaymentMethod= <?php echo json_encode($currentPaymentMethod); ?>;

                                                            if(currentPaymentMethod === "chkDebit"){
                                                                toggleElement('debithide', true);
                                                            }
                                                            if(currentPaymentMethod === "chkStop"){
                                                                toggleElement('stophide', true);
                                                            }
                                                            if(currentPaymentMethod === "chkCash"){
                                                                toggleElement('cashhide', true);
                                                            }
                                                            if(currentPaymentMethod === "chkPersal"){
                                                                toggleElement('persa', true);
                                                            }
                                                        }
                                                    }
                                                    init();

                                                    function toggleElement(elementId, isChecked) {
                                                        initialisationIsDone= true;
                                                        var checkboxes= document.querySelectorAll('#chkbox1, #chkbox2, #chkbox3, #chkbox4');
                                                        var checkedCount = 0;

                                                        for (var i = 0; i < checkboxes.length; i++) {
                                                            var checkbox = checkboxes[i];
                                                            var label = checkbox.nextElementSibling;

                                                            if (checkbox.checked) {
                                                                checkedCount++;
                                                                checkbox.style.display = 'inline-block';
                                                                label.style.display = 'inline-block';
                                                            } else {
                                                                checkbox.style.display = 'none';
                                                                label.style.display = 'none';
                                                            }
                                                        }

                                                        var element = document.getElementById(elementId);
                                                        if (element) {
                                                            element.style.display = isChecked ? 'block' : 'none';
                                                        }

                                                        if (checkedCount === 0) {
                                                            for (var i = 0; i < checkboxes.length; i++) {
                                                                var checkbox = checkboxes[i];
                                                                var label = checkbox.nextElementSibling;
                                                                checkbox.style.display = 'inline-block';
                                                                label.style.display = 'inline-block';
                                                            }
                                                        }
                                                    }

                                                </script>

                                            </section>

                                            <section>
                                                <input type="hidden" name="section" value="section6">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label for="userName2"class="col-md-5 col-form-label">Full names:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" id="userName2" name="userName" type="text"style="margin-left:130px ! important">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label for="password2"class="col-md-5 col-form-label">Surname:</label>
                                                            <div class="col-md-8">
                                                                <input id="password2" name="password" type="text" class="form-control"style="margin-left:130px ! important">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label for="userName2"class="col-md-5 col-form-label">ID No:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" id="userName2" name="userName" type="text"style="margin-left:130px ! important">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label for="password2"class="col-md-5 col-form-label">Date of Birth:</label>
                                                            <div class="col-md-8">
                                                                <input id="password2" name="password" type="text" class="form-control"style="margin-left:130px ! important">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label for="userName2"class="col-md-5 col-form-label">Cellphone:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" id="userName2" name="userName" type="text"style="margin-left:130px ! important">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label for="password2"class="col-md-5 col-form-label">Email Address:</label>
                                                            <div class="col-md-8">
                                                                <input id="password2" name="password" type="text" class="form-control"style="margin-left:130px ! important">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label for="userName2"class="col-md-5 col-form-label">Initials:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" id="userName2" name="userName" type="text"style="margin-left:130px ! important">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label for="password2"class="col-md-5 col-form-label">Gender</label>
                                                            <div class="col-md-8">
                                                                <input id="password2" name="password" type="text" class="form-control"style="margin-left:130px ! important">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label for="userName2"class="col-md-5 col-form-label">Cover Amount: </label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" id="userName2" name="userName" type="text"style="margin-left:130px ! important">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label for="password2"class="col-md-5 col-form-label">Policy Type:</label>
                                                            <div class="col-md-8">
                                                                <input id="password2" name="password" type="text" class="form-control"style="margin-left:130px ! important">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label for="userName2"class="col-md-5 col-form-label">Add Premium:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" id="userName2" name="userName" type="text"style="margin-left:130px ! important">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label for="password2"class="col-md-5 col-form-label"> Total Premium:</label>
                                                            <div class="col-md-8">
                                                                <input id="password2" name="password" type="text" class="form-control"style="margin-left:130px ! important">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->

                                            </section>

                                            <section>
                                                <input type="hidden" name="section" value="section7">
                                                <div class="row" class="p-3">
                                                    <a href="{{('/pdfgenerate')}}" class="btn btn-sm text-white mt-2" style="background-color:#3366cc; margin-top:0em ! important;margin-left:55px ! important;cursor: pointer; width:10%;">
                                                    <i class="fa-solid fa-file-arrow-down" style="color: white; margin-right:0.7em"></i>
                                                     PDF Summary
                                                </a>
                                                        </div>
                                                <div class="container inside">
                                                    <div class="full text flexrow">
                                                        <ol style="width:95%; overflow-x: scroll;">
                                                            <li style="margin-left: -10px ! important;"><strong>INTERMEDIARY STATUS</strong></li>
                                                            <p style="margin-left: 10px ! important;">Has the Representative:</p>
                                                            <p>1.Disclosed his/her full names and designation?</br>
                                                                2.Contact Details?</br>
                                                                3.Disclosed his/her fit and proper status?<br>
                                                                <div class="row mt-3 align-items-center">
                                                                    <div class="col-auto">
                                                                        <input type="checkbox" name="status"<?php if ($compliance && $compliance->status) echo 'checked'; ?> >
                                                                    </div>
                                                                    <div class="col">
                                                                        <label class="container" for="status">YES</label>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </p>

                                                            <li><strong>ADVICE</strong></li>
                                                            <p>Has the intermediary disclosed the following information to you:</p>
                                                            <p>1.The name and type of policy,premium,plan,benefits?</br>
                                                                2.The waiting period?</br>
                                                                3.The registered name of the insurer/underwriter?
                                                                <br>
                                                                <div class="row mt-3 align-items-center">
                                                                    <div class="col-auto">
                                                                        <input type="checkbox" name="advice"<?php if ($compliance && $compliance->advice) echo 'checked'; ?> >
                                                                    </div>
                                                                    <div class="col">
                                                                        <label class="container" for="advice">YES</label>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </p>
                                                            <li><strong>WAITING PERIODS</strong></li>
                                                            <p>Has the intermediary disclosed that your policy has the waiting period:</p>
                                                            <p>1.Immediate family: in the event of the death,other than accidental death of an insured life, a waiting period of six months from the</br>
                                                                inception date of the policy is applicable in respect of the full payment of benefits.?</br>
                                                                2.Extended family: in the event of the death, other than accidental death of an insured life, waiting period of nine months from the</br>
                                                                inception date of the policy is applicable in respect of the full payment benefits ?</br>
                                                                3.Should the insuerd amountbe increased at anytime, a new waiting periods will apply to the increased portion of the isured amount</br>
                                                                4.Accidental death will be covered after the first premium has been received by Tshitshithe.</br>
                                                                5.Death as a result of suicide is excluded for 24 months from the inception date of cover.</br>
                                                                6.HIV/Aids is included.</br>
                                                                7.If a specific client can provide proof to the satisfaction of Tshitshithe, in their sole discretion, of previous contionuous insurance for</br>
                                                                atleast six months with another long-term insurer, immediately prior to joining the group scheme, Tshitshithe may waive the applicable waiting</br>
                                                                period in respect of a client.</br>
                                                                8.Maximum inception age for the client is 99 years.</br>
                                                                9.Maximum inception age for the spouse is 99 years.</br>
                                                                10.Maximum inception age for the extended family member  is 84 years.</br>
                                                                11.Cover is applicable for whole of life-clients enjoy cover as long as premium are paid.
                                                                </br>
                                                                <div class="row mt-3 align-items-center">
                                                                    <div class="col-auto">
                                                                        <input type="checkbox" name="wait_period" <?php if ($compliance && $compliance->wait_period) echo 'checked'; ?> >
                                                                    </div>
                                                                    <div class="col">
                                                                        <label class="container" for="wait_period">YES</label>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </p>
                                                            <li><strong>Debit Order</strong></li>
                                                            <p>Has the intermediary disclosed that the debit order wiil be processed on the chosen date by the policy holder or premium payer?</br>
                                                                in the event that the debit order fails on the due date.</p>
                                                            <p>1.Communication will be carried out with the premium payer</br>
                                                                2.If the debit order fails to be processed twice or in two months the policy may elapse and the waiting period may be imposed again.
                                                                </br>
                                                                <div class="row mt-3 align-items-center">
                                                                    <div class="col-auto">
                                                                        <input type="checkbox" name="debit" <?php if ($compliance && $compliance->debit) echo 'checked'; ?> >
                                                                    </div>
                                                                    <div class="col">
                                                                        <label class="container" for="debit">YES</label>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </p>

                                                            <li><strong>PREMIUMS PAYMENT</strong></li>
                                                            <p>Has the intermediary disclosed the following:</p>
                                                            <p>1.premiums are paid in advance</br>
                                                                2.If the premium is not recieved from the client,then the insurer or underwriter will not be able to honour any benefits to the clients</br>
                                                                3.If 2 payments are not recieved from the client respectively, the policy will elapse and suspended. the benefits may be forfeited
                                                                </br>
                                                                <div class="row mt-3 align-items-center">
                                                                    <div class="col-auto">
                                                                        <input type="checkbox" name="premium" <?php if ($compliance && $compliance->premium) echo 'checked'; ?> >
                                                                    </div>
                                                                    <div class="col">
                                                                        <label class="container" for="premium">YES</label>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </p>
                                                            <li><strong>COMPLAINTS PROCEDURE</strong></li>
                                                            <p>Has the intermediary disclosed are complaints procedure:</p>
                                                            <p>1.Complaints must disclose interest in policy.</br>
                                                                2.Policy number is required in respect of all complaints.</br>
                                                                3.Identity number of complaint.</br>
                                                                4.Nature of enquiry/complaint must be disclosed.</br>

                                                                Complaince Officer:
                                                                </br>
                                                                <div class="row mt-3 align-items-center">
                                                                    <div class="col-auto">
                                                                        <input type="checkbox" name="compliance_office" <?php if ($compliance && $compliance->compliance_office) echo 'checked'; ?> >
                                                                    </div>
                                                                    <div class="col">
                                                                        <label class="container" for="compliance_office">YES</label>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </p>

                                                            <li><strong>CLAIMS PROCEDURE</strong></li>
                                                            <p>Has the intermediary disclosed to you that in the event of death all relevant supporting documents must be submitted to the underwriter</br>
                                                                during the preparation of the burial from the date of death and before the burial of the deceased? Failure to do so will results in the benefits</br>
                                                                    being withhold/forfeited.
                                                            </p>
                                                            <p>Documents to be submitted include, but are not limited to:</p>
                                                            <p>1.Proof of Death:</br>
                                                                -Certified copy of original death certificate</br>
                                                                -Copy of the notification of death(BI-1663)
                                                                -Copy of the notification of death signed by the tribal leader if the death occurred at residents</br>
                                                                2.Certified copy of the pricipal member's/Benefciary's/Claimant's identify Document</br>
                                                                3.Certified copy of the deceased's Identity Document with DECEASED stamp</br>
                                                                4.Proof of Bank details and permission to deposit benefits in banking account</br>
                                                                5.Police stament or copy of postmortem report in case of death as aresult of unnatural causes</br>
                                                                6.Proof of payments for final three months premiums, in respect of cash payments</br>
                                                                7.In the event of aclaim of the full-time student, a letter confirming full-time study from a recognized </br>
                                                                educational institution,together with the last academic report.</br>
                                                                8.A fully completed underwriter form.</br>
                                                                9. Tshitshithe & Bros Funeral undertakes reserve the right to request a medical report.
                                                                </br>
                                                                <div class="row mt-3 align-items-center">
                                                                    <div class="col-auto">
                                                                        <input type="checkbox" name="claims" <?php if ($compliance && $compliance->claims) echo 'checked'; ?> >
                                                                    </div>
                                                                    <div class="col">
                                                                        <label class="container" for="claims">YES</label>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </p>

                                                            <li><strong>RIGHTS RESERVED</strong></li>
                                                            <p>Has the intermediary disclosed to you that the underwriter or Tshitshithe reserves the rights to:</p>
                                                            <p>1.Increase the premium anytime and inform the client thereafter?</br>
                                                                2.Request further documentation or information as it may deem necessary to accurately acces a claim?</br>
                                                                3.Refuse reinstating the policy that continually lapse?
                                                                </br>
                                                                <div class="row mt-3 align-items-center">
                                                                    <div class="col-auto">
                                                                        <input type="checkbox" name="reserved" <?php if ($compliance && $compliance->reserved) echo 'checked'; ?> >
                                                                    </div>
                                                                    <div class="col">
                                                                        <label class="container" for="reserved">YES</label>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </p>

                                                            <li><strong>CLAIMS/FORFEITS</strong></li>
                                                            <p>Has the intermediary disclosed to you that the benefits will be forfeited:</p>
                                                            <p>1.In the event when the deceased is with or is not with Tshitshithe</br>
                                                                -some of the benefit amounts will not be used to add on another benefits,e.g if the clients requires tombstone, they will not be able to</br>
                                                                use the funds for the coffin to add on the tombstone.</br>
                                                                -Tshitshithe reserves the rights to provide services or any benefits,
                                                                2.For all benefits claims, the claim procedure documents must be presented
                                                                </br>
                                                                <div class="row mt-3 align-items-center">
                                                                    <div class="col-auto">
                                                                        <input type="checkbox" name="forfeits" <?php if ($compliance && $compliance->forfeits) echo 'checked'; ?> >
                                                                    </div>
                                                                    <div class="col">
                                                                        <label class="container" for="forfeits">YES</label>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </p>

                                                            <li><strong>EXCLUSION</strong></li>
                                                            <p>Has the intermediary disclosed to you that the benefits will be forteited if the death is directly or indirectly caused by or attributable to:</p>
                                                            <p>1.Terrorism or war (whether declared or not)</br>
                                                                2.Radioactive  contamination, whether directly or indirectly</br>
                                                                3.Death as a result of participating in illegal activities</br>
                                                                4.Suicide will not be covered during the two years of membership</br>
                                                                5.Divorced spouses at inception of the policy are not covered, and cover for spouses who divorce during the term of the policy will cease immediately on divorce
                                                                </br>
                                                                <div class="row mt-3 align-items-center">
                                                                    <div class="col-auto">
                                                                        <input type="checkbox" name="exclusion" <?php if ($compliance && $compliance->exclusion) echo 'checked'; ?> >
                                                                    </div>
                                                                    <div class="col">
                                                                        <label class="container" for="exclusion">YES</label>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </p>

                                                            <li><strong>POLICY AND MEMBER REPLACEMENT OR MIGRATION</strong></li>
                                                            <p>Has the intermediary disclosed the following to you:</p>
                                                            <p>1.Is this policy application are replacement of the existing policy with any policy from another insurer or underwriter?</br>
                                                                If so, please state the company and policy number........................
                                                                2.Policy members can be replaced as long as the benefits are not paid to the individual.If replaced,the waiting period will apply to the</br>
                                                                individual base on the replacement date.
                                                                </br>
                                                                <div class="row mt-3 align-items-center">
                                                                    <div class="col-auto">
                                                                        <input type="checkbox" name="migration" <?php if ($compliance && $compliance->migration) echo 'checked'; ?> >
                                                                    </div>
                                                                    <div class="col">
                                                                        <label class="container" for="migration">YES</label>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </p>

                                                            <li><strong>RETRENCHMENT POLICY</strong></li>
                                                            <p>Has the intermediary disclosed the following to you:</p>
                                                            <p>1.If you select the package add retrenchment on to the policy, the additional cost will be added to your premium</br>
                                                                2.Members will have to produce  retirement documents or proof that they are retrenched for this benefits to apply</br>
                                                                3.The waiting period is 1 year.
                                                                </br>
                                                                <div class="row mt-3 align-items-center">
                                                                    <div class="col-auto">
                                                                        <input type="checkbox" name="retrench" <?php if ($compliance && $compliance->retrench) echo 'checked'; ?> >
                                                                    </div>
                                                                    <div class="col">
                                                                        <label class="container" for="retrench">YES</label>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </p>

                                                            <li><strong>PACKAGE ADD ON BENEFITS</strong></li>
                                                            <p>Has the intermediary disclosed the following to you:</p>
                                                            <p>1.If you select the package add benefits on the policy, the additional cost will be added to your premium</br>
                                                                2.Benefits will apply when the applicable member is deceased</br>
                                                                </br>
                                                                <div class="row mt-3 align-items-center">
                                                                    <div class="col-auto">
                                                                        <input type="checkbox" name="package" <?php if ($compliance && $compliance->package) echo 'checked'; ?> >
                                                                    </div>
                                                                    <div class="col">
                                                                        <label class="container" for="package">YES</label>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </p>

                                                            <li><strong>CASH TOP UP AND R40000.00/R50000.00 BENEFITS</strong></li>
                                                            <p>Has the intermediary disclosed the following to you:</p>
                                                            <p>1.These benefits will yield additional policy application or claim form to be signed </br>
                                                                2.No cash top up for members with R50000.00 funeral policy
                                                                </br>
                                                                <div class="row mt-3 align-items-center">
                                                                    <div class="col-auto">
                                                                        <input type="checkbox" name="cash" <?php if ($compliance && $compliance->cash) echo 'checked'; ?> >
                                                                    </div>
                                                                    <div class="col">
                                                                        <label class="container" for="cash">YES</label>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </p>

                                                            <li><strong>NO CLAIM BENEFITS AFTER 5YEARS-8 MONTHSPREMIUM PAYMENT</strong></li>
                                                            <p>Has the intermediary disclosed the following to you:</p>
                                                            <p>1.TThis benefits will be paid on your 6th year Anniversary</br>
                                                                2.For existing members with more than 5 years, 1 year waiting period apply after joining new policy</br>
                                                                3.For existing members with less than 5 years,the current will be carried over but we will add 1 year waiting period on top after joining
                                                                </br>
                                                                <<div class="row mt-3 align-items-center" >
                                                                    <div class="col-auto">
                                                                        <input type="checkbox" name="no_claims" <?php if ($compliance && $compliance->no_claims) echo 'checked'; ?> >
                                                                    </div>
                                                                    <div class="col">
                                                                        <label class="container" for="no_claims">YES</label>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </p>

                                                            <li><strong>ALL SERVICES OR CASH PAYMENTS ARE RENDERED IN SOUTH AFRICA</strong></li>
                                                            <p>please note that the services and cash payments are rendered in South Africa.</p>
                                                                </br>
                                                                <div class="row mt-3 align-items-center">
                                                                    <div class="col-auto">
                                                                        <input type="checkbox" name="service" <?php if ($compliance && $compliance->service) echo 'checked'; ?> >
                                                                    </div>
                                                                    <div class="col">
                                                                        <label class="container" for="service">YES</label>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </p>

                                                            <li><strong>SPOUSE/PARTNER AGE</strong></li>
                                                            <p>The oldest spouse in age must the main member of the policy as all policies are age rated,This also impact upgrades of packages</p>
                                                                </br>
                                                                <div class="row mt-3 align-items-center">
                                                                    <div class="col-auto">
                                                                        <input type="checkbox" name="spouse" <?php if ($compliance && $compliance->spouse) echo 'checked'; ?> >
                                                                    </div>
                                                                    <div class="col">
                                                                        <label class="container" for="spouse">YES</label>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </p>

                                                            <li><strong>VALUE ADDED BENEFITS</strong></li>
                                                            <p>The maximum entry age for value added benefits for new policy and upgrades is 70 years</p>
                                                                </br>
                                                                <div class="row mt-3 align-items-center">
                                                                    <div class="col-auto">
                                                                        <input type="checkbox" name="value_add" <?php if ($compliance && $compliance->value_add) echo 'checked'; ?> >
                                                                    </div>
                                                                    <div class="col">
                                                                        <label class="container" for="value_add">YES</label>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </p>

                                                            <li><strong>DOWNGRADE FROM 1+13 POLICY</strong></li>
                                                            <p>A downgrade from 1+13 plociy after benefits are rendered will result in cancellation of apolicy and an applicable waiting period will apply</p>
                                                                </br>
                                                                <div class="row mt-3 align-items-center">
                                                                    <div class="col-auto">
                                                                        <input type="checkbox" name="downgrade" <?php if ($compliance && $compliance->downgrade) echo 'checked'; ?> >
                                                                    </div>
                                                                    <div class="col">
                                                                        <label class="container" for="downgrade">YES</label>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </p>

                                                            <li><strong>SIGNING AND ASSURANCE</strong></li>
                                                            <p>Are you content with the advice that you have received before signing?</p>
                                                                </br>
                                                                <div class="row mt-3 align-items-center" >
                                                                    <div class="col-auto">
                                                                        <input type="checkbox" name="assurance" <?php if ($compliance && $compliance->assurance) echo 'checked'; ?> >
                                                                    </div>
                                                                    <div class="col">
                                                                        <label class="container" for="assurance">YES</label>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </p>

                                                            <li><strong>DECLARATION BY PROPOSER/ PREMIUM PAYER</strong></li>
                                                            <p>I declare to the best of my knowledge that the partculars given are true and corrent. I understand and I agree that any misrepresentation</br>
                                                                in this application will invalidate any benefits under this policy .The insurer and underwriter shall not be liable for any benefits</br>
                                                                rendered until it has accepted the first premium. I understand that I will not be covered if I don't pay the premiums are paid in advance.</br>
                                                                I know and understand the contents of this declaration and I have no objection it to be on my conscience</p>

                                                            </p>
                                                        </ol>
                                                    </div>
                                                    <?php
                                                            $year =date('Y');
                                                            $month =date('m');
                                                            $day =date('d');
                                                            $today = $year . '-' . $month .'-'.$day;
                                                    ?>
                                                    <hr>

                                                    <div class="half text flexrow">
                                                        <label for="advisor-date">Date</label>
                                                        <input type="date" name="curre_date" id="advisor-date" value="{{ isset($compliance) ? $compliance->curre_date : '' }}">
                                                    </div>

                                                    <div class="half text flexrow">
                                                        <label for="advisor-memfullname">Member full name</label>
                                                        <input type="text" name="main_fullname" id="advisor-memfullname" placeholder="{{ isset($compliance) ? $compliance->main_fullname : '' }}">
                                                    </div>

                                                    <div class="row" style="margin-bottom: 4em">
                                                        <div class="row mt-3 align-items-center">
                                                            <div class="col-auto">
                                                                <input type="checkbox" name="acceptTerm" <?php if ($compliance && $compliance->acceptTerm) echo 'checked'; ?> >
                                                            </div>
                                                            <div class="col">
                                                                <label class="container" for="acceptTerm">I agree with the Terms and Conditions.</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab" id="finalstepTab">
                                                    <p>If you are sure the information provided is correct and you have supplied all supporting documentation you
                                                        can click submit otherwise close this window and continue when you have this information.
                                                    </p>
                                                </div>
                                            </section>

                                            <section class="p-2">
                                                <input type="hidden" name="section" value="section8">

                                                <div>
                                                    <h3>Upload</h3>
                                                </div>
                                                <hr>

                                                <div class="" style="">
                                                    <div class="input-row">
                                                        <div class="col-lg-6">
                                                            <div class="input mb-3" style="">
                                                                <label for="tellphone" class="col-form-label" style="width: 30%;">Title</label>
                                                                <input id="up_title" name="up_title" type="text" class="form-control" style="width: 70%;">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="input mb-3" style="">
                                                                <label for="up_description" class="col-form-label" style="width: 30%;">Notes</label>
                                                                <textarea id="up_description" name="up_description"required class="form-control" rows="8" style="width: 70%;"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="file-inputs mb-3" style="border: 1px solid #d6d6d6; padding: 0.7em 0.5em; border-radius: 0.1em; ">
                                                                <div class="input-file-row">
                                                                    <label for="up_documents" class="col-form-label">Select Supported Document File</label>
                                                                    <input id="up_documents" name="up_documents" type="file" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <button id="addUpload" type="button" class="btn mb-2" style="font-family: 'Helvetica Neue', Arial, sans-serif; background-color: #010e46; color:white" onclick="uploadDocument()">Upload Document</button>
                                                    <hr>
                                                    {{-- Table --}}
                                                    <div class="table-responsive" style="width: 100%; border: none; border-radius: 0.5em; overflow-x: auto;">

                                                        <table id="datatable" class="table table-sm table-striped align-middle data-table" style="width: 100%; margin-bottom: 0;">
                                                            <thead class="text-light text-center " style="background-color: #010e46;">
                                                                <tr>
                                                                    <th>Title</th>
                                                                    <th>Description</th>
                                                                    <th>Document</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="upload_body" class="table-light table-bordered">
                                                                <tr>
                                                                    <td>ID Copy</td>
                                                                    <td>This is a copy of my (the main member) ID</td>
                                                                    <td>
                                                                        <label class="custom-file-upload">
                                                                            <input id="up_id_documents" name="up_id_documents" type="file" class="hidden-file-input form-control" onchange="updateFileName('up_id_documents', 'id_doc')"/>
                                                                            <i class="fas fa-cloud-upload-alt" style="color: whitesmoke"></i> Upload File
                                                                        </label>
                                                                        <span id="id_doc" style="color: #3366cc">{{ isset($upload_id_doc) ? 'ID Copy Uploaded!' : '' }}</span>
                                                                    </td>
                                                                    <td style=" padding:0.5em 1em;display: flex; align-items: center; justify-content: space-around">
                                                                        <button type="button" class="btn btn-md show-confirm action" onclick="saveUpload()" style="background-color: #010e46; color:white">
                                                                            save
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                    <tr>
                                                                    <td>Signed Document</td>
                                                                    <td>I signed the verification form from the compliance section</td>
                                                                    <td>
                                                                        <label class="custom-file-upload">
                                                                            <input id="up_veri_documents" name="up_veri_documents" type="file" class="hidden-file-input form-control" onchange="updateFileName('up_veri_documents', 'veri_doc')"/>
                                                                            <i class="fas fa-cloud-upload-alt" style="color: whitesmoke"></i> Upload File
                                                                        </label>
                                                                        <span id="veri_doc" style="color: #3366cc">{{ isset($upload_veri_doc) ? 'Signed Document Uploaded!' : '' }}</span>
                                                                    </td>
                                                                    <td style=" padding:0.5em 1em;display: flex; align-items: center; justify-content: space-around">
                                                                        <button type="button" class="btn btn-md show-confirm action" onclick="saveUpload()" style="background-color: #010e46; color:white">
                                                                            save
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                @forelse ($uploads as $upload)
                                                                    @if ($upload->up_id_documents == null && $upload->up_veri_documents == null)
                                                                        <tr>
                                                                            <td>{{ $upload->up_title }}</td>
                                                                            <td>{{ $upload->up_description }}</td>
                                                                            <td>{{ $upload->up_documents }}</td>
                                                                            <td style=" padding:0.5em 1em;display: flex; align-items: center; justify-content: space-around">
                                                                                <button type="button" class="btn btn-md " onclick="deleteUpload({{ $upload->up_id }})"  style="background: none">
                                                                                    <i class="fa fa-trash fa-lg"></i>
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                    @endif
                                                                @empty
                                                                    <!-- Handle case when $uploads is empty -->
                                                                @endforelse
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <script>
                                                        function checkFieldSectionUpload(payload) {
                                                            const requiredFields = [];

                                                            if (payload.get('up_title') === '') requiredFields.push('title,');
                                                            if (payload.get('up_description') === '') requiredFields.push('description,');
                                                            if (payload.get('up_documents') === '') requiredFields.push('document ,');

                                                            if (requiredFields.length > 0) {
                                                                iziToast.warning({
                                                                    title: 'Warning',
                                                                    message: 'The following fields are required:\n' + requiredFields.join('\n'),
                                                                    position: 'topCenter',
                                                                    timeout: false
                                                                });
                                                                return false;
                                                            }
                                                            return true;
                                                        }

                                                        function updateFileName(inputId, spanId) {
                                                            const input = document.getElementById(inputId);
                                                            const span = document.getElementById(spanId);

                                                            if (input.files.length > 0) {
                                                                span.textContent = input.files[0].name;
                                                            } else {
                                                                span.textContent = ''; // If no file selected, show an empty string
                                                            }
                                                        }

                                                        async function saveUpload() {
                                                            // Delete button
                                                            var id_doc = document.getElementById('up_id_documents').files[0];
                                                            var veri_doc = document.getElementById('up_veri_documents').files[0];

                                                            var upload = new FormData();
                                                            upload.append('_token', '{{ csrf_token() }}');
                                                            upload.append('section', 'section8');
                                                            if (id_doc) {
                                                                upload.append('up_id_documents', id_doc);
                                                                console.log('ID documents:', upload.get('up_id_documents'));
                                                            }

                                                            if (veri_doc) {
                                                                upload.append('up_veri_documents', veri_doc);
                                                                console.log('Verification documents:', upload.get('up_veri_documents'));
                                                            }

                                                            // Add progress bar
                                                            const progressBar = document.createElement('div');
                                                            progressBar.style.width = '100%';
                                                            progressBar.style.height = '10px';
                                                            progressBar.style.backgroundColor = '#ddd';
                                                            progressBar.style.borderRadius = '25px';

                                                            const progress = document.createElement('div');
                                                            progress.style.width = '1%';
                                                            progress.style.height = '100%';
                                                            progress.style.backgroundColor = '#4CAF50';
                                                            progress.style.borderRadius = '25px';

                                                            progressBar.appendChild(progress);

                                                            // Put the progress bar in the respective span element
                                                            let spanElement;
                                                            if (id_doc) {
                                                                spanElement = document.getElementById('id_doc');
                                                                spanElement.innerHTML = '';
                                                                spanElement.appendChild(progressBar);

                                                                const message = document.createElement('p');
                                                                message.innerHTML = 'Please wait while the document is being uploaded...';
                                                                spanElement.appendChild(message);

                                                            } else if (veri_doc) {
                                                                spanElement = document.getElementById('veri_doc');
                                                                spanElement.innerHTML = '';
                                                                spanElement.appendChild(progressBar);

                                                                const message = document.createElement('p');
                                                                message.innerHTML = 'Please wait while the document is being uploaded...';
                                                                spanElement.appendChild(message);
                                                            }

                                                            // Update progress bar
                                                            let width = 1;
                                                            const interval = setInterval(() => {
                                                                if (width >= 100) {
                                                                    clearInterval(interval);
                                                                } else {
                                                                    width++;
                                                                    progress.style.width = width + '%';
                                                                }
                                                            }, 10);

                                                            // Prevent any actions until the progress is completed
                                                            document.body.style.pointerEvents = 'none';

                                                            // if (checkFieldsE(upload)) {
                                                            const response = await fetch('/member-capture', {
                                                                method: 'POST',
                                                                headers: {
                                                                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include the CSRF token header
                                                                },
                                                                body: upload
                                                            });

                                                            if (response.ok) {
                                                                // Success! Refresh the page or update the UI as needed
                                                                const data = await response.json();
                                                                console.log("Doc", data);
                                                                console.log("Saved Successfully");

                                                                document.getElementById('up_id_documents').value = '';
                                                                document.getElementById('up_veri_documents').value = '';
                                                                document.getElementById('up_documents').value = '';

                                                                if (data.fileName === "up_id_documents")
                                                                    document.getElementById('id_doc').innerHTML = 'ID Copy Uploaded!';

                                                                if (data.fileName === "up_veri_documents")
                                                                    document.getElementById('veri_doc').innerHTML = 'Signed Document Uploaded!';

                                                                // Remove progress bar and enable actions
                                                                progressBar.remove();
                                                                document.body.style.pointerEvents = 'auto';

                                                            } else {
                                                                // Error handling
                                                                console.log('Save request failed with status:', response.status);

                                                                // Enable actions
                                                                document.body.style.pointerEvents = 'auto';

                                                            }
                                                        }

                                                        async function deleteUpload(memberId) { //Delete button

                                                            fetch('/member-capture/' + memberId, {
                                                                method: 'POST',
                                                                headers: {
                                                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                                                'Content-Type': 'application/x-www-form-urlencoded'
                                                                },
                                                                body: 'section=3&_method=DELETE'
                                                            })
                                                            .then(function(response) {
                                                                if (response.ok) {
                                                                    // Success! Refresh the page or update the UI as needed
                                                                    location.reload();
                                                                } else {
                                                                    // Error handling
                                                                    console.log('Delete request failed with status:', response.status);
                                                                }
                                                            })
                                                            .catch(function(error) {
                                                                console.log('Delete request error:', error);
                                                            });
                                                        }

                                                        async function uploadDocument() {
                                                            var title = document.getElementById('up_title').value;
                                                            var desc = document.getElementById('up_description').value;
                                                            var doc = document.getElementById('up_documents').files[0];

                                                            var upload = new FormData();
                                                            upload.append('_token', '{{ csrf_token() }}');
                                                            upload.append('section', 'section8');
                                                            upload.append('up_title', title);
                                                            upload.append('up_description', desc);
                                                            upload.append('up_documents', doc);

                                                            console.log('Token:', upload.get('_token'));
                                                            console.log('Section:', upload.get('section'));
                                                            console.log('Title:', upload.get('up_title'));
                                                            console.log('Description:', upload.get('up_description'));
                                                            console.log('Document:', upload.get('up_documents'));

                                                            if (checkFieldSectionUpload(upload)) {
                                                                // Add progress bar
                                                                const progressBar = document.createElement('div');
                                                                progressBar.style.width = '100%';
                                                                progressBar.style.height = '20px';
                                                                progressBar.style.backgroundColor = '#ddd';
                                                                progressBar.style.borderRadius = '25px';

                                                                const progress = document.createElement('div');
                                                                progress.style.width = '1%';
                                                                progress.style.height = '100%';
                                                                progress.style.backgroundColor = '#4CAF50';
                                                                progress.style.borderRadius = '25px';

                                                                progressBar.appendChild(progress);

                                                                // Put the progress bar in the respective span element
                                                                let spanElement;
                                                                spanElement = document.getElementById('addUpload');
                                                                spanElement.innerHTML = '';
                                                                spanElement.appendChild(progressBar);

                                                                // Add message
                                                                const message = document.createElement('p');
                                                                message.innerHTML = 'Please wait while the document is being uploaded...';
                                                                spanElement.appendChild(message);

                                                                // Update progress bar
                                                                let width = 1;
                                                                const interval = setInterval(() => {
                                                                    if (width >= 100) {
                                                                        clearInterval(interval);
                                                                    } else {
                                                                        width++;
                                                                        progress.style.width = width + '%';
                                                                    }
                                                                }, 10);

                                                                // Prevent any actions until the progress is completed
                                                                document.body.style.pointerEvents = 'none';

                                                                fetch('/member-capture', {
                                                                    method: 'POST',
                                                                    headers: {
                                                                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                                                    },
                                                                    body: upload
                                                                })
                                                                .then(response => response.json())
                                                                .then(response => {
                                                                    document.getElementById('up_title').value = '';
                                                                    document.getElementById('up_description').value = '';
                                                                    document.getElementById('up_documents').value = '';

                                                                    console.log("input", response.input);
                                                                    console.log("upload", response);

                                                                    if (response.error) {
                                                                        iziToast.error({
                                                                            title: 'Error',
                                                                            message: "An error occurred: " + response.error,
                                                                            position: 'topCenter',
                                                                            timeout: false
                                                                        });
                                                                    } else {
                                                                        var newRow = document.createElement("tr");
                                                                        newRow.setAttribute("data-id", response.upload.up_id);

                                                                        newRow.innerHTML = "<td>" + response.input.up_title + "</td>" +
                                                                                        "<td>" + response.input.up_description + "</td>" +
                                                                                        "<td>" + response.input.up_documents + "</td>";

                                                                        var buttonColumn = document.createElement('td');
                                                                        buttonColumn.style.cssText = "padding:0.5em 1em;display:flex;align-items:center;justify-content:space-around";

                                                                        var deleteButton = document.createElement('button');
                                                                        deleteButton.setAttribute('type', 'button');
                                                                        deleteButton.classList.add('btn', 'btn-sm', 'show-confirm', 'action');
                                                                        deleteButton.innerHTML = '<i class="fa fa-trash fa-lg"></i>';

                                                                        deleteButton.addEventListener('click', function() {
                                                                            deleteUpload(response.upload.up_id);
                                                                        });

                                                                        buttonColumn.appendChild(deleteButton);
                                                                        newRow.appendChild(buttonColumn);

                                                                        var noUploadsRow = document.querySelector("#upload_body tr.no-members");
                                                                        if (noUploadsRow) {
                                                                            noUploadsRow.remove();
                                                                        }

                                                                        document.getElementById("upload_body").appendChild(newRow);
                                                                    }
                                                                    progressBar.remove();
                                                                    spanElement.innerHTML = 'Upload Document';
                                                                    document.body.style.pointerEvents = 'auto';
                                                                })
                                                                .catch(error => {
                                                                    console.log(error);

                                                                    // Enable actions
                                                                    spanElement.innerHTML = 'Upload Document';
                                                                    document.body.style.pointerEvents = 'auto';
                                                                });
                                                            }
                                                        }
                                                    </script>
                                                </div>
                                            </section>

                                            <div class="tab" id="finalstepTab">
                                                <p>If you are sure the information provided is correct and you have supplied all supporting documentation you
                                                    can click submit otherwise close this window and continue when you have this information.</p>
                                            </div>
                                            <div style="width: 100%; margin-top:1em">
                                                <div style="width: 100%;">
                                                <button type="button" id="prevBtn" class="prev blue" onclick="nextPrev(-1)" style="display: inline !important; float: left; border-radius:0.5em; margin-right:1em; margin-bottom:0.3em;font-family: 'Helvetica Neue', Arial, sans-serif;">Previous</button>
                                                <button type="button" id="nextBtn" class="nxt blue" onclick="nextPrev(1)" style="display: inline !important; border-radius:0.5em; margin-bottom:0.3em;font-family: 'Helvetica Neue', Arial, sans-serif;">Next</button>
                                                </div>
                                            </div>
                                            <?php
                                                if($mainMemberId == 'false'){
                                                    $msg= 'New Form';
                                                }else{
                                                    $msg= $mainMemberId;
                                                }
                                            ?>

                                            <script>
                                                function checkFieldSections(payload) {
                                                    const { section } = payload;
                                                    const requiredFields = [];

                                                    if (section === 'section1') {
                                                        if (payload.agent_number === '') requiredFields.push('Agent Number,');
                                                        if (payload.branch_name === '') requiredFields.push('Branch Name,');
                                                        if (payload.citizenship === '') requiredFields.push('Citizenship,');
                                                        if (payload.fullname === '') requiredFields.push('Full Name,');
                                                        if (payload.id_number === '') requiredFields.push('ID Number,');
                                                        if (payload.name === '') requiredFields.push('Name,');
                                                        if (payload.po_box === '') requiredFields.push('PO Box,');
                                                        if (payload.policy_number === '') requiredFields.push('Policy Number,');
                                                        if (payload.sales_rep_code === '') requiredFields.push('Sales Rep Code,');
                                                        if (payload.surname === '') requiredFields.push('Surname,');
                                                    }
                                                    else if (section === 'section2') {
                                                        if (payload.cover_amount === '') requiredFields.push('Cover Amount,');
                                                        if (payload.inception_date === '') requiredFields.push('Inception Date,');
                                                        if (payload.nextState === '') requiredFields.push('Next State,');
                                                        if (payload.policy_cover_date === '') requiredFields.push('Policy Cover Date,');
                                                        if (payload.policy_number === '') requiredFields.push('Policy Number,');
                                                        if (payload.policy_start_date === '') requiredFields.push('Policy Start Date,');
                                                        if (payload.policy_status === '') requiredFields.push('Policy Status,');
                                                        if (payload.policy_type === '') requiredFields.push('Policy Type,');
                                                        if (payload.premium === '') requiredFields.push('Premium,');
                                                        if (payload.total_premium === '') requiredFields.push('Total Premium,');
                                                        if (payload.underwritten_by === '') requiredFields.push('Underwritten By,');
                                                    }
                                                    else if (section === 'section5') {
                                                        if (payload.chkDebit) {
                                                            if (payload.dpAcc_holder === '') requiredFields.push('Debit - Account Holder,');
                                                            // if (payload.dpaccount_number === '') requiredFields.push('Debit - Account Number');
                                                            if (payload.dpaccount_type === '') requiredFields.push('Debit - Account Type,');
                                                            // if (payload.dpbank_name === '') requiredFields.push('Debit - Bank Name');
                                                            if (payload.dpbranch_code === '') requiredFields.push('Debit - Branch Code,');
                                                            if (payload.dpcell_number === '') requiredFields.push('Debit - Cell Number,');
                                                            if (payload.dpdebit_day === '') requiredFields.push('Debit - Debit Day,');
                                                            if (payload.dpfrequency === '') requiredFields.push('Debit - Frequency,');
                                                            if (payload.dppo_box === '') requiredFields.push('Debit - PO Box,');
                                                            if (payload.dppostal_code === '') requiredFields.push('Debit - Postal Code,');
                                                            if (payload.dppronvice === '') requiredFields.push('Debit - Province,');
                                                            if (payload.dpstreet_address === '') requiredFields.push('Debit - Street Address,');
                                                            if (payload.dptown === '') requiredFields.push('Debit - Town,');
                                                        }

                                                        if (payload.chkStop) {
                                                            if (payload.spAcc_holder === '') requiredFields.push('Stop - Account Holder,');
                                                            if (payload.spAcc_number === '') requiredFields.push('Stop - Account Number,');
                                                            if (payload.spAcc_type === '') requiredFields.push('Stop - Account Type,');
                                                            if (payload.spBank_name === '') requiredFields.push('Stop - Bank Name,');
                                                            if (payload.spDebit_date === '') requiredFields.push('Stop - Debit Date,');
                                                        }

                                                        if (payload.chkCash) {
                                                            if (payload.cp_address === '') requiredFields.push('Cash - Address,');
                                                            if (payload.cp_date === '') requiredFields.push('Cash - Date,');
                                                            if (payload.cp_fullname === '') requiredFields.push('Cash - Full Name,');
                                                            if (payload.cp_id === '') requiredFields.push('Cash - ID,');
                                                            if (payload.cp_po_box === '') requiredFields.push('Cash - PO Box,');
                                                            if (payload.cp_postal_code === '') requiredFields.push('Cash - Postal Code,');
                                                            if (payload.cp_province === '') requiredFields.push('Cash - Province,');
                                                            if (payload.cp_surname === '') requiredFields.push('Cash - Surname,');
                                                            if (payload.cp_town === '') requiredFields.push('Cash - Town,');
                                                        }

                                                        if (payload.chkPersal) {
                                                            if (payload.persal_Paypoint === '') requiredFields.push('Persal - Paypoint,');
                                                            if (payload.persal_address === '') requiredFields.push('Persal - Address,');
                                                            if (payload.persal_cell === '') requiredFields.push('Persal - Cell,');
                                                            if (payload.persal_code === '') requiredFields.push('Persal - Code,');
                                                            if (payload.persal_emp === '') requiredFields.push('Persal - Emp,');
                                                            if (payload.persal_holder === '') requiredFields.push('Persal - Holder,');
                                                            if (payload.persal_num === '') requiredFields.push('Persal - Num,');
                                                            if (payload.persal_po_box === '') requiredFields.push('Persal - PO Box,');
                                                            if (payload.persal_postal_code === '') requiredFields.push('Persal - Postal Code,');
                                                            if (payload.persal_premium === '') requiredFields.push('Persal - Premium,');
                                                            if (payload.persal_province === '') requiredFields.push('Persal - Province,');
                                                            if (payload.persal_town === '') requiredFields.push('Persal - Town,');
                                                        }
                                                    }
                                                    else if (section === 'section7') {
                                                        if (payload.status === '') requiredFields.push('INTERMEDIARY STATUS,');
                                                        if (payload.advice === '') requiredFields.push('ADVICE,');
                                                        if (payload.compliance_office === '') requiredFields.push('COMPLAINTS PROCEDURE,');
                                                        if (payload.reserved === '') requiredFields.push('RIGHTS RESERVED,');
                                                        if (payload.assurance === '') requiredFields.push('SIGNING AND ASSURANCE,');
                                                        if (payload.acceptTerm === '') requiredFields.push('Terms & Conditions,');
                                                        if (payload.curre_date === '') requiredFields.push('Date,');
                                                    }
                                                    if (section === 'section8') {
                                                        if (payload.up_title === '') requiredFields.push('up_title,');
                                                        if (payload.up_description === '') requiredFields.push('up_description,');
                                                        if (payload.up_documents === '') requiredFields.push('up_documents ,');
                                                    }

                                                    if (requiredFields.length > 0) {
                                                        iziToast.warning({
                                                            title: 'Warning',
                                                            message: 'The following fields are required:\n' + requiredFields.join('\n'),
                                                            position: 'topCenter',
                                                            timeout: false
                                                        });
                                                        return false;
                                                    }
                                                    return true;
                                                }

                                                const form = document.getElementById('wizard-validation-form');
                                                const prevBtn = document.getElementById('prevBtn');
                                                const nextBtn = document.getElementById('nextBtn');
                                                const submitBtn = document.getElementById('submitBtn');
                                                let currentTab;
                                                let mainMemberId = 0;
                                                let sectionOne=<?php echo json_encode($sectionOne);?>;
                                                let id= <?php echo Session::get('saleRepId')+1;?>;
                                                let initMainMember;

                                                function showTab(n) {
                                                    //Initialisation of showTab
                                                    if(n===undefined){
                                                        currentTab = (<?php echo json_encode($section); ?> + <?php echo json_encode($nextState); ?>)-1;
                                                        //*************************
                                                        if(currentTab < 0){
                                                            currentTab=0;
                                                        }
                                                    }
                                                    else{
                                                    }



                                                    if(currentTab < 0){
                                                        currentTab=0;
                                                    }
                                                    //Initialisation ends here

                                                    const sections = form.getElementsByTagName('section');
                                                    const progressContainer= document.getElementsByClassName('progress');
                                                    if (currentTab === 5) {//if we are in section 6
                                                        //same
                                                        for (let i = 0; i < sections.length; i++) {  //hide all sections
                                                            const currentSection= sections[i];
                                                            currentSection.style.display = 'none';
                                                        }

                                                        const columnElements = document.getElementsByClassName('process');
                                                        for (let i = 0; i < columnElements.length; i++) {
                                                            columnElements[i].style.backgroundColor = '#fff';
                                                            columnElements[i].querySelector('h6').style.color = '#000';
                                                            columnElements[i].style.color = '#000';
                                                            columnElements[i].querySelector('.d-flex').style.boxShadow = '2px 0px 0px 0px rgba(0,0,0,0.47)';
                                                            columnElements[i].querySelector('.d-flex').style.border= '2px solid black';
                                                            columnElements[i].querySelector('.d-flex').style.backgroundColor = '#fff';
                                                        }

                                                        columnElements[currentTab].style.backgroundColor = '#010e46';
                                                        columnElements[currentTab].style.color = '#fff';
                                                        columnElements[currentTab].querySelector('h6').style.color = '#fff';
                                                        columnElements[currentTab].querySelector('.d-flex').style.boxShadow = '2px 0px 0px 0px rgba(0,0,0,0.47)';
                                                        columnElements[currentTab].querySelector('.d-flex').style.border= '2px solid white';
                                                        columnElements[currentTab].querySelector('.d-flex').style.backgroundColor = '#CD5C5C';
                                                        // const originalHrefs = new Map();
                                                        for (let i = 0; i < 5; i++) { //show only section 1 to 5
                                                            const currentSection= sections[i];
                                                            // disableInputs(currentSection, originalHrefs, sections);
                                                            const inputs = currentSection.querySelectorAll('input');
                                                            for (let j = 0; j < inputs.length; j++) {
                                                                inputs[j].disabled = true;
                                                            }

                                                            const buttons = sections[i].querySelectorAll('button');
                                                            for (let k = 0; k < buttons.length; k++) {
                                                                buttons[k].disabled = true;
                                                            }

                                                            const sectionNumber = i + 1;
                                                            const button = document.createElement('button');
                                                            const divider = document.createElement('hr');

                                                            button.textContent = 'Update Section ' + sectionNumber; //---------->
                                                            button.style.background= '#010e46';
                                                            button.style.borderRadius = '0.3em';
                                                            button.style.marginTop = '1.5em';
                                                            button.style.padding = '0 0.5em';
                                                            button.id = `section-button-${sectionNumber}`;
                                                            divider.id = `section-divider-${sectionNumber}`;
                                                            console.log("id name:", `section-button-${sectionNumber}`);

                                                            divider.style.border = 'none';
                                                            divider.style.borderTop = '1px solid #ccc';
                                                            divider.style.marginTop = '1.5em';
                                                            divider.style.marginBottom = '6em';

                                                            let existingButton = currentSection.querySelector(`#section-button-${sectionNumber}`);

                                                            if (!existingButton) {
                                                                currentSection.appendChild(button);
                                                                currentSection.appendChild(divider);
                                                            }

                                                            currentSection.style.display = 'block';
                                                            button.addEventListener('click', async function() { //pressing the section button


                                                                //********************************************************************** [API]
                                                                const payload = {
                                                                    section: currentSection.querySelector('input[name="section"]').value,
                                                                    _token: $('meta[name="csrf-token"]').attr('content'),
                                                                    nextState: n
                                                                };
                                                                method = 'PUT';
                                                                actionURL = `/member-capture/${0}`;

                                                                console.log("url", actionURL);//delete here>>>>>>
                                                                console.log("method", method);//delete here>>>>>>
                                                                console.log("data: ", payload);//delete here>>>>>>

                                                                if(method==='POST' && checkFieldSections(payload) || method==='PUT'){
                                                                    try {
                                                                        const response = await fetch(actionURL, {
                                                                            method: method,
                                                                            headers: {
                                                                                'Content-Type': 'application/json',
                                                                                'X-CSRF-TOKEN': payload._token // Include CSRF token in headers
                                                                            },
                                                                            body: JSON.stringify(payload)
                                                                        });

                                                                        // Check if the response is successful
                                                                        if (response.ok) {
                                                                            // Update currentTab and show the tab
                                                                            console.log("ID show function", response.json())//delete here>>>>>>
                                                                            currentTab = i;
                                                                            const responseSection=currentTab+1;
                                                                            restoreInputs(currentSection);
                                                                            showTab(currentTab);
                                                                        } else {
                                                                            // Handle error
                                                                            console.error(`An error occurred: ${response.status}`);
                                                                        }
                                                                    } catch (error) {
                                                                        if (error instanceof SyntaxError && error.message.includes("Unexpected token '<'")) {
                                                                            iziToast.warning({
                                                                                title: 'Warning',
                                                                                message: 'An error occurred and the page will be reloaded.',
                                                                                position: 'topCenter',
                                                                                timeout: false,
                                                                                buttons: [
                                                                                    ['<button>OK</button>', function (instance, toast) {
                                                                                        location.reload();
                                                                                    }]
                                                                                ]
                                                                            });
                                                                        } else {
                                                                            throw error;
                                                                        }
                                                                    }

                                                                    //************************************************************************** [API]
                                                                }
                                                            });
                                                        }
                                                        // document.querySelector('.overall-container').style.minHeight='auto';
                                                    }
                                                    else{

                                                        for (let i = 0; i < sections.length; i++) {
                                                            const currentSection= sections[i];
                                                            currentSection.style.display = 'none';
                                                        }
                                                        console.log("first",currentTab);
                                                        sections[currentTab].style.display = 'block';
                                                        sections[currentTab].style.minHeight='auto';

                                                        const columnElements = document.getElementsByClassName('process');
                                                        for (let i = 0; i < columnElements.length; i++) {
                                                            columnElements[i].style.backgroundColor = '#fff';
                                                            columnElements[i].querySelector('h6').style.color = '#000';
                                                            columnElements[i].style.color = '#000';
                                                            columnElements[i].querySelector('.d-flex').style.boxShadow = '2px 0px 0px 0px rgba(0,0,0,0.47)';
                                                            columnElements[i].querySelector('.d-flex').style.border= '2px solid black';
                                                            columnElements[i].querySelector('.d-flex').style.backgroundColor = '#fff';

                                                        }

                                                        columnElements[currentTab].style.backgroundColor = '#010e46';
                                                        columnElements[currentTab].style.color = '#fff';
                                                        columnElements[currentTab].querySelector('h6').style.color = '#fff';
                                                        columnElements[currentTab].querySelector('.d-flex').style.boxShadow = '2px 0px 0px 0px rgba(0,0,0,0.47)';
                                                        columnElements[currentTab].querySelector('.d-flex').style.border= '2px solid white';
                                                        columnElements[currentTab].querySelector('.d-flex').style.backgroundColor = '#CD5C5C';

                                                        if (currentTab === 0) {
                                                            prevBtn.style.display = 'none';
                                                        } else {
                                                            prevBtn.style.display = 'block';
                                                        }

                                                        console.log("show currentTab",currentTab);
                                                        console.log("show section.length",sections.length - 1);
                                                        if (currentTab === sections.length - 1) {
                                                            nextBtn.innerText = 'Submit';
                                                        } else {
                                                            nextBtn.innerText = 'Next';
                                                        }
                                                    }
                                                }

                                                function restoreInputs(currentSection) {
                                                    // Check if currentSection is a valid DOM element
                                                    console.log("Hello currentSection", currentSection)
                                                    const sections = form.getElementsByTagName('section');
                                                    for (let i = 0; i < sections.length; i++) {
                                                        const section = sections[i];
                                                        const buttonToRemove = section.querySelector(`#section-button-${i + 1}`);
                                                        const divider = section.querySelector(`#section-divider-${i + 1}`);

                                                        if (buttonToRemove) {
                                                            section.removeChild(buttonToRemove);
                                                        }
                                                        if (divider) {
                                                            section.removeChild(divider);
                                                        }
                                                    }
                                                    if (currentSection instanceof Element) {
                                                        console.log("element")
                                                        const inputs = currentSection.querySelectorAll('input');
                                                        for (let j = 0; j < inputs.length; j++) {
                                                            inputs[j].disabled = false;
                                                        }
                                                        const buttons = currentSection.querySelectorAll('button');
                                                        for (let k = 0; k < buttons.length; k++) {
                                                            buttons[k].disabled = false;
                                                        }
                                                    } else if (typeof currentSection === 'number' && Number.isInteger(currentSection)) {
                                                        console.log("number")
                                                        const inputs = sections[currentSection-1].querySelectorAll('input');
                                                        for (let j = 0; j < inputs.length; j++) {
                                                            inputs[j].disabled = false;
                                                        }
                                                        const buttons = sections[currentSection-1].querySelectorAll('button');
                                                        for (let k = 0; k < buttons.length; k++) {
                                                            buttons[k].disabled = false;
                                                        }
                                                    }
                                                }

                                                async function checkMainMemberId(sectionIndex) {
                                                    try {
                                                        const token = '{{ csrf_token() }}';
                                                        const response1 = await fetch('/check-main-member-id', {
                                                            method: 'POST',
                                                            headers: {
                                                                'Content-Type': 'application/json',
                                                                'X-CSRF-TOKEN': token
                                                            },
                                                            body: JSON.stringify({
                                                                section: 'section' + sectionIndex
                                                            })
                                                        });


                                                        if (response1.ok) {
                                                            console.log("first")//delete here>>>>>>
                                                            const data = await response1.json();
                                                            console.log("hello", data)//delete here>>>>>>
                                                            // return data.exists;
                                                            return data;
                                                        } else {
                                                            throw new Error('Request error: ' + response.status);
                                                            const errorResponse = await response.json();
                                                            const errorMessage = errorResponse.error;
                                                            iziToast.error({
                                                                title: 'Error',
                                                                message: "An error occurred: " + errorMessage,
                                                                position: 'topCenter',
                                                                timeout: false
                                                            });

                                                        }
                                                    } catch (error) {
                                                        // Handle mainMemberId check error
                                                        iziToast.error({
                                                            title: 'Error',
                                                            message: "An error occurred: " + errorMessage,
                                                            position: 'topCenter',
                                                            timeout: false
                                                        });
                                                        return false;
                                                    }
                                                }

                                                async function nextPrev(n) {

                                                    const sections = form.getElementsByTagName('section');
                                                    const currentSection = sections[currentTab];
                                                    const currentInputs = currentSection.querySelectorAll('input');
                                                    const currentSelects = currentSection.querySelectorAll('select');

                                                    let responseSection;
                                                    let newPaymentMethod=null;
                                                    if(sectionOne === undefined) {
                                                        sectionOne= true;}

                                                    if(initMainMember === '' || initMainMember === null || initMainMember === undefined){
                                                        initMainMember= <?php echo json_encode($mainMemberId);?>;
                                                    }
                                                    //if the current section is not section 3, section 4 or section 8
                                                    //only sends from fetch when next of prev buttons is pressed
                                                    if(currentTab !== 2 && currentTab !== 3 && currentTab !== 7){
                                                        //section 1,2,5,6,7
                                                        //Then you can create or update the information to the DB from here
                                                        if (currentInputs.length > 0) {

                                                            const payload = {
                                                                section: currentSection.querySelector('input[name="section"]').value,
                                                                _token: $('meta[name="csrf-token"]').attr('content'),
                                                                nextState: n
                                                            };

                                                            for (let i = 0; i < currentInputs.length; i++) { //placing all the input values in the payload
                                                                const input = currentInputs[i];
                                                                if (input.type === 'checkbox') {
                                                                    payload[input.name] = input.checked;
                                                                    if(input.checked === true){
                                                                        newPaymentMethod=input.name;
                                                                    }
                                                                } else {
                                                                    payload[input.name] = input.value;
                                                                }
                                                            }

                                                            for (let i = 0; i < currentSelects.length; i++) { // Placing all the select values in the payload
                                                                const select = currentSelects[i];
                                                                payload[select.name] = select.value;
                                                            }

                                                            if(responseSection === '' || responseSection === null || responseSection === undefined){//if a response section doesn't exist
                                                                //this condition is met during the first section going to the second
                                                                responseSection= currentTab + 1;
                                                            }

                                                            let mainMemberIdExists=false;
                                                            let arrayExists=[];
                                                            let previousPaymentMethod=null;
                                                            let isPaymentMethodChange= false;

                                                            if(initMainMember === 'false'){
                                                                mainMemberIdExists= false;
                                                                console.log("initMainaMember 2")//delete here>>>>>>
                                                            }
                                                            else{
                                                                arrayExists = await checkMainMemberId(responseSection);
                                                                mainMemberIdExists = arrayExists.exists;
                                                                (arrayExists.currentPayment === undefined)? previousPaymentMethod=null: previousPaymentMethod= arrayExists.currentPayment;
                                                                if(currentTab === 4){
                                                                    (newPaymentMethod === previousPaymentMethod)? (isPaymentMethodChange= false):(isPaymentMethodChange= true);
                                                                }
                                                            }

                                                            let method;
                                                            let actionURL;

                                                            if (mainMemberIdExists && sectionOne && !isPaymentMethodChange) {
                                                                method = 'PUT';
                                                                actionURL=`/member-capture/${id}`;
                                                            }
                                                            else {
                                                                if(previousPaymentMethod !== null){ //if you want to update payment
                                                                    if (!confirm("Do you want to delete your previous payment method: "+ previousPaymentMethod +" ?")) {
                                                                            // User did not agree
                                                                            location.reload(); // Reload the page
                                                                    }
                                                                }
                                                                method = 'POST';
                                                                actionURL='/member-capture';
                                                            }
                                                            //****************************************
                                                            console.log("url", actionURL);
                                                            console.log("method", method);
                                                            console.log("data: ", payload);
                                                            //***************************************
                                                            if(method==='POST' && checkFieldSections(payload) || method==='PUT'){
                                                                try{
                                                                    const response = await fetch(actionURL, {
                                                                        method: method,
                                                                        headers: {
                                                                            'Content-Type': 'application/json',
                                                                            'X-CSRF-TOKEN': payload._token // Include CSRF token in headers
                                                                        },
                                                                        body: JSON.stringify(payload)
                                                                    });

                                                                    if (response.ok) {
                                                                        //After the information has been create or updated successfully
                                                                        const data = await response.json();
                                                                        responseSection= data.section;
                                                                        sectionOne=data.sectionOne;
                                                                        const formCompleted= (data.section + data.nextState) === 9? true: false;
                                                                        initMainMember= 'true';
                                                                        //*************************************************
                                                                        //delete here>>>>>>
                                                                        console.log("data",data);
                                                                        console.log("--> input", data);
                                                                        console.log("response nextState", data.nextState)
                                                                        console.log("mainMemberId initMainMember being checked2", initMainMember)

                                                                        if(data.error){
                                                                            const errorMessage = data.error;

                                                                            iziToast.error({
                                                                                title: 'Error',
                                                                                message: "An error occurred: " + errorMessage,
                                                                                position: 'topCenter',
                                                                                timeout: false
                                                                            });
                                                                        }
                                                                        else{
                                                                            currentTab += n;
                                                                        }

                                                                        if (currentTab < sections.length) {//prevent showing an empty section
                                                                            if(data.nextState !== undefined){
                                                                                restoreInputs(responseSection+data.nextState);
                                                                            }
                                                                            showTab(currentTab);
                                                                            document.querySelector('.overall-container').style.minHeight='auto';
                                                                            document.querySelector('.dashboard-container').style.minHeight='auto';
                                                                        }

                                                                    } else {
                                                                        const errorResponse = await response.json();
                                                                        const errorMessage = errorResponse.error;

                                                                        iziToast.error({
                                                                            title: 'Error',
                                                                            message: "An error occurred: " + errorMessage,
                                                                            position: 'topCenter',
                                                                            timeout: false
                                                                        });
                                                                        throw new Error('Request error: ' + response.status);
                                                                    }
                                                                } catch (error) {
                                                                    if (error instanceof SyntaxError && error.message.includes("Unexpected token '<'")) {
                                                                        iziToast.warning({
                                                                            title: 'Warning',
                                                                            message: 'An error occurred and the page will be reloaded.',
                                                                            position: 'topCenter',
                                                                            timeout: false,
                                                                            buttons: [
                                                                                ['<button>OK</button>', function (instance, toast) {
                                                                                    location.reload();
                                                                                }]
                                                                            ]
                                                                        });
                                                                    } else {
                                                                        throw error;
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                    else{ //else just show the form without creating or updating the information to the DB from here
                                                        //section 3, 4 & 8
                                                        //Input=[]
                                                        const payload = {
                                                            section: currentSection.querySelector('input[name="section"]').value,
                                                            _token: $('meta[name="csrf-token"]').attr('content'),
                                                            nextState: n
                                                        };
                                                        try{
                                                            const response = await fetch('/member-capture', {
                                                                method: 'POST',
                                                                headers: {
                                                                    'Content-Type': 'application/json',
                                                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Include CSRF token in headers
                                                                },
                                                                body: JSON.stringify(payload)
                                                            });

                                                            if (response.ok) {
                                                                //After the information has been create or updated successfully
                                                                const data = await response.json();
                                                                responseSection= data.section;
                                                                sectionOne=data.sectionOne;

                                                                //************************************************* TO BE DELETED!
                                                                console.log("data",data);
                                                                console.log("sessionRes", responseSection);
                                                                console.log("--> input", data.input);
                                                                console.log("nextState", data.nextState);

                                                                if(data.error){
                                                                    const errorMessage = data.error;
                                                                    console.log("problem", errorMessage);
                                                                    iziToast.error({
                                                                        title: 'Error',
                                                                        message: "An error occurred: " + errorMessage,
                                                                        position: 'topCenter',
                                                                        timeout: false
                                                                    });
                                                                }

                                                                currentTab += n;
                                                                console.log("currentTab after 2", currentTab);
                                                                if(currentTab === 8){window.location.href = '/dashboard'; currentTab = 0;}

                                                                if (currentTab < sections.length) {
                                                                    if(data.nextState !== undefined){
                                                                        restoreInputs(responseSection+data.nextState);
                                                                    }
                                                                    showTab(currentTab);
                                                                }

                                                            } else {
                                                                // throw new Error('Request error: ' + response.status);
                                                                const errorResponse = await response.json();
                                                                const errorMessage = errorResponse.error;
                                                                iziToast.error({
                                                                        title: 'Error',
                                                                        message: "An error occurred: " + errorMessage,
                                                                        position: 'topCenter',
                                                                        timeout: false
                                                                    });
                                                            }
                                                        } catch (error) {
                                                            if (error instanceof SyntaxError && error.message.includes("Unexpected token '<'")) {
                                                                iziToast.warning({
                                                                    title: 'Warning',
                                                                    message: 'An error occurred and the page will be reloaded.',
                                                                    position: 'topCenter',
                                                                    timeout: false,
                                                                    buttons: [
                                                                        ['<button>OK</button>', function (instance, toast) {
                                                                            location.reload();
                                                                        }]
                                                                    ]
                                                                });
                                                            } else {
                                                                throw error;
                                                            }
                                                        }
                                                    }
                                                }


                                                showTab(currentTab);
                                                function correctFooter(){
                                                    const footer = document.querySelector('.footer');
                                                    const dashboardContainer = document.querySelector('.dashboard-container');

                                                    const footerRect = footer.getBoundingClientRect();
                                                    const dashboardContainerRect = dashboardContainer.getBoundingClientRect();

                                                    if (footerRect.bottom < dashboardContainerRect.bottom) {
                                                        footer.style.bottom = '0';
                                                    }
                                                }
                                                correctFooter();

                                            </script>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end row -->

                        </div>
                    </div><!-- end col-->
                </div>
                <!-- end row -->
            </div> <!-- end container-fluid -->

@endsection
