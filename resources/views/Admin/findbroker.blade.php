@extends('Admin.layout')
@section('admin.content')


 <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <?php
                
                $userbrokers=DB::table('users')
                            
                            ->get();

                            $role=Session::get('role');
                            
                            $username=Session::get('username');
                            
            ?>

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid" style="padding: 1em; display: flex; flex-direction:column; justify-content:center; align-items:center; gap:1em">
                        <div class="row card-tags">
                            <div class="card-items">
                                <div class="card tilebox-one"style="background-color:#CD5C5C">
                                    <div class="card-body py-1">
                                        <h5 style="color:black">Member-capture</h3>
                                        <h6 style="margin-bottom: 0.5em; color:black">Completed</h3>
                                        {{-- <h4>{{ $count_success }}/{{ $count_total }}</h4> --}}
                                    </div>
                                    <div class="card-footer d-flex" style="background-color: rgba(219, 219, 219,);">
                                        <a href={{url('/dashboard')}} style="text-decoration: none; color:rgb(0, 0, 0)">View Details</a>
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
                                    <div class="card-footer d-flex" style="background-color: rgba(219, 219, 219,);">
                                        <a href={{url('/tables-member-capture-in-progress')}} style="text-decoration: none; color:rgb(0, 0, 0)">View Details</a>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="card-items">
                                <div class="card tilebox-one"style="background-color:#CD5C5C">
                                    <div class="card-body py-1">
                                        <h5 style="color:black">Claims</h3>
                                        <h6 style="margin-bottom: 0.5em; color:black">Completed</h3>
                                        {{-- <h4>{{ $count_success }}/{{ $count_total }}</h4> --}}
                                    </div>
                                    <div class="card-footer d-flex" style="background-color: rgba(219, 219, 219,);">
                                        <a href={{url('/tables-claims-completed')}} style="text-decoration: none; color:rgb(0, 0, 0)">View Details</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-items">
                                <div class="card tilebox-one"style="background-color:#CD5C5C">
                                    <div class="card-body py-1">
                                        <h5 style="color:black">Claims</h3>
                                        <h6 style="margin-bottom: 0.5em; color:black">In-Progress</h3>
                                        {{-- <h4>{{ $count_success }}/{{ $count_total }}</h4> --}}
                                    </div>
                                    <div class="card-footer d-flex" style="background-color: rgba(219, 219, 219,);">
                                        <a href={{url('/tables-claims-in-progress')}} style="text-decoration: none; color:rgb(0, 0, 0)">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- end row -->
                        <div class="table-responsive card" style="width: 100%; border-radius: 0.3em;margin-top:-3.0em">
                            <div class="" style="background: rgb(8, 21, 70); width: 100%; min-height:10%; padding:1em 2em; ">
                                <h4 style=" color: white">Brokers</h4>
                            </div>
                        @if($role=='2')
                            <div class="" style="padding:1em 2em; min-height:90%; background:white; margin-top:0.5em">
                                <table id="member_capture_completeProgressTable" class="table table-striped " style="width:100%; background:rgba(219, 219, 219, 0.877);">
                                    <thead style="background-color:#081546 ! important">
                                        <tr>
                                            <th style="color:#fff ! important">No#</th>
                                            <th style="color:#fff ! important">Name</th>
                                            <th style="color:#fff ! important">Email</th> 
                                            <th style="color:#fff ! important">Role</th>                                           
                                            <th style="color:#fff ! important">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($userbrokers as $index => $memberCapture_CompletedForm_MainMember)
                                            
                                            <tr style="background-color:#ffffff;line-height: -18% ! important;">
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $memberCapture_CompletedForm_MainMember->name }}</td>
                                                <td>{{ $memberCapture_CompletedForm_MainMember->email }}</td>
                                                <td>
                                                    @if($memberCapture_CompletedForm_MainMember->role=='1')
                                                        Admin
                                                    @elseif($memberCapture_CompletedForm_MainMember->role=='0')
                                                         Broker
                                                    @elseif($memberCapture_CompletedForm_MainMember->role=='2')
                                                        SuperAdmin                                                    
                                                    @endif
                                                </td>
                                                <td>
                                                <form action="{{ url('/delete-broker/' . $memberCapture_CompletedForm_MainMember->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this broker?')">
                                                    @csrf
                                                    @method('DELETE')
                                                
                                                    <!-- <a href="{{('/broker-clients/'. $memberCapture_CompletedForm_MainMember->id)}}" class="btn btn-sm show-confirm btn-sm edit" title="Edit" style="margin-bottom: 0.5em;background-color:rgb(8, 21, 70);">
                                                     <i class="fa fa-eye"style="color:#ffffff"></i>
                                                    </a>                                                       -->
                                                    <!-- <a type="button" class="btn btn-sm  show-confirm action"onclick="deleteMemberForm('member-capture '+{{ $memberCapture_CompletedForm_MainMember->id }})" 
                                                        style="margin-bottom: 0.5em;background-color:rgb(8, 21, 70);">
                                                        <i class=""style="color:#ffffff">Delete</i>
                                                    </a> -->
                                                    <button type="submit" class="btn btn-sm show-confirm action Actionpreload" title="Delete">
                                                    <i class="fa fa-trash fa-lg"></i>
                                                    </button>
                                                </form>
                                                                                                   
                                                </td>
                                            </tr>
                                           
                                        @endforeach
                                    </tbody>
                                    
                                </table>
                            </div>
                        

                        @elseif($role=='1')
                            <div class="" style="padding:1em 2em; min-height:90%; background:white; margin-top:0.5em">
                                <table id="member_capture_completeProgressTable" class="table table-striped " style="width:100%; background:rgba(219, 219, 219, 0.877);">
                                    <thead>
                                        <tr>
                                            <th>No#</th>
                                            <th>Name</th>
                                            <th>Email</th> 
                                            <th>Role</th>                                           
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($userbrokers as $index => $memberCapture_CompletedForm_MainMember)
                                            
                                                <tr style="background-color:#ffffff">
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $memberCapture_CompletedForm_MainMember->name }}</td>
                                                    <td>{{ $memberCapture_CompletedForm_MainMember->email }}</td>
                                                    <td>
                                                        @if($memberCapture_CompletedForm_MainMember->role=='1')
                                                            Admin

                                                        @elseif($memberCapture_CompletedForm_MainMember->role=='0')
                                                            Broker
                                                        @elseif($memberCapture_CompletedForm_MainMember->role=='2')
                                                            SuperAdmin
                                                        @endif
                                                    </td>
                                                    <td>
                                                <form action="{{ url('/delete-broker/' . $memberCapture_CompletedForm_MainMember->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this broker?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    
                                                    <!-- <a href="/dashboard/{{ $memberCapture_CompletedForm_MainMember->id }}/edit" class="btn btn-outline-info btn-sm edit" title="Edit" style="margin-bottom: 0.5em;background-color:rgb(8, 21, 70);">
                                                            <i class="fas fa-pencil-alt"style="color:#ffffff"></i>
                                                        </a> -->
                                                        
                                                        <!-- <a type="button" class="btn btn-sm  show-confirm action"onclick="deleteMemberForm('member-capture '+{{ $memberCapture_CompletedForm_MainMember->id }})" 
                                                        style="margin-bottom: 0.5em;background-color:rgb(8, 21, 70);">
                                                            <i class=""style="color:#ffffff">Delete</i>
                                                        </a> -->
                                                        <button type="submit" class="btn btn-sm show-confirm action Actionpreload" title="Delete">
                                                            <i class="fa fa-trash fa-lg"></i>
                                                        </button>
                                                </form>
                                                     
                                                    </td>
                                                </tr>
                                           
                                        @endforeach
                                    </tbody>
                                    
                                </table>
                            </div>
                        
                        @elseif($role=='0')
                            <div class="" style="padding:1em 2em; min-height:90%; background:white; margin-top:0.5em">
                                <table id="member_capture_completeProgressTable" class="table table-striped " style="width:100%; background:rgba(219, 219, 219, 0.877);">
                                    <thead>
                                        <tr>
                                            <th>No#</th>
                                            <th>Name</th>
                                            <th>Email</th> 
                                            <th>Role</th>                                           
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($userbrokers as $index => $memberCapture_CompletedForm_MainMember)
                                            
                                                <tr style="background-color:#ffffff">
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $memberCapture_CompletedForm_MainMember->name }}</td>
                                                    <td>{{ $memberCapture_CompletedForm_MainMember->email }}</td>
                                                    <td>
                                                        @if($memberCapture_CompletedForm_MainMember->role=='1')
                                                            Admin

                                                        @elseif($memberCapture_CompletedForm_MainMember->role=='0')
                                                            Broker
                                                        @elseif($memberCapture_CompletedForm_MainMember->role=='2')
                                                            SuperAdmin
                                                        @endif
                                                    </td>
                                                    
                                                </tr>
                                           
                                        @endforeach
                                    </tbody>
                                    
                                </table>
                            </div>
                        
                        @endif

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
                        console.log("userbrokers", <?php echo json_encode($userbrokers); ?>)
                        
                        
                        

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



               

            
        

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


@endsection

