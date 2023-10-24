@extends('Admin.layout')
@section('admin.content')
          <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">

                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Claim Capture</h4>

                                        <!-- Nav tabs -->
                                        <ul class="nav nav-pills nav-justified" role="tablist">
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#settings-1" role="tab">
                                                    <span class="d-none d-md-block">Claim Logged</span><span class="d-block d-md-none"><i class="mdi mdi-home-variant h5"></i></span>
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile-1" role="tab">
                                                    <span class="d-none d-md-block">Claim Details</span><span class="d-block d-md-none"><i class="mdi mdi-account h5"></i></span>
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link" data-bs-toggle="tab" href="#messages-1" role="tab">
                                                    <span class="d-none d-md-block">Claimant Details</span><span class="d-block d-md-none"><i class="mdi mdi-email h5"></i></span>
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link" data-bs-toggle="tab" href="#settings-1" role="tab">
                                                    <span class="d-none d-md-block">Deceased Details</span><span class="d-block d-md-none"><i class="mdi mdi-cog h5"></i></span>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home-1" role="tabpanel">

                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtFirstNameShipping" class="col-lg-3 col-form-label">Date From</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtFirstNameShipping" name="date_from" type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtLastNameShipping" class="col-lg-3 col-form-label">Date to</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtLastNameShipping" name="date_to" type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCompanyShipping" class="col-lg-3 col-form-label">status</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCompanyShipping" name="age_from" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Age To</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtEmailAddressShipping" name="age_to" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityShipping" class="col-lg-3 col-form-label">Premium</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityShipping" name="premium" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtStateProvinceShipping" class="col-lg-3 col-form-label">Cover</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtStateProvinceShipping" name="cover" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </fieldset>
                                            </div>



                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>



                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->



            </div>
            <!-- end main content-->

@endsection
