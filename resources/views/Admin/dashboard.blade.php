@extends('Admin.layout')
@section('admin.content')
 <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <?php
                
                $role=Session::get('role');
                // dd($role);

                $Completed_App=DB::table('completed_form')
                            ->where('form','=','member-capture')
                            ->count();
                            // dd($Completed_App)
                            
                            $totalForms = 1;
                            if ($totalForms > 0) {
                                // Calculate the progress percentage
                                $progress = ($Completed_App / $totalForms) * 10000;
                            }

                $In_Progress_App=DB::table('in_progress')
                            ->where('form','=','member-capture')
                            ->count();
                            // dd($Completed_App)
                            
                            $totalForms = 1;
                            if ($totalForms > 0) {
                                // Calculate the progress percentage
                                $progress = ($In_Progress_App / $totalForms) * 10000;
                            }
                            
            ?>
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid" style="padding: 1em; display: flex; flex-direction:column; justify-content:center; align-items:center; gap:1em">
                        <div class="row card-tags">
                            <div class="card-items">
                                <div class="card tilebox-one" style="background-color:#CD5C5C" >
                                    <div class="card-body py-1">
                                        <h5 style="color:black">Member-capture</h3>
                                        <h6 style="margin-bottom: 0.5em; color:black">Completed</h3>
                                        <!-- {{-- <h4>{{ $count_success }}/{{ $count_total }}</h4> --}} -->
                                    </div>
                                    <div class="card-footer d-flex" style="background-color: rgba(219, 219, 219,);margin-top:-1.5%">
                                        <a class="Actionpreload" href={{url('/tables-member-capture-completed')}} style="text-decoration: none; color:rgb(0, 0, 0)">View Completed</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-items">
                                <div class="card tilebox-one" style="background-color:#CD5C5C">
                                    <div class="card-body py-1">
                                        <h5 style="color:black">Member-capture</h3>
                                        <h6 style="margin-bottom: 0.5em; color:black">In-Progress</h3>
                                        {{-- <h4>{{ $count_success }}/{{ $count_total }}</h4> --}}
                                    </div>
                                    <div class="card-footer d-flex" style="background-color: rgba(219, 219, 219,);margin-top:-1.5%">
                                        <a class="Actionpreload" href={{url('/tables-member-capture-in-progress')}} style="text-decoration: none; color:black">View In-Progress</a>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="card-items">
                                <div class="card tilebox-one" style="background-color:#CD5C5C">
                                    <div class="card-body py-1">
                                        <h5 style="color:black">Claims</h3>
                                        <h6 style="margin-bottom: 0.5em; color:black">Completed</h3>
                                        {{-- <h4>{{ $count_success }}/{{ $count_total }}</h4> --}}
                                    </div>
                                    <div class="card-footer d-flex" style="background-color: rgba(219, 219, 219,);margin-top:-1.5%">
                                        <a class="Actionpreload" href={{url('/tables-claims-completed')}} style="text-decoration: none; color:black">View Completed</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-items">
                                <div class="card tilebox-one" style="background-color:#CD5C5C">
                                    <div class="card-body py-1">
                                        <h5 style="color:black">Claims</h3>
                                        <h6 style="margin-bottom: 0.5em; color:black">In-Progress</h3>
                                        
                                        {{-- <h4>{{ $count_success }}/{{ $count_total }}</h4> --}}
                                    </div>
                                    <div class="card-footer d-flex" style="background-color: rgba(219, 219, 219,);margin-top:-1.5%">
                                        <a class="Actionpreload" href={{url('/tables-claims-in-progress')}} style="text-decoration: none; color:black">View In-Progress</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- end row -->
                        <div class="table-responsive card" style="width: 100%; border-radius: 0.3em;margin-top:-4.0em ">
                            
                            <!-- problem here -->
                        <div class="row">
                            <div class="col-lg-6 col-xl-6">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Saless Statistics</h4>

                                    <!-- <div class="text-center">
                                        <ul class="list-inline chart-detail-list mb-0">
                                            <li class="list-inline-item">
                                                <h6 class="text-info"><i class="mdi mdi-circle-outline mr-1"></i>Series Aaaa</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 class="text-success"><i class="mdi mdi-triangle-outline mr-1"></i>Series B</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 class="text-muted"><i class="mdi mdi-square-outline mr-1"></i>Series C</h6>
                                            </li>
                                        </ul>
                                    </div> -->
                                        <div id="chart_div" class="charts"></div>
                                    <!-- <div id="morris-bar-stacked" class="morris-chart" style="height: 320px;"></div> -->
                                </div>
                            </div><!-- end col-->
                            <style>
                                .chart{
                                    margin-left:-19px ;
                                    width: auto;
                                    height: 304px;
                                }
                                .charts{
                                    margin-left:-59px ;
                                    width: auto;
                                    height: 314px;
                                }
                            </style>
                            <div class="col-lg-6 col-xl-6">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Service Completed</h4>

                                    <div class="text-center mb-3">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-sm btn-secondary">Today</button>
                                            <button type="button" class="btn btn-sm btn-secondary">This Week</button>
                                            <button type="button" class="btn btn-sm btn-secondary">Last Week</button>
                                        </div>
                                    </div>

                                    <!-- <div id="morris-donut-example" class="morris-chart" style="height: 268px;"></div> -->
                                    <div id="piechart_3d" class="chart"></div>

                                    <!-- <div class="text-center">
                                        <ul class="list-inline chart-detail-list mb-0 mt-2">
                                            <li class="list-inline-item">
                                                <h6 style="color:#109618"><i class="mdi mdi-circle-outline mr-1"></i>Completed Members</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 style="color:#990099"><i class="mdi mdi-triangle-outline mr-1"></i>Completed Claims</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 style="color:#DC3912"><i class="mdi mdi-square-outline mr-1"></i>Completed Funerals</h6>
                                            </li>
                                        </ul>
                                    </div> -->

                                </div>
                            </div><!-- end col-->
                        </div>
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-box py-4">
                                            <h4 class="header-title mb-3">Member Applications</h4>

                                            <p class="font-weight-semibold mb-3">In-progress <span class="text-danger float-right"><b id="Inprogress">{{ $In_Progress_App }}</b></span></p>
                                            <div class="progress" style="height: 10px;">
                                                <div id="InprogressBar" class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 0%;color:black;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="card-box py-4">
                                            <h4 class="header-title mb-3">Claim applications</h4>

                                            <p class="font-weight-semibold mb-2">In-progress <span class="text-success float-right"><b>25%</b></span></p>
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="card-box py-4">
                                            <h4 class="header-title mb-3">Funeral Services</h4>

                                            <p class="font-weight-semibold mb-2">In-progress <span class="text-warning float-right"><b>75%</b></span></p>
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar progress-bar-striped bg-danger " role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card-box py-4">
                                            <h4 class="header-title mb-3">Member Applications</h4>

                                            <p class="font-weight-semibold mb-3">Completed <span class="text-success float-right"><b id="completedApp">{{ $Completed_App }}</b></span></p>

                                                <div class="progress" style="height: 10px;">
                                                <div id="progressBar" class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 0%;color:black" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <script>
                                            // Function to update the progress bar
                                            function updateProgressBars(Inprogress, totalForms) {
                                                const progress = (Inprogress / totalForms) * 10000;
                                                $('#InprogressBar').css('width', progress + '%');
                                                $('#InprogressBar').attr('aria-valuenow', progress);
                                            }
                                        </script>
                                        <script>
                                            $(document).ready(function() {
                                                // Get the initial value of $Completed_App
                                                const initialCompletedApp = {{ $In_Progress_App }};
                                                const totalForms = 10000; // Replace with the actual total number of forms
                                                
                                                // Update the progress bar with the initial value
                                                updateProgressBars(initialCompletedApp, totalForms);
                                                
                                                // Simulate an update to $Completed_App (You should replace this with your actual code)
                                                setTimeout(function() {
                                                    const updatedCompletedApp = initialCompletedApp ; // Simulating an increase of 10
                                                    updateProgressBars(updatedCompletedApp, totalForms);
                                                    $('#InprogressBar').text(updatedCompletedApp);
                                                }, 200); // Simulating an update after 2 seconds
                                            });
                                        </script>
                                        <script>
                                            // Function to update the progress bar
                                            function updateProgressBar(completedApp, totalForms) {
                                                const progress = (completedApp / totalForms) * 10000;
                                                $('#progressBar').css('width', progress + '%');
                                                $('#progressBar').attr('aria-valuenow', progress);
                                            }
                                        </script>
                                        <script>
                                            $(document).ready(function() {
                                                // Get the initial value of $Completed_App
                                                const initialCompletedApp = {{ $Completed_App }};
                                                const totalForms = 10000; // Replace with the actual total number of forms
                                                
                                                // Update the progress bar with the initial value
                                                updateProgressBar(initialCompletedApp, totalForms);
                                                
                                                // Simulate an update to $Completed_App (You should replace this with your actual code)
                                                setTimeout(function() {
                                                    const updatedCompletedApp = initialCompletedApp ; // Simulating an increase of 10
                                                    updateProgressBar(updatedCompletedApp, totalForms);
                                                    $('#completedApp').text(updatedCompletedApp);
                                                }, 200); // Simulating an update after 2 seconds
                                            });
                                        </script>
                                        



                                        <div class="card-box py-4">
                                            <h4 class="header-title mb-3">Claim applications</h4>

                                            <p class="font-weight-semibold mb-2">Completed <span class="text-success float-right"><b>25%</b></span></p>
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="card-box py-4">
                                            <h4 class="header-title mb-3">Funeral Services</h4>

                                            <p class="font-weight-semibold mb-2">Completed <span class="text-warning float-right"><b>75%</b></span></p>
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- end col-->

                            <div class="col-xl-5">
                                <div class="card-box">

                                    <h4 class="header-title mb-3">Funeral Services</h4>

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Place</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="text-muted">Thohoyando</th>
                                                    <td>20/02/2014</td>
                                                    <td>19/02/2020</td>
                                                    <td><span class="badge badge-success">Paid</span></td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">Giyani</th>
                                                    <td>20/02/2014</td>
                                                    <td>19/02/2020</td>
                                                    <td><span class="badge badge-danger">Unpaid</span></td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">Tembisa</th>
                                                    <td>20/02/2014</td>
                                                    <td>19/02/2020</td>
                                                    <td><span class="badge badge-success">Paid</span></td>
                                                </tr>
                                            <tr>
                                                    <th class="text-muted">Orlando east</th>
                                                    <td>20/02/2014</td>
                                                    <td>19/02/2020</td>
                                                    <td><span class="badge badge-success">Paid</span></td>
                                                </tr>
                                            <tr>
                                                    <th class="text-muted">Chiawelo</th>
                                                    <td>20/02/2014</td>
                                                    <td>19/02/2020</td>
                                                    <td><span class="badge badge-danger">Unpaid</span></td>
                                                </tr>
                                            <tr>
                                                    <th class="text-muted">Tzaneen</th>
                                                    <td>20/02/2014</td>
                                                    <td>19/02/2020</td>
                                                    <td><span class="badge badge-success">Paid</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end col-->

                        </div>
                        <!-- end row -->

                        
                    </div>
                    <!-- end container-fluid -->

                    <!-- DataTables CSS -->
                    <script>
                        console.log("memberCapture_CompletedForm_MainMembers", <?php echo json_encode($memberCapture_CompletedForm_MainMembers); ?>)
                        console.log("memberCapture_InProgressForm_MainMembers", <?php echo json_encode($memberCapture_InProgressForm_MainMembers); ?>)
                        console.log("claims_CompletedForm_MainMembers", <?php echo json_encode($claims_CompletedForm_MainMembers); ?>)
                        console.log("claims_InProgressForm_MainMembers", <?php echo json_encode($claims_InProgressForm_MainMembers); ?>)

                        function deleteMemberForm(form_Id) {
                            fetch('/dashboard/' + form_Id, {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify({
                                                        section: 3,
                                                        _method: 'DELETE'
                                                    })
                            })
                            .then(async function (response) {  // Add the 'async' keyword here
                                if (response.ok) {
                                    // Success! Refresh the page or update the UI as needed
                                    const data = await response.json();
                                    console.log("form_Id result", data);
                                    // location.reload();
                                } else {
                                    // Error handling
                                    console.log('Delete request failed with status:', response.status);
                                }
                                })
                                .catch(function (error) {
                                console.log('Delete request error:', error);
                            });
                        }

                        function claimPageCompletedForm(memberId) {
                            fetch('/dashboard/claims/' + memberId, {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    'Content-Type': 'application/x-www-form-urlencoded'
                                }
                            })
                            .then(async function (response) {  // Add the 'async' keyword here
                                if (response.ok) {
                                    // Redirect or handle successful response
                                    window.location.href = '/member-claim';
                                } else {
                                    throw new Error('Request error: ' + response.status);
                                }
                            })
                            .catch(error => {
                                console.log('Delete request error:', error);
                            });
                        }

                    </script>

                </div> <!-- end content -->
                 <!-- Footer Start -->
                
                

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


@endsection
