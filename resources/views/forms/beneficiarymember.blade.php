<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>form member|Tshitshite & Bros|Funeral Undertaker</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Responsive Table css -->
        <link href="assets/libs/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />
        <link href="assets/libs/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            body{
                background: #e6e4e4;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
            }

            #beneficiary-update-form{
                /* border: 3px solid black; */
                background: white;
                height: auto;
                padding: 1em 2em;
                border-radius: 1em;
                box-shadow: 0px 0px 6px -2px rgba(0,0,0,0.47);
                -webkit-box-shadow: 0px 0px 6px -2px rgba(0,0,0,0.47);
                -moz-box-shadow: 0px 0px 6px -2px rgba(0,0,0,0.47);
                margin-bottom: 2em;
            }
        </style>
        {{-- <link href="public\assets\css\beneficiarymember.css" rel="stylesheet"/> --}}
    </head>

    <body style="overflow-x: hidden;">
        <!-- <div style="width:85%;">
            <a href="{{('/member-capture')}}" style="float: left;text-decoration: none; margin-bottom:1em; font-size: 1.5em ">BACK</a>
        </div> -->
        <form class="container p-4" id="beneficiary-update-form">
            {!! csrf_field() !!}
            <input type="hidden" name="section" value="section4">
            <h3 class="mb-2">Beneficiary Details</h3>
            <hr style="margin-bottom:2em">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                            <label for="tellphone" class="col-form-label" style="width: 30%;">Title:</label>
                            <select id="bd_title" name="bd_title" class="required form-control"style="width: 70%; margin-left: 10px;">
                                <option value="">{{ $data->bd_title }}</option>
                                <option value="Mr">Mr</option>
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
                            <select id="bd_relationship" name="bd_relationship" class="required form-control"style="width: 70%; margin-left: 10px;">
                                <option value="">{{ $data->bd_relationship }}</option>
                                <option value="Spouse">Spouse</option>
                                <option value="child">child</option>
                                <option value="father or mother">father or mother</option>
                                <option value="sibling">sibling</option>
                                <option value="Free extended">Free extended</option>

                            </select>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->

            <div class="row mb-3">
                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                            <label for="tellphone" class="col-form-label" style="width: 30%;">Full names:</label>
                            <input class="required form-control" id="bd_fullnames" name="bd_fullnames" type="text"style="width: 70%; margin-left: 10px;" placeholder={{ $data->bd_fullnames }}>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                            <label for="tellphone" class="col-form-label" style="width: 30%;">Surname:</label>
                            <input id="bd_surname" name="bd_surname" type="text" class="required form-control"style="width: 70%; margin-left: 10px;" placeholder={{ $data->bd_surname }}>

                        </div>
                    </div>
                </div>
            </div><!-- end row -->

            <div class="row mb-3">
                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                            <label for="tellphone" class="col-form-label" style="width: 30%;">ID No:</label>
                            <input class="required form-control" id="bd_id_number" name="bd_id_number" type="text"style="width: 70%; margin-left: 10px;" placeholder={{ $data->bd_id_number }}>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                            <label for="tellphone" class="col-form-label" style="width: 30%;">Date of Birth:</label>
                            <input id="bd_date_of_birth" name="bd_date_of_birth" type="date" class="required form-control"style="width: 70%; margin-left: 10px;" placeholder={{ $data->bd_date_of_birth }}>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->

            <div class="row mb-3">
                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                            <label for="tellphone" class="col-form-label" style="width: 30%;">Cellphone:</label>
                            <input class="required form-control" id="bd_cellphone" name="bd_cellphone" type="text"style="width: 70%; margin-left: 10px;" placeholder={{ $data->bd_cellphone }}>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                            <label for="tellphone" class="col-form-label" style="width: 30%;">Email Address:</label>
                            <input id="bd_email" name="bd_email" type="text" class="required form-control"style="width: 70%; margin-left: 10px;" placeholder={{ $data->bd_email }}>

                        </div>
                    </div>
                </div>
            </div><!-- end row -->

            <div class="row mb-3">
                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                            <label for="tellphone" class="col-form-label" style="width: 30%;">Initials:</label>
                            <input class="required form-control" id="bd_initials" name="bd_initials" type="text"style="width: 70%; margin-left: 10px;" placeholder={{ $data->bd_initials }}>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                            <label for="tellphone" class="col-form-label" style="width: 30%;">Gender:</label>
                            <select id="bd_gender" name="bd_gender" class="required form-control"style="width: 70%; margin-left: 10px;">
                                <option value="">{{ $data->bd_gender }}</option>
                                <option value="F">Female</option>
                                <option value="M">Male</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->

            <div class="row mb-3">
                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                            <label for="tellphone" class="col-form-label" style="width: 30%;">Work Tell:</label>
                            <input class="required form-control" id="bd_work_tell" name="bd_work_tell" type="text"style="width: 70%; margin-left: 10px;" placeholder={{ $data->bd_work_tell }}>
                        </div>
                    </div>
                </div>


            </div><!-- end row -->


            <!-- button beneficiary style -->
            <style>
                .btn_round {
                    width: 35px;
                    height: 35px;
                    display: inline-block;
                    border-radius: 50%;
                    text-align: center;
                    line-height: 35px;
                    margin-left: 10px;
                    border: 1px solid #ccc;
                    cursor: pointer;
                }
                .btn_round:hover {
                    color: #fff;
                    background: #6b4acc;
                    border: 1px solid #6b4acc;
                }

                .btn_content_outer {
                    display: inline-block;
                    width: 85%;
                }
                .close_c_btn {
                    width: 30px;
                    height: 30px;
                    position: absolute;
                    right: 10px;
                    top: 0px;
                    line-height: 30px;
                    border-radius: 50%;
                    background: #ededed;
                    border: 1px solid #ccc;
                    color: #ff5c5c;
                    text-align: center;
                    cursor: pointer;
                }

                .add_icon {
                    padding: 10px;
                    border: 1px dashed #aaa;
                    display: inline-block;
                    border-radius: 50%;
                    margin-right: 10px;
                }
                .add_group_btn {
                    display: flex;
                }
                .add_group_btn i {
                    font-size: 32px;
                    display: inline-block;
                    margin-right: 10px;
                }

                .add_group_btn span {
                    margin-top: 8px;
                }
                .add_group_btn,
                .clone_sub_task {
                    cursor: pointer;
                }

                .sub_task_append_area .custom_square {
                    cursor: move;
                }

                .del_btn_d {
                    display: inline-block;
                    position: absolute;
                    right: 20px;
                    border: 2px solid #ccc;
                    border-radius: 50%;
                    width: 40px;
                    height: 40px;
                    line-height: 40px;
                    text-align: center;
                    font-size: 18px;
                }
            </style>

            <div class="col-md-6" id="inputFormRow"  style="width: 100%">
                <div class="col-lg-12 mt-5"  style=" left: -1em">

                    <div  id= "newext"></div>
                    <div style="width:85%;">
                        <a class="btn btn-primary waves-effect waves-light mb-"style="background-color:#081546;" href="{{('/member-capture')}}" style="float: left; text-decoration: none; margin-bottom:0.5em; font-size: 1.5em ">BACK</a>
                    </div>
                    <button id="Update1" type="button" class="btn btn-primary waves-effect waves-light mb-2"style="background-color:#081546;margin-left:94%;margin-top:-5%"> Update</button>
                    </div>
            </div>

            <script>
                console.log("member", <?php echo $data?>);



                document.addEventListener("DOMContentLoaded", function() {
                    var updateButton = document.getElementById("Update1");

                    updateButton.addEventListener("click", function() {console.log("1");
                        var id = <?php echo $data->bd_id; ?>;
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

                        var beneficiaryMember = {
                            _token: document.querySelector('input[name="_token"]').value,
                            section: 'section4',
                            bd_title: title,
                            bd_relationship: relationship,
                            bd_fullnames: fullName, //1
                            bd_surname: surname, //2
                            bd_id_number: idNumber, //3
                            bd_date_of_birth: dateOfBirth,
                            bd_cellphone: cellphone,
                            bd_email: email, //6
                            bd_initials: initials,
                            bd_gender: gender,  //4
                            bd_work_tell: workTell
                        };
                        console.log("extend", beneficiaryMember)
                        fetch(`/member-capture/${id}`, {
                            method: 'PUT',
                            headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': beneficiaryMember._token, // Include the CSRF token header
                            },
                            body: JSON.stringify(beneficiaryMember),
                        })
                        .then(function(response) {
                        return response.json();
                        })
                        .then(function(response) {
                            window.location.href = '/member-capture';
                        })
                        .catch(function(error) {
                        console.log(error);
                        });
                    });
                });
            </script>

        </form>
    </body>
</html>



