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

            #extended-update-form{
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
        {{-- <link href="public\assets\css\extendedmember.css" rel="stylesheet"/> --}}
    </head>

    <body style="overflow-x: hidden;">
        
        <form class="container p-4" id="extended-update-form">
            {!! csrf_field() !!}
            <input type="hidden" name="section" value="section4">
            <h3 class="mb-2">Extended Member</h3>
            <hr style="margin-bottom:2em">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                            <label for="tellphone" class="col-form-label" style="width: 30%;">Title:</label>
                            <select id="emtitle" name="emtitle" class="required form-control"style="width: 70%; margin-left: 10px;">
                                <option value="">{{ $data->emtitle }}</option>
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
                            <select id="emrelationship" name="emrelationship" class="required form-control"style="width: 70%; margin-left: 10px;">
                                <option value="">{{ $data->emrelationship }}</option>
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
                            <input class="required form-control" id="emfullname" name="emfullname" type="text"style="width: 70%; margin-left: 10px;" placeholder={{ $data->emfullname }}>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                            <label for="tellphone" class="col-form-label" style="width: 30%;">Surname:</label>
                            <input id="emsurname" name="emsurname" type="text" class="required form-control"style="width: 70%; margin-left: 10px;" placeholder={{ $data->emsurname }}>

                        </div>
                    </div>
                </div>
            </div><!-- end row -->

            <div class="row mb-3">
                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                            <label for="tellphone" class="col-form-label" style="width: 30%;">ID No:</label>
                            <input class="required form-control" id="emid_number" name="emid_number" type="text"style="width: 70%; margin-left: 10px;" placeholder={{ $data->emid_number }}>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                            <label for="tellphone" class="col-form-label" style="width: 30%;">Date of Birth:</label>
                            <input id="emdate_of_birth" name="emdate_of_birth" type="date" class="required form-control"style="width: 70%; margin-left: 10px;" placeholder={{ $data->emdate_of_birth }}>

                        </div>
                    </div>
                </div>
            </div><!-- end row -->

            <div class="row mb-3">
                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                            <label for="tellphone" class="col-form-label" style="width: 30%;">Cellphone:</label>
                            <input class="required form-control" id="emcellphone" name="emcellphone" type="text"style="width: 70%; margin-left: 10px;" placeholder={{ $data->emcellphone }}>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                            <label for="tellphone" class="col-form-label" style="width: 30%;">Email Address:</label>
                            <input id="ememail" name="ememail" type="text" class="required form-control"style="width: 70%; margin-left: 10px;" placeholder={{ $data->ememail }}>

                        </div>
                    </div>
                </div>
            </div><!-- end row -->

            <div class="row mb-3">
                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                            <label for="tellphone" class="col-form-label" style="width: 30%;">Initials:</label>
                            <input class="required form-control" id="eminitials" name="eminitials" type="text"style="width: 70%; margin-left: 10px;" placeholder={{ $data->eminitials }}>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                            <label for="emgender" class="col-form-label" style="width: 30%;">Gender:</label>
                            <select id="emgender" name="emgender" class="required form-control"style="width: 70%; margin-left: 10px;">
                                <option value="">{{ $data->emgender }}</option>
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
                            <label for="emcover_amount" class="col-form-label" style="width: 30%;">Cover Amount:</label>
                            <input class="required form-control" id="emcover_amount" name="emcover_amount" type="text"style="width: 70%; margin-left: 10px;" placeholder={{ $data->emcover_amount }}>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                            <label for="tellphone" class="col-form-label" style="width: 30%;">Policy Type:</label>
                            <select onChange="myplan()" id="empolicy_type" name="empolicy_type" class="required form-control"style="width: 70%; margin-left: 10px;">
                                <option id="producttype"  readonly name="product_type" value="">{{ $data->empolicy_type }}</option>
                                <option id="producttype"  readonly name="product_type" value="plan_A ">plan_A</option>
                                <option id="producttype"  readonly name="product_type" value="plan_B ">plan_B</option>
                                <option id="producttype"  readonly name="product_type" value="plan_C ">plan_C</option>
                                <option id="producttype"  readonly name="product_type" value="plan_D ">plan_D</option>
                            </select>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                            <label for="tellphone" class="col-form-label" style="width: 30%;">Add Premium:</label>
                            <input class="required form-control" id="emadd_premium" name="emadd_premium" type="text"style="width: 70%; margin-left: 10px;" placeholder={{ $data->emadd_premium }}>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                            <label for="tellphone" class="col-form-label" style="width: 30%;">Total Premium:</label>
                            <input id="emtotal_premium" name="emtotal_premium" type="number" class="required form-control"style="width: 70%; margin-left: 10px;" placeholder={{ $data->emtotal_premium }}>
                        </div>
                    </div>
                </div>
            </div>

            <div class="half text flexrow" style="flex-direction:row;">
            </div>

            <div class="col-md-6" id="inputFormRow"  style="width: 100%">
                <div class="col-lg-12 mt-5"  style=" left: -1em">

                    <div  id= "newext"></div>
            <div style="width:85%;">
                <a class="btn btn-primary waves-effect waves-light mb-"style="background-color:#081546;" href="{{('/member-capture')}}" style="float: left; text-decoration: none; margin-bottom:0.5em; font-size: 1.5em ">BACK</a>
            </div>
                    <button id="Update" type="button" class="btn btn-primary waves-effect waves-light "style="background-color:#081546;margin-left:94%;margin-top:-5%"> Update</button>

                </div>
            </div>

            <script>

                document.addEventListener("DOMContentLoaded", function() {
                    var updateButton = document.getElementById("Update");
                    updateButton.addEventListener("click", function() {
                        var id = <?php echo $data->em_id; ?>;
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
                            _token: document.querySelector('input[name="_token"]').value,
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
                        console.log("extend", extendedMember)
                        fetch(`/member-capture/${id}`, {
                            method: 'PUT',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': extendedMember._token // Include the CSRF token header
                            },
                            body: JSON.stringify(extendedMember)
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


