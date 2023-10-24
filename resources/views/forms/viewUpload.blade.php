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
        <div style="width:85%;">
            <a href="{{('/member-capture')}}" style="float: left; text-decoration: none; margin-bottom:0.5em; font-size: 1.5em ">BACK</a>
        </div>
        <form class="container p-4" id="upload-form">
            {!! csrf_field() !!}
            <input type="hidden" name="claim_section" value="section8">
            <div>
                <h3>Upload</h3>
            </div>
            <hr>

            <div class="" style="">
                <div class="input-row">
                    <div class="col-lg-6">
                        <div class="input mb-3" style="">
                            <label for="tellphone" class="col-form-label" style="width: 30%;">Title</label>
                            <input id="txtCityBilling" name="up_title" type="text" class="form-control" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($uploads) ? $uploads->up_title : '' }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input mb-3" style="">
                            <label for="up_title" class="col-form-label" style="width: 30%;">Notes</label>
                            <textarea  name="up_title"required class="form-control" rows="8" style="width: 70%;">{{ isset($uploads) ? $uploads->up_title : '' }}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="file-inputs mb-3" style="border: 1px solid #d6d6d6; padding: 0.7em 0.5em; border-radius: 0.1em; ">
                            <div class="input-file-row">
                                <label for="up_documents" class="col-form-label">Select Supported Document File</label>
                                <input id="up_documents" name="up_documents" type="file" class="form-control" placeholder="{{ isset($uploads) ? $uploads->up_documents : '' }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>


