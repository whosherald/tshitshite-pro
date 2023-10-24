@extends('Admin.layout_forms')
@section('admin.formContent')
    <link href="assets/css/claims.css" rel="stylesheet"/>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="" style="background: none">
                                    <!-- progress bar multistep form -->
                                    <div class="container">
                                        <header></header>

                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-12" style="padding: 0 2em">
                                            <h5>Claims</h5>

                                            {{-- Progress Blocks --}}
                                            <div class="col-12 d-flex flex-column mt-4 progress-d">
                                                <div class="row progress-row" >
                                                    <div class="p-2 process d-flex box-top" style="border-radius: 0.5em; align-items:center; box-shadow: 10px 6px 7px rgba(0, 0, 0, 0.4);" >
                                                        <div class="d-flex justify-content-center align-items-center ml-1 box-top-no" style=" border-radius: 50%; border: 1.5px solid black;">1</div>
                                                        <h6 style="">Cliamant Details</h6>
                                                    </div>
                                                    <div class="p-2 process d-flex box-top" style="border-radius: 0.5em; align-items:center; box-shadow: 10px 6px 7px rgba(0, 0, 0, 0.4);" >
                                                        <div class="d-flex justify-content-center align-items-center ml-1 box-top-no" style=" border-radius: 50%; border: 1.5px solid black;">2</div>
                                                        <h6 style="color:black">Claims Details</h6>
                                                    </div>
                                                    <div class="p-2 process d-flex box-top" style="border-radius: 0.5em; align-items:center; box-shadow: 10px 6px 7px rgba(0, 0, 0, 0.2);" >
                                                        <div class="d-flex justify-content-center align-items-center ml-1 box-top-no" style=" border-radius: 50%; border: 1.5px solid black;">3</div>
                                                        <h6 style="">Deceased Details</h6>
                                                    </div>

                                                    <div class="p-2 process d-flex box-top" style="border-radius: 0.5em; align-items:center; box-shadow: 10px 6px 7px rgba(0, 0, 0, 0.2);" >
                                                        <div class="d-flex justify-content-center align-items-center ml-1 box-top-no" style=" border-radius: 50%; border: 1.5px solid black;">4</div>
                                                        <h6 style="">Terms and conditions</h6>
                                                    </div>
                                                </div>
                                            </div>

                                            <form id="wizard-validation-form-d"  style="background: #ffffff;">
                                                <div>
                                                    {!! csrf_field() !!}
                                                    <section class="p-2">
                                                        <input type="hidden" name="claim_section" value="section1">
                                                        <div class="title d-flex mb-4" style="background-color:#67a8e4; height:50px; align-items:center !important; box-shadow: 2px 2px 5px #888888; justify-content:center">
                                                            <h4 style=" "> CLAIMANT DETAILS</h4>
                                                        </div>

                                                        <h4>Main Member</h4>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                              <div class="form-group clearfix">
                                                                <div class="col-md-12 d-flex justify-content-center" style="gap:1em">
                                                                  <label for="fullname" class=" col-form-label" style="width: 30%;">FullNames</label>
                                                                  <input class="form-control" id="fullname" name="fullname" type="text" style="width: 70%;" placeholder="{{ isset($mainMember) ? $mainMember->fullname : '' }}">
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                              <div class="form-group clearfix">
                                                                <div class="col-md-12 d-flex justify-content-center" style="gap:1em">
                                                                  <label for="password2" class="col-form-label" style="width: 30%;">Title:</label>
                                                                  <select name="title" id="title" class="required form-control" style="width: 70%; margin-left: 10px;">
                                                                    <option value="">{{ isset($mainMember) ? $mainMember->title : '' }}</option>
                                                                    <option value="mrs">Mrs</option>
                                                                    <option value="mr">Mr</option>
                                                                    <option value="dr">Dr</option>
                                                                    <option value="miss">Miss</option>
                                                                    <option value="prof">Prof</option>
                                                                  </select>
                                                                </div>
                                                              </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="surname" class="col-form-label" style="width: 30%;">Surname:</label>
                                                                        <input class="required form-control" id="surname" name="surname" type="text" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($mainMember) ? $mainMember->surname : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="id_number" class="col-form-label" style="width: 30%;">ID No:</label>
                                                                        <input id="id_number" name="id_number" type="text" maxlength="13" class="required form-control" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($mainMember) ? $mainMember->id_number : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->
                                                    </section>

                                                    <section class="p-2">
                                                        <input type="hidden" name="claim_section" value="section2">
                                                        <div class="title d-flex mb-4" style="background-color:#67a8e4; height:50px; align-items:center !important; box-shadow: 2px 2px 5px #888888; justify-content:center">
                                                            <h4 style=" "> CLAIMS DETAILS</h4>
                                                        </div>

                                                        <div class="row ">
                                                            <div class="col-md-6">
                                                                <div class="row mt-3 d-flex justify-content-center align-items-center" style="">
                                                                    <div class="col-auto">
                                                                      <input type="checkbox" name="claim_claiming" <?php if (isset($claims) && $claims->claim_claiming) echo 'checked'; ?>>
                                                                    </div>
                                                                    <div class="col">
                                                                      <label for="cl_claiming" class="container">Claiming for member</label>
                                                                    </div>
                                                                  </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row mt-3 align-items-center">
                                                                    <div class="col-auto">
                                                                      <input type="checkbox" name="claim_apply" <?php if (isset($claims) && $claims->claim_apply) echo 'checked'; ?>>
                                                                    </div>
                                                                    <div class="col">
                                                                      <label class="container" for="claim_apply">Apply waiting period</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <hr>

                                                        <div>
                                                            <h6>Claim Details</h6>
                                                        </div>
                                                        <hr>

                                                        <div class="" style="">
                                                            <div class="">
                                                                <div class="input-row">
                                                                    <div class="col-lg-6">
                                                                        <div class="input mb-3" style="">
                                                                            <label for="tellphone" class="col-form-label"  style="width: 30%;">claim date</label>
                                                                            <input id="txtCityBilling" name="claim_date" type="date" class="form-control" style="width: 70%; margin-left: 10px;" value="{{ isset($claims) ? $claims->claim_date : '' }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="input mb-3" style="">
                                                                            <label for="tellphone" class="col-form-label" style="width: 30%;">claim number</label>
                                                                            <input id="txtCityBilling" name="claim_number" type="number" class="form-control" style="width: 70%; margin-left: 10px;"  placeholder="{{ isset($claims) ? $claims->claim_number : '' }}">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="input-row">
                                                                    <div class="col-lg-6">
                                                                        <div class="input mb-3" style="">
                                                                            <label for="tellphone" class="col-form-label" style="width: 30%;">cause of death</label>
                                                                            <input id="txtCityBilling" name="claim_cause_death" type="text" class="form-control" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($claims) ? $claims->claim_cause_death : '' }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="input mb-3" style="">
                                                                            <label for="tellphone" class="col-form-label" style="width: 30%;">cover amount</label>
                                                                            <input id="txtCityBilling" name="claim_cover_amount" type="number" class="form-control" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($claims) ? $claims->claim_cover_amount : '' }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="input-row">
                                                                    <div class="col-lg-6">
                                                                        <div class="input mb-3" style="">
                                                                            <label for="tellphone" class="col-form-label" style="width: 30%;">Claim Notes</label>
                                                                            <textarea  name="claim_notes"required class="form-control" rows="8" style="width: 70%; margin-left: 10px;">{{ isset($claims) ? $claims->claim_notes : '' }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="file-inputs" style="border: 1px solid #d6d6d6; padding: 0.7em 0.5em; border-radius: 0.1em; ">

                                                                                <div class=" d-flex mb-3 align-items-center" style="justify-content: start; gap:0.5em">
                                                                                    <input type="checkbox" name="claim_apply_period" id="claim_apply_period" style="width: 1.2em; height: 1.2em" <?php if (isset($claims) && $claims->claim_apply_period) echo 'checked'; ?>>
                                                                                    <label for="claim_apply_period">Apply waiting period</label>
                                                                                </div>
                                                                            <div class="radio-inputs">
                                                                                <div class="input mb-3 ">
                                                                                    <input type="radio" id="claim_certificate" name="claim_certificate" <?php if (isset($claims) && $claims->claim_certificate) echo 'checked'; ?>>
                                                                                    <label for="certificate" class="container">Death Certificate</label>
                                                                                </div>

                                                                                <div class="input mb-3">
                                                                                    <input type="radio" name="claim_choose_file" <?php if (isset($claims) && $claims->claim_choose_file) echo 'checked'; ?>>
                                                                                    <label for="choose_file" class="container">Bl663</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="input-file-row">
                                                                                <label for="tellphone" class="col-form-label">Select Supported Document File</label>
                                                                                <input id="claim_documents" name="claim_documents" type="file" class="form-control" placeholder="{{ isset($claims) ? $claims->claim_documents : '' }}" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="button-items">
                                                                {{-- <button type="button" class="btn btn-success waves-effect waves-light">print claim</button>
                                                                <button type="button" class="btn btn-success waves-effect waves-light">payment history</button>
                                                                <button type="button" class="btn btn-success waves-effect waves-light">claim payment</button>
                                                                <button type="button" class="btn btn-success waves-effect waves-light">clear</button> --}}
                                                            </div>

                                                            <hr>
                                                        </div>


                                                    </section>

                                                    <section class="p-2">
                                                        <input type="hidden" name="claim_section" value="section3">
                                                        <div class="title d-flex mb-4" style="background-color:#67a8e4; height:50px; align-items:center !important; box-shadow: 2px 2px 5px #888888; justify-content:center">
                                                            <h4 style=" ">DECEASED DETAILS</h4>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex justify-content-center" style="gap:1em">
                                                                        <label for="fullname" class=" col-form-label" style="width: 30%;">FullNames</label>
                                                                        <input class="form-control" id="deceased_name" name="deceased_name" type="text" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($deceased) ? $deceased->deceased_name : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex justify-content-center" style="gap:1em">
                                                                        <label for="fullname" class=" col-form-label" style="width: 30%;">Gender</label>
                                                                        <select  name="deceased_gender" class="form-control" id="deceased_gender" style="width: 70%; margin-left: 10px;">
                                                                            <option value="">{{ isset($deceased) ? $deceased->deceased_gender : '' }}</option>
                                                                            <option value="Male">Male</option>
                                                                            <option value="Female">Female</option>
                                                                            <option value="Other">Other</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex justify-content-center" style="gap:1em">
                                                                        <label for="fullname" class=" col-form-label" style="width: 30%;">Surname</label>
                                                                        <input class="form-control" id="deceased_surname" name="deceased_surname" type="text" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($deceased) ? $deceased->deceased_surname : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="id_number" class="col-form-label" style="width: 30%;">ID No:</label>
                                                                        <input id="deceased_id_number" name="deceased_id_number" type="text" maxlength="13" class="form-control" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($deceased) ? $deceased->deceased_id_number : '' }}">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="id_number" class="col-form-label" style="width: 30%;">Date of Birth</label>
                                                                        <input id="deceased_date_of_birth" name="deceased_date_of_birth" type="date" onchange="calAge()"class="form-control" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($deceased) ? $deceased->deceased_date_of_birth : '' }}">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="id_number" class="col-form-label" style="width: 30%;">Date of Death</label>
                                                                        <input id="deceased_date_of_death" name="deceased_date_of_death" type="date" onchange="calAge()"class="form-control" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($deceased) ? $deceased->deceased_date_of_death : '' }}">

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <script>

                                                                function calAge(){
                                                                    var inputage = document.getElementById("date_of_birth").value;
                                                                    var currentyear = new Date().getFullYear();
                                                                    var year = inputage.substring(0,4);// 2022/07/07
                                                                    console.log(year)

                                                                    age = currentyear-year;
                                                                    console.log(age)

                                                                    document.getElementById("age").value=age;

                                                                }
                                                            </script>
                                                        </div><!-- end row -->

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">cause of death</label>
                                                                        <input class="form-control" id="deceased_cause_of_death" name="deceased_cause_of_death" type="text" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($deceased) ? $deceased->deceased_cause_of_death : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Code</label>
                                                                        <input class="form-control" id="deceased_code" name="deceased_code" type="text"style="width: 70%; margin-left: 10px;" placeholder="{{ isset($deceased) ? $deceased->deceased_code : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->


                                                        <div>
                                                            <hr>
                                                        </div>

                                                        <h3 class="mb-5">Funeral Details</h3>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="input mb-3" style="">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Date of Funeral</label>
                                                                        <input class="form-control" id="deceased_funeral_date" name="deceased_funeral_date" type="date" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($deceased) ? $deceased->deceased_funeral_date : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="input mb-3" style="">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Time of Funeral</label>
                                                                        <input class="form-control" id="deceased_funeral_time" name="deceased_funeral_time" type="time" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($deceased) ? $deceased->deceased_funeral_time : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="input mb-3" style="">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">collected From</label>
                                                                        <input class="form-control" id="deceased_collection" name="deceased_collection" type="text"style="width: 70%; margin-left: 10px;" placeholder="{{ isset($deceased) ? $deceased->deceased_collection : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="input mb-3" style="">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Driver and car</label>
                                                                        <input id="deceased_transport" name="deceased_transport" type="text" maxlength="13" class="form-control"style="width: 70%; margin-left: 10px;" placeholder="{{ isset($deceased) ? $deceased->deceased_transport : '' }}">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="input mb-3" style="">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Cemetery</label>
                                                                        <input id="deceased_cemetery" name="deceased_cemetery" type="text" maxlength="13" class="form-control"style="width: 70%; margin-left: 10px;" placeholder="{{ isset($deceased) ? $deceased->deceased_cemetery : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="input mb-3" style="">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Grave No</label>
                                                                        <input id="deceased_grave_no" name="deceased_grave_no" type="number" maxlength="13" class="form-control"style="width: 70%; margin-left: 10px;" placeholder="{{ isset($deceased) ? $deceased->deceased_grave_no : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->

                                                    </section>

                                                    <section>
                                                        <input type="hidden" name="claim_section" value="section4">
                                                        <h4>Beneficiary Banking Details</h4>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Account Holder</label>
                                                                        <input class="form-control" id="claim_b_holder" name="claim_b_holder" type="text" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($cliamant_bank) ? $cliamant_bank->claim_b_holder : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Bank Name</label>
                                                                        <select  name="claim_b_bank" class="form-control" id="claim_b_bank" style="width: 70%; margin-left: 10px;">

                                                                            <option value="">{{ isset($cliamant_bank) ? $cliamant_bank->claim_b_bank : '' }}</option>
                                                                            <option value="mrs">Mrs</option>
                                                                            <option value="mr">Mr</option>
                                                                            <option value="dr">Dr</option>
                                                                            <option value="miss">Miss</option>
                                                                            <option value="prof">Prof</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Account Number</label>
                                                                        <input class="form-control" id="claim_b_number" name="claim_b_number" type="text" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($cliamant_bank) ? $cliamant_bank->claim_b_number : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Bank Branch</label>
                                                                        <input id="claim_b_branch" name="claim_b_branch" type="text" maxlength="13" class="form-control" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($cliamant_bank) ? $cliamant_bank->claim_b_branch : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Account Type</label>
                                                                        <select  name="claim_b_type" class="form-control" id="claim_b_type"  style="width: 70%; margin-left: 10px;">
                                                                            <option value="">{{ isset($cliamant_bank) ? $cliamant_bank->claim_b_type : '' }}</option>
                                                                            <option value="FNB">FNB</option>
                                                                            <option value="standard_bank">Standard Bank</option>
                                                                            <option value="Capitec">Capitec</option>
                                                                            <option value="Nedbank">Nedbank</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Branch Code</label>
                                                                        <input id="claim_b_code" name="claim_b_code" type="text" maxlength="13" class="form-control" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($cliamant_bank) ? $cliamant_bank->claim_b_code : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->

                                                    </section>

                                                    <div class="tab" id="finalstepTab">
                                                        <p>If you are sure the information provided is correct and you have supplied all supporting documentation you
                                                            can click submit otherwise close this window and continue when you have this information.</p>
                                                    </div>
                                                    <div style="width: 100%; margin-top:2em ">
                                                        <div style="width: 100%;">
                                                          <button type="button" id="prevBtn" class="prev blue" onclick="nextPrev(-1)" style="display: inline !important; float: left; border-radius:0.5em; margin-right:0.5em">Previous</button>
                                                          <button type="button" id="nextBtn" class="nxt blue" onclick="nextPrev(1)" style="display: inline !important;border-radius:0.5em">Next</button>
                                                        </div>
                                                    </div>

                                                    <?php
                                                        if($mainMemberId == 'false'){
                                                            $msg= 'New Form';
                                                        }else{
                                                            $msg= $mainMemberId;
                                                        }
                                                    ?>
                                                    <span>{{ $msg }}</span>
                                                    {{-- <span style="margin-top: ">{{ $msg }}</span> --}}
                                                    {{-- <span>{{ isset($saleRep) ? '$policyDetails->policy_type' : 'no saleRep'}}</span>
                                                    <span>{{ isset($mainMember) ? '$policyDetails->policy_type' : 'no mainMember' }}</span> --}}

                                                    <script>

                                                        function checkFieldClaimSections(payload) {
                                                            const { section } = payload;
                                                            const requiredFields = [];

                                                            if (section === 'section1') {
                                                                if (payload.fullname === '') requiredFields.push('Full Name');
                                                                if (payload.title === '') requiredFields.push('Title');
                                                                if (payload.surname === '') requiredFields.push('Surname');
                                                            }
                                                            else if (section === 'section2') {
                                                                if (payload.claim_date === '') requiredFields.push('Date');
                                                                if (payload.claim_number === '') requiredFields.push('Claim number');
                                                                if (payload.claim_cause_death === '') requiredFields.push('Cause death');
                                                                if (payload.claim_cover_amount === '') requiredFields.push('Cover amount');
                                                                if (payload.claim_notes === '') requiredFields.push('Claim notes');
                                                            }
                                                            else if (section === 'section3') {
                                                                if (payload.deceased_id_number === '') requiredFields.push('Id Number');
                                                                if (payload.deceased_date_of_death === '') requiredFields.push('Death Date');
                                                                if (payload.deceased_cause_of_death === '') requiredFields.push('Cause of death');
                                                                if (payload.deceased_funeral_date === '') requiredFields.push('Funeral date');
                                                                if (payload.deceased_funeral_time === '') requiredFields.push('Funeral time');

                                                                if (payload.deceased_collection === '') requiredFields.push('Collection');
                                                                if (payload.deceased_transport === '') requiredFields.push('Transport');
                                                                if (payload.deceased_cemetery === '') requiredFields.push('Cemetery');
                                                                if (payload.deceased_grave_no === '') requiredFields.push('Grave Number');
                                                            }
                                                            else if (section === 'section4') {
                                                                if (payload.claim_b_holder === '') requiredFields.push('Holder');
                                                                if (payload.claim_b_number === '') requiredFields.push('Bank number');
                                                                if (payload.claim_b_type === '') requiredFields.push('Type of Bank');
                                                            }

                                                            if (requiredFields.length > 0) {
                                                                alert('The following fields are required:\n' + requiredFields.join('\n'));
                                                                return false;
                                                            }
                                                            return true;
                                                        }

                                                        const form = document.getElementById('wizard-validation-form-d');
                                                        const prevBtn = document.getElementById('prevBtn');
                                                        const nextBtn = document.getElementById('nextBtn');
                                                        const submitBtn = document.getElementById('submitBtn');
                                                        let currentTab;
                                                        let mainMemberId = 0;
                                                        let initMainMember;
                                                        let sectionOne=<?php echo json_encode($sectionOne);?>;

                                                        function showTab(n) {
                                                            //Initialisation of showTab
                                                            if(n===undefined){
                                                                currentTab = (<?php echo json_encode($section); ?> + <?php echo json_encode($nextState); ?>)-1;
                                                                //*************************
                                                                if(currentTab < 0){
                                                                    currentTab=0;
                                                                }
                                                                //*************************
                                                                console.log("currentTab", currentTab);//delete here>>>>>>
                                                            }
                                                            else{
                                                                //
                                                                //
                                                            }

                                                            if(currentTab < 0){
                                                                currentTab=0;
                                                            }
                                                            //Initialisation ends here

                                                            //
                                                            const sections = form.getElementsByTagName('section');
                                                            for (let i = 0; i < sections.length; i++) {
                                                                sections[i].style.display = 'none';
                                                            }

                                                            sections[currentTab].style.display = 'block';

                                                            const columnElements = document.getElementsByClassName('process');
                                                            for (let i = 0; i < columnElements.length; i++) {
                                                                columnElements[i].style.backgroundColor = '#fff';
                                                                    columnElements[i].querySelector('h6').style.color = '#000';
                                                                    columnElements[i].style.color = '#000';
                                                                    columnElements[i].querySelector('.d-flex').style.boxShadow = '2px 0px 0px 0px rgba(0,0,0,0.47)';
                                                                    columnElements[i].querySelector('.d-flex').style.border= '2px solid black';
                                                                    columnElements[i].querySelector('.d-flex').style.backgroundColor = '#fff';

                                                                }

                                                                columnElements[currentTab].style.backgroundColor = '#0074B7';
                                                                columnElements[currentTab].style.color = '#fff';
                                                                columnElements[currentTab].querySelector('h6').style.color = '#fff';
                                                                columnElements[currentTab].querySelector('.d-flex').style.boxShadow = '2px 0px 0px 0px rgba(0,0,0,0.47)';
                                                                columnElements[currentTab].querySelector('.d-flex').style.border= '2px solid white';
                                                                columnElements[currentTab].querySelector('.d-flex').style.backgroundColor = '#8f2901';

                                                            if (currentTab === 0) {
                                                                prevBtn.style.display = 'none';
                                                            } else {
                                                                prevBtn.style.display = 'block';
                                                            }

                                                            if (currentTab === sections.length - 1) {
                                                                nextBtn.innerText = 'Submit';
                                                            } else {
                                                                nextBtn.innerText = 'Next';
                                                            }
                                                        }

                                                        async function checkMainMemberId(sectionIndex) {
                                                            try {
                                                                const token = '{{ csrf_token() }}';
                                                                const response1 = await fetch('/check-main-member-id-claim', {
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
                                                                    throw new Error('Main Member ID check error: ' + response1.status);
                                                                }
                                                            } catch (error) {
                                                                // Handle mainMemberId check error
                                                                console.log(error);
                                                                return false;
                                                            }
                                                        }

                                                        async function nextPrev(n) {

                                                            const sections = document.querySelectorAll('#wizard-validation-form-d section');
                                                            const currentSection = sections[currentTab];
                                                            const currentInputs = currentSection.querySelectorAll('input, textarea');
                                                            const currentSelects = currentSection.querySelectorAll('select');
                                                            let id= <?php echo json_encode($mainMemberId);?>;

                                                            let responseSection;
                                                            if(sectionOne === undefined) {
                                                                sectionOne= true;}

                                                            if(initMainMember === '' || initMainMember === null || initMainMember === undefined){
                                                                initMainMember= <?php echo json_encode($mainMemberId);?>;
                                                                console.log("mainMemberId being checked", <?php echo json_encode($mainMemberId)?>)
                                                            }
                                                            // console.log("mainMemberId initMainMember being checked1", initMainMember)
                                                            //if the current section is not section 3 or section 4

                                                            //Then you can create or update the information to the DB from here
                                                            if (currentInputs.length > 0) {

                                                                const payload = {
                                                                    section: currentSection.querySelector('input[name="claim_section"]').value,
                                                                    _token: $('meta[name="csrf-token"]').attr('content'),
                                                                    nextState: n
                                                                };

                                                                for (let i = 0; i < currentInputs.length; i++) {
                                                                    const input = currentInputs[i];
                                                                    if (input.type === 'checkbox') {
                                                                        payload[input.name] = input.checked ? true : false;
                                                                    } else if (input.type === 'radio') {
                                                                        if (input.checked) {
                                                                            payload[input.name] = input.value;
                                                                        }
                                                                    } else {
                                                                        payload[input.name] = input.value;
                                                                    }

                                                                    if (input.name === 'claim_choose_file') {
                                                                        payload[input.name] = input.checked ? 1 : 0;
                                                                    }
                                                                }

                                                                for (let i = 0; i < currentSelects.length; i++) {
                                                                    const select = currentSelects[i];
                                                                    payload[select.name] = select.value;
                                                                }

                                                                if(responseSection === '' || responseSection === null || responseSection === undefined){//if a response section doesn't exist
                                                                    //this is for the method checkMainMemberId()
                                                                    //this condition is met during the first section going to the second
                                                                    responseSection= currentTab + 1;
                                                                }
                                                                //****************************************
                                                                console.log("above response section",responseSection);//delete here>>>>>>
                                                                console.log("Section one",sectionOne);//delete here>>>>>>
                                                                //****************************************

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
                                                                }

                                                                console.log("mainMemberIdExists", mainMemberIdExists)//delete here>>>>>>
                                                                let method;
                                                                let actionURL;

                                                                if (mainMemberIdExists && sectionOne) {
                                                                    method = 'PUT';
                                                                    actionURL=`/member-claim/${id}`;
                                                                } else {
                                                                    method = 'POST';
                                                                    actionURL='/member-claim';
                                                                }
                                                                //****************************************
                                                                console.log("url", actionURL);
                                                                console.log("method", method);
                                                                console.log("data: ", payload);
                                                                //***************************************
                                                                if(method==='POST' && checkFieldClaimSections(payload) || method==='PUT'){
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
                                                                        const formCompleted= (data.section + data.nextState) === 5? true: false;
                                                                        initMainMember= 'true';
                                                                        //*************************************************
                                                                        //delete here>>>>>>
                                                                        console.log(data.message);
                                                                        // console.log("mainid", '11')
                                                                        console.log("main_id", id)
                                                                        console.log("sessionRes", responseSection);
                                                                        console.log("--> input", data);
                                                                        console.log("response nextState", data.nextState)
                                                                        console.log("mainMemberId initMainMember being checked2", initMainMember)

                                                                        if(data.permission===false){
                                                                            alert("Permission denied! Please register as a member first in member capture form.");
                                                                            location.reload();
                                                                        }
                                                                        else{
                                                                            location.reload();
                                                                            if(formCompleted ){
                                                                                window.location.href = '/dashboard';
                                                                            }

                                                                            currentTab += n;
                                                                            if (currentTab < sections.length) {//prevent showing an empty section
                                                                                showTab(currentTab);
                                                                            }
                                                                        }

                                                                    } else {
                                                                        throw new Error('Request error: ' + response.status);
                                                                    }
                                                                }
                                                            }
                                                        }


                                                        showTab(currentTab);
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

            </div> <!-- end content -->
@endsection
