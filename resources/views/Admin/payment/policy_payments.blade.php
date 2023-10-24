@extends('Admin.layout')
@section('admin.content')
        <!-- Start right Content here -->
            <!-- ============================================================== -->

            <?php
                    // $polpayments=DB::table('member_payment')
                    //         ->get();
            ?>
            <div class="content-page">

                <div class="content">
                    <div class="container-fluid">

                        <div class="row" style="border: 1px solid red">
                            <div class="col-12">
                                <div class="card" style="padding:1em; border: 1px solid rgb(3, 102, 13)">
                                    <div class="card-body lead" style="font-size:0.8em; border: 1px solid rgb(0, 13, 255)">
                                        <div>
                                        </div>
                                        <h4 class="card-title text-dark">Member Payments</h4>

                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <thead>
                                            <tr>
                                                <th>Policy Number</th>
                                                <th>ID Number</th>
                                                <th>Member</th>
                                                <th>EasyPay Number</th>
                                                <th>Cover Date</th>
                                                <th>Policy Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                                {{-- @foreach($polpayments as $polpayment) --}}
                                            <tr>
                                                <td>{$polpayment->policy_number}</td>
                                                <td>{$polpayment->id_number}</td>
                                                <td>{$polpayment->member}</td>
                                                <td>{$polpayment->easypay_number}</td>
                                                <td>{$polpayment->cover_date}</td>
                                                <td>{$polpayment->policy_status}</td>
                                                <td style="display:flex; flex-direction:row; justify-content:center; ">
                                                <button type="button" class="btn btn-sm btn-success" style="width: 80%; font-size: 0.8em">Make Payments</button>
                                                </td>
                                            </tr>
                                            {{-- @endforeach --}}

                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="card-body lead" style="font-size:0.8em;">
                                        <div>
                                        </div>
                                        <h4 class="card-title">Other</h4>

                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <thead>
                                            <tr>
                                                <th>Policy NO</th>
                                                <th>ID  NO</th>
                                                <th>Member</th>
                                                <th>EasyPay No</th>
                                                <th>Cover Date</th>
                                                <th>Policy Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>

                                            {{-- @foreach($otherpayments as $otherpaymen) --}}
                                            <tr>
                                                <td>{$otherpaymen->policy_number}</td>
                                                <td>{$otherpaymen->id_number}</td>
                                                <td>{$otherpaymen->member}</td>
                                                <td>{$otherpaymen->easypay_no}</td>
                                                <td>{$otherpaymen->cover_date}</td>
                                                <td>{$otherpaymen->policy_status}</td>

                                                <td>
                                                <button type="button" class="btn btn-success btn-sm">Make Payments</button>
                                                </td>
                                            </tr>
                                            {{-- @endforeach --}}

                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="card-body lead" style="font-size:0.8em;">
                                        <div>
                                        </div>
                                        <h4 class="card-title">Members</h4>

                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <thead>
                                            <tr>
                                                <th>Scheme</th>
                                                <th>Book</th>
                                                <th>ID NO</th>
                                                <th>Policy Number</th>
                                                <th>EasyPay NO</th>
                                                <th>Full Name</th>
                                                <th>Cover Date</th>
                                                <th>Policy Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>

                                            {{-- @foreach( $mempays as $mempay) --}}


                                            <tr>

                                                <td>{$mempay->scheme}</td>
                                                <td>{$mempay->book}</td>
                                                <td>{$mempay->id_number}</td>
                                                <td>{$mempay->policy_number}</td>
                                                <td>{$mempay->easypay_number}</td>
                                                <td>{$mempay->full_name}</td>
                                                <td>{$mempay->cover_date}</td>
                                                <td>Active</td>
                                                <td>
                                                <button type="button" class="btn btn-success  btn-sm">Make Payments</button>
                                                </td>
                                            </tr>
                                            {{-- @endforeach --}}
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="card-body lead" style="font-size:0.8em;">
                                        <div>
                                        </div>
                                        <h4 class="card-title">Group List</h4>

                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <thead>

                                            <tr>
                                                <th>Group name</th>
                                                <th>Modified user</th>
                                                <th>Modified Date</th>





                                                <th>Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>

                                            {{-- @foreach($gpayments as $gpayment) --}}
                                            <tr>
                                                <td>{$gpayment->group_name}</td>
                                                <td>{$gpayment->modified_user}</td>
                                                <td>{$gpayment->modified_date}</td>
                                                <td>
                                                <button type="button" class="btn btn-success btn-sm">Make Payments</button>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="card-body lead" style="font-size:0.8em;">
                                        <div>
                                        </div>
                                        <h4 class="card-title">Debit Order Batches</h4>

                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <thead>
                                            <tr>
                                                <th>Debit Batch</th>
                                                <th>Action Date</th>
                                                <th>Service Type</th>
                                                <th>Batch Name</th>
                                                <th>Volume</th>
                                                <th>Amount</th>
                                                <th>UnPaid Value</th>
                                                <th>UnPaid Volumes</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>

                                            {{-- @foreach($debitorders as  $debitorder) --}}
                                            <tr>
                                                <td>{$debitorder->debit_batch}</td>
                                                <td>{$debitorder->action_date}</td>
                                                <td>{$debitorder->service_type}</td>
                                                <td>{$debitorder->batch_name}</td>
                                                <td>{$debitorder->volume}</td>
                                                <td>{$debitorder->amount}</td>
                                                <td>{$debitorder->unpaid_value}</td>
                                                <td>{$debitorder->unpaid_volumes}</td>
                                                <td>Active</td>
                                                <td>
                                                <button type="button" class="btn btn-secondary btn-sm">Download</button>
                                                <button type="button" class="btn btn-primary btn-sm">View</button>
                                                <button type="button" class="btn btn-success btn-sm">Authorize</button>
                                                </td>

                                            </tr>
                                            {{-- @endforeach --}}

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

            </div>
            <!-- end main content-->



@endsection
