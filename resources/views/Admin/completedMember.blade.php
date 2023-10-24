@extends('Admin.layout')
@section('admin.content')
 <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <?php
                
                $role=Session::get('role');
                // dd($role);
            
            ?>
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid" style="padding: 1em; display: flex; flex-direction:column; justify-content:center; align-items:center; gap:1em">
                        <div class="row card-tags">
                            <div class="card-items">
                                <div class="card tilebox-one" style="background-color:#CD5C5C" >
                                    <div class="card-body py-4">
                                        <h5 style="color:black">Member-capture</h3>
                                        <h6 style="margin-bottom: 0.5em; color:black">Completed</h3>
                                        {{-- <h4>{{ $count_success }}/{{ $count_total }}</h4> --}}
                                    </div>
                                    <div class="card-footer d-flex" style="background-color: rgba(219, 219, 219, 0.877);">
                                        <a class="Actionpreload" href={{url('/completed-member7')}} style="text-decoration: none; color:rgb(0, 0, 0)">View Details</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-items">
                                <div class="card tilebox-one" style="background-color:#CD5C5C">
                                    <div class="card-body py-4">
                                        <h5 style="color:black">Member-capture</h3>
                                        <h6 style="margin-bottom: 0.5em; color:black">In-Progress</h3>
                                        {{-- <h4>{{ $count_success }}/{{ $count_total }}</h4> --}}
                                    </div>
                                    <div class="card-footer d-flex" style="background-color: rgba(219, 219, 219, 0.877);">
                                        <a class="Actionpreload" href={{url('/tables-member-capture-in-progress')}} style="text-decoration: none; color:black">View Details</a>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="card-items">
                                <div class="card tilebox-one" style="background-color:#CD5C5C">
                                    <div class="card-body py-4">
                                        <h5 style="color:black">Claims</h3>
                                        <h6 style="margin-bottom: 0.5em; color:black">Completed</h3>
                                        {{-- <h4>{{ $count_success }}/{{ $count_total }}</h4> --}}
                                    </div>
                                    <div class="card-footer d-flex" style="background-color: rgba(219, 219, 219, 0.877);">
                                        <a class="Actionpreload" href={{url('/tables-claims-completed')}} style="text-decoration: none; color:black">View Details</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-items">
                                <div class="card tilebox-one" style="background-color:#CD5C5C">
                                    <div class="card-body py-4">
                                        <h5 style="color:black">Claims</h3>
                                        <h6 style="margin-bottom: 0.5em; color:black">In-Progress</h3>
                                        {{-- <h4>{{ $count_success }}/{{ $count_total }}</h4> --}}
                                    </div>
                                    <div class="card-footer d-flex" style="background-color: rgba(219, 219, 219, 0.877);">
                                        <a class="Actionpreload" href={{url('/tables-claims-in-progress')}} style="text-decoration: none; color:black">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- end row -->
                        <div class="table-responsive card" style="width: 100%; border-radius: 0.3em;margin-top:-4.0em ">
                            <div class="" style="background: #010e46; width: 100%; min-height:10%; padding:1em 2em; ">
                                <h4 style=" color: white">Member Capture Forms Completed</h4>
                            </div>
                            <!-- problem here -->

                        @if($role=='1' || $role=='2')

                            <div class="" style="padding:1em 2em; min-height:90%; background:white; margin-top:0.5em">
                                <table id="member_capture_completeProgressTable" class="table table-striped " style="width:100%; background:rgba(219, 219, 219, 0.877);">
                                    <thead style="background-color:#081546 ! important">
                                        <tr>
                                            <th style="color:#fff ! important">No#</th>
                                            <th style="color:#fff ! important">Name</th>
                                            <th style="color:#fff ! important">Surname</th>
                                            <th style="color:#fff ! important">ID Number</th>
                                            <th style="color:#fff ! important">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($memberCapture_CompletedForm_MainMembers as $index => $memberCapture_CompletedForm_MainMember)
                                        <tr style="background-color:#ffffff; line-height: -18% ! important;">
                                            <td >{{ $index + 1 }}</td>
                                            <td >{{ $memberCapture_CompletedForm_MainMember->fullname }}</td>
                                            <td >{{ $memberCapture_CompletedForm_MainMember->surname }}</td>
                                            <td >{{ $memberCapture_CompletedForm_MainMember->id_number }}</td>
                                            <td >
                                            <button onclick="window.location.href = '{{('/view-member/' . $memberCapture_CompletedForm_MainMember->mm_id )}}'" class="btn btn-sm show-confirm btn-sm edit" title="view" style="margin-bottom: 0.5em; rgba(0, 0, 0, 0.05);">
                                                <i class="fa fa-eye" style="color: rgb(8, 21, 70)"></i>
                                            </button>

                                                <!-- {{-- @if($claims_CompletedForm_MainMembers->contains('mm_id', $memberCapture_CompletedForm_MainMember->mm_id) || $claims_InProgressForm_MainMembers->contains('mm_id', $memberCapture_CompletedForm_MainMember->mm_id)) --}}
                                                <button type="button" class="btn btn-sm show-confirm action Actionpreload" onclick="claimPageCompletedForm({{ $memberCapture_CompletedForm_MainMember->mm_id }})" style="margin-bottom: 0.5em; background:#010e46; color:azure">
                                                    Claims
                                                </button>
                                                {{-- @endif --}} -->
                                            <button type="button" class="btn btn-sm show-confirm action Actionpreload" onclick="deleteMemberForm('member-capture '+{{ $memberCapture_CompletedForm_MainMember->mm_id }})" style="margin-bottom: 0.5em; background:none;">
                                                <i class="fa fa-trash fa-lg"></i>
                                            </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                   
                                </table>
                            </div>

                        @elseif($role=='0')
                            <div class="" style="padding:1em 2em; min-height:90%; background:white; margin-top:0.5em">
                                <table id="member_capture_completeProgressTable" class="table table-striped " style="width:100%; background:rgba(219, 219, 219, 0.877);">
                                    <thead style="background-color:#081546 ! important">
                                        <tr>
                                            <th style="color:#fff ! important">No#</th>
                                            <th style="color:#fff ! important">Name</th>
                                            <th style="color:#fff ! important">Surname</th>
                                            <th style="color:#fff ! important">ID Number</th>
                                            <th style="color:#fff ! important">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($memberCapture_CompletedForm_MainMembers as $index => $memberCapture_CompletedForm_MainMember)
                                        <tr style="background-color:#ffffff">
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $memberCapture_CompletedForm_MainMember->fullname }}</td>
                                            <td>{{ $memberCapture_CompletedForm_MainMember->surname }}</td>
                                            <td>{{ $memberCapture_CompletedForm_MainMember->id_number }}</td>
                                            <td>
                                            <a href="{{('/view-member/' . $memberCapture_CompletedForm_MainMember->mm_id )}}" class="btn btn-outline-info btn-sm edit" title="Edit" style="margin-bottom: 0.5em;background-color:rgb(8, 21, 70);">
                                                <i class="fa fa-eye"style="color:#ffffff"></i>
                                            </a>
                                                {{-- @if($claims_CompletedForm_MainMembers->contains('mm_id', $memberCapture_CompletedForm_MainMember->mm_id) || $claims_InProgressForm_MainMembers->contains('mm_id', $memberCapture_CompletedForm_MainMember->mm_id)) --}}
                                            <button type="button" class="btn btn-sm btn-success show-confirm action" onclick="claimPageCompletedForm({{ $memberCapture_CompletedForm_MainMember->mm_id }})" style="margin-bottom: 0.5em;background-color:rgb(8, 21, 70);">
                                                 Claims
                                            </button>
                                                {{-- @endif --}}
                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    
                                </table>
                            </div>
                        @endif
                        </div>
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
