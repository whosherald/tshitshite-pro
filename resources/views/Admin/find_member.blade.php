@extends('Admin.layout')
@section('admin.content')


 <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <?php
                $memberCapture_CompletedForm_MainMembers=DB::table('main_member')
                            ->get();
                            
            ?>

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid" style="padding: 1em; display: flex; flex-direction:column; justify-content:center; align-items:center; gap:1em">
                        <div class="row card-tags">
                            <div class="card-items">
                                <div class="card tilebox-one"style="background-color:#CD5C5C">
                                    <div class="card-body py-4">
                                        <h5 style="color:black">Member-capture</h3>
                                        <h6 style="margin-bottom: 0.5em; color:black">Completed</h3>
                                        {{-- <h4>{{ $count_success }}/{{ $count_total }}</h4> --}}
                                    </div>
                                    <div class="card-footer d-flex" style="background-color: rgba(219, 219, 219, 0.877);">
                                        <a href={{url('/dashboard')}} style="text-decoration: none; color:rgb(0, 0, 0)">View Details</a>
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
                                        <a href={{url('/tables-member-capture-in-progress')}} style="text-decoration: none; color:rgb(0, 0, 0)">View Details</a>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="card-items">
                                <div class="card tilebox-one"style="background-color:#CD5C5C">
                                    <div class="card-body py-4">
                                        <h5 style="color:black">Claims</h3>
                                        <h6 style="margin-bottom: 0.5em; color:black">Completed</h3>
                                        {{-- <h4>{{ $count_success }}/{{ $count_total }}</h4> --}}
                                    </div>
                                    <div class="card-footer d-flex" style="background-color: rgba(219, 219, 219, 0.877);">
                                        <a href={{url('/tables-claims-completed')}} style="text-decoration: none; color:rgb(0, 0, 0)">View Details</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-items">
                                <div class="card tilebox-one"style="background-color:#CD5C5C">
                                    <div class="card-body py-4">
                                        <h5 style="color:black">Claims</h3>
                                        <h6 style="margin-bottom: 0.5em; color:black">In-Progress</h3>
                                        {{-- <h4>{{ $count_success }}/{{ $count_total }}</h4> --}}
                                    </div>
                                    <div class="card-footer d-flex" style="background-color: rgba(219, 219, 219, 0.877);">
                                        <a href={{url('/tables-claims-in-progress')}} style="text-decoration: none; color:rgb(0, 0, 0)">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- end row -->
                        <div class="table-responsive card" style="width: 100%; border-radius: 0.3em;margin-top:-4.0em">
                            <div class="" style="background: rgb(8, 21, 70); width: 100%; min-height:10%; padding:1em 2em; ">
                                <h4 style=" color: white">main members </h4>
                            </div>

                            <div class="" style="padding:1em 2em; min-height:90%; background:white; margin-top:0.5em">
                                <table id="member_capture_completeProgressTable" class="table table-striped " style="width:100%; background:rgba(219, 219, 219, 0.877);">
                                    <thead>
                                        <tr>
                                            <th>No#</th>
                                            <th>Name</th>
                                            <th>Surname</th>
                                            <th>ID Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($memberCapture_CompletedForm_MainMembers as $index => $mainMember)
                                        <tr style="background-color:#ffffff">
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $mainMember->fullname }}</td>
                                            <td>{{ $mainMember->surname }}</td>
                                            <td>{{ $mainMember->id_number }}</td>
                                            <td>
                                                <a href="/dashboard/{{ $mainMember->mm_id }}/edit" class="btn btn-outline-info btn-sm edit" title="Edit" style="margin-bottom: 0.5em;background-color:rgb(8, 21, 70);">
                                                    <i class="fas fa-pencil-alt"style="color:#ffffff"></i>
                                                </a>
                                                {{-- @if($claims_CompletedForm_MainMembers->contains('mm_id', $mainMember->mm_id) || $claims_InProgressForm_MainMembers->contains('mm_id', $mainMember->mm_id)) --}}
                                                <button type="button" class="btn btn-sm btn-success show-confirm action" onclick="claimPageCompletedForm({{ $mainMember->mm_id }})" style="margin-bottom: 0.5em;background-color:rgb(8, 21, 70);">
                                                    Claims
                                                </button>
                                                {{-- @endif --}}
                                                <button type="button" class="btn btn-sm  show-confirm action" onclick="deleteMemberForm('member-capture '+{{ $mainMember->mm_id }})" style="margin-bottom: 0.5em;background-color:rgb(8, 21, 70);">
                                                    <i class="fa fa-remove fa-lg" style="color:#CD5C5C"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    
                                </table>
                            </div>


                        </div>
                    </div>
                    <style >
                        .paginate_button page-item{
                           background-color: rgb(8, 21, 70);
                        }
                    </style>
                    <!-- end container-fluid -->

                    <!-- DataTables CSS -->
                    <script>
                        console.log("memberCapture_CompletedForm_MainMembers", <?php echo json_encode($memberCapture_CompletedForm_MainMembers); ?>)
                        
                        
                        

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
                <footer class="footer" style="background: rgba(173, 173, 173, 0.664); color: white">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Tshitshithe.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Tendani ICT
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


@endsection
