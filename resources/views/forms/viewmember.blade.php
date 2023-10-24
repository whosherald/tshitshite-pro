@extends('Admin.layout')
@section('admin.content')
        <style>
            body{
                background: #e6e4e4;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
            }

            #view-form{
                background: white;
                height: auto;
                padding: 1em 2em;
                border-radius: 1em;
                box-shadow: 0px 0px 6px -2px rgba(0,0,0,0.47);
                -webkit-box-shadow: 0px 0px 6px -2px rgba(0,0,0,0.47);
                -moz-box-shadow: 0px 0px 6px -2px rgba(0,0,0,0.47);
                margin-bottom: 18.5% ! important;
                margin-left:3.0%;
                width:94%;
                
            }
                        
                /* Style the dropdown container */
            .dropdown {
            position: relative;
            display: inline-block;
            }

            /* Style the dropdown toggle button (in this case, the <span> element) */
            .dropdown-toggle {
            cursor: pointer;
            padding: 10px 20px;
            background-color: #f1f1f1;
            /* border: 1px solid #ccc; */
            border-radius: 4px;
            }

            /* Style the dropdown content */
            .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            
            z-index: 1;
            }

            /* Style the dropdown options */
            .dropdown-content a {
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            color: #333;
            }

            /* Hover effect for dropdown options */
            .dropdown-content a:hover {
            background-color: #f1f1f1;
            }

            /* Show the dropdown content when the toggle button is hovered */
            .dropdown:hover .dropdown-content {
            display: block;
            }
            .topbar-navigation {
            margin-right: 1em;
            background: white;
            
            height: 70%;
            display: flex;
            justify-content: center;
            align-items: center;
            
            color: rgb(0, 0, 0);
            
        }
        .dropdown-menu-right {
         right: 0 !important;
        left: auto !important;
         width:90% !important;
        }
        /* Style the accordion container */
        .accordion {
            display: block;
            margin: 20px;
            
        }

        /* Style the accordion headings */
        .accordion .accordion-header {
            background-color: #081546;
            color: #333;
            cursor: pointer;
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }

        /* Style the active accordion heading */
        .accordion .active {
            background-color: #081546;
            color: #fff;
        }

        /* Style the accordion content */
        .accordion .accordion-content {
            display: none;
            padding: 10px;
            border-top: 1px solid #ccc;
        }

        </style>
        

    <body style="overflow-x: hidden;">
        
        <form class="container p-4" id="view-form">
            {!! csrf_field() !!}
            <input type="hidden" name="section" value="section4">
            <img src="/assets/images/users/avatar-1.jpg" style="margin-left:6%"alt="user-image" class="rounded-circle">
                    
        </br>
        <label for="tellphone" class=" btn w-md waves-effect waves-light"  style="width: 20%;margin-top:1%;background-color:#081546;color:#fff;margin-left:1.5%;cursor:auto">Fullnames:
            <span class="d-none d-sm-inline-block ml-1 font-weight-medium" style="color: #fff">{{$mainmember->fullname}}</span>
            <span class="d-none d-sm-inline-block ml-1 font-weight-medium" style="color: #fff;margin-left:4%">{{$mainmember->surname}}</span>
        </label>
        
            <hr style="margin-bottom:2em">

            <style>
      
    </style>
@if($mainmember != null)

<div class="accordion">
    <div class="accordion-header" style ="color:#fff">
        <i class="fa fa-chevron-right"style ="color:#fff"></i> Personal Information
    </div>
  <div class="accordion-content">
    <div style="margin-left:-15%">
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Title:{{$mainmember->title}}"readonly>           
            </label>
            <label class="col-form-label" style="margin-left:15%">
                 <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Initials:{{$mainmember->initials}}"readonly>
            </label>
        </div>
        <div style="margin-left:-15%">
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="ID No:{{$mainmember->id_number}}"readonly>           
            </label>
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Date of Birth:{{$mainmember->date_of_birth}}"readonly>           
            </label>
        </div>
        <div style="margin-left:-15%">
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Age:{{$mainmember->age}}"readonly>           
            </label> 
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Marital Status:{{$mainmember->marital_status}}"readonly>           
            </label>       
        </div>
        <div style="margin-left:-15%">
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Citizen:{{$mainmember->citizenship}}"readonly>           
            </label>
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Street:{{$mainmember->street_address}}"readonly>           
            </label>
        </div>
        <div style="margin-left:-15%">
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Po Box:{{$mainmember->po_box}}"readonly>           
            </label>
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Postal Code:{{$mainmember->po_box}}"readonly>           
            </label>
        </div>
        <div style="margin-left:-15%">
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="City/Town:{{$mainmember->city}}"readonly>           
            </label>
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Province:{{$mainmember->province}}"readonly>           
            </label>
        </div>
       
        <div style="margin-left:-15%">
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Cellphone:{{$mainmember->cellphone_number}}"readonly>           
            </label>
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Email:{{$mainmember->email}}"readonly>           
            </label>
        </div>
        
    </div>
</div>
@endif


<div class="accordion">
    <div class="accordion-header"style ="color:#fff">
        <i class="fa fa-chevron-right"style ="color:#fff"></i> ExtendedMember
    </div>
   
    <div class="accordion-content">
    @if($extended != null)
        @foreach($extended as $index=>$extend)
        
    <p class=" btn w-md waves-effect waves-light" style="margin-left:-1%;background-color:#081546;color:#fff">{{$index + 1}}</p>
        <div style="margin-left:-15%;">
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Fullname(s):{{$extend->emfullname}}"readonly>           
            </label>
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Surname:{{$extend->emsurname}}"readonly>           
            </label>
            
        </div>
        <div style="margin-left:-15%">
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Initial(s):{{$extend->eminitials}}"readonly>           
            </label>
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Gender:{{$extend->emgender}}"readonly>           
            </label>           
        </div>       
        <div style="margin-left:-15%">            
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Relationship:{{$extend->emrelationship}}"readonly>           
            </label>
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Title:{{$extend->emtitle}}"readonly>           
            </label>
        </div>        
        <div style="margin-left:-15%">
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="ID NO:{{$extend->emid_number}}"readonly>           
            </label>
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Date of Birth:{{$extend->emdate_of_birth}}"readonly>           
            </label>
        </div>
        
        <div style="margin-left:-15%">
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Cellphone:{{$extend->emcellphone}}"readonly>           
            </label>
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Email:{{$extend->ememail}}"readonly>           
            </label>
        </div>
        <div style="margin-left:-15%">
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Cover Amount:{{$extend->emcover_amount}}"readonly>           
            </label>
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Policy Type:{{$extend->empolicy_type}}"readonly>           
            </label>
        </div>
        
        <div style="margin-left:-15%">
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Add premium:{{$extend->emadd_premium}}"readonly>           
            </label>
        </div>
        <hr style="margin-bottom:2em">
        @endforeach
    @endif
    </div>
    
</div>

<div class="accordion">
  
    <div class="accordion-header"style ="color:#fff">
        <i class="fa fa-chevron-right"style ="color:#fff"></i> Benefciary
    </div>
   
      <div class="accordion-content">
      @if($benefitdatas != null)
        @foreach($benefitdatas as $index=> $benefitdata)
        <p class=" btn w-md waves-effect waves-light" style="margin-left:-1%;background-color:#081546;color:#fff">{{$index + 1}}</p>
        <div style="margin-left:-15%">
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Fullname(s):{{$benefitdata->bd_fullnames}}"readonly>           
            </label>  
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Surname:{{$benefitdata->bd_surname}}"readonly>           
            </label>         
        </div>
        <div style="margin-left:-15%">
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Title:{{$benefitdata->bd_title}}"readonly>           
            </label>
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Initials:{{$benefitdata->bd_initials}}"readonly>           
            </label>
        </div>
        
        <div style="margin-left:-15%">
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Gender:{{$benefitdata->bd_gender}}"readonly>           
            </label>
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="ID NO:{{$benefitdata->bd_id_number}}"readonly>           
            </label>
        </div>
        <div style="margin-left:-15%">
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Date of Birth:{{$benefitdata->bd_date_of_birth}}"readonly>           
            </label>
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Date of Birth:{{$benefitdata->bd_date_of_birth}}"readonly>           
            </label>
        </div>
        
        
        <div style="margin-left:-15%">
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Age:{{$benefitdata->bd_age}}"readonly>           
            </label>
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Cellphone:{{$benefitdata->bd_cellphone}}"readonly>           
            </label>
        </div>
        <div style="margin-left:-15%">
            <label class="col-form-label" style="margin-left:15%">            
                <input class="d-none d-sm-inline-block ml-1 font-weight-medium" style="width: 150% !important;color: black;width: 20%;margin-left:-8%" placeholder="Email:{{$benefitdata->bd_email}}"readonly>           
            </label>
        </div>

            <hr style="margin-bottom:2em">
            @endforeach
        @endif
      </div>
    
</div>

<div class="col-md-6" id="viewbutton"  style="width: 100% ">
    <div class="col-lg-21 mt-5">
        <div  id= "newext1">
          <a href="{{('/dashboard')}}" class=" btn w-md waves-effect waves-light" style="width:201%;height:8% ! important;margin-left:1.5%;margin-top:-8% ! important;background-color:#081546;color:white"> back</a>
        </div>
    </div>
</div>



<script>
    // Add click event listeners to the accordion headers
    const accordions = document.querySelectorAll('.accordion');

    accordions.forEach(accordion => {
        const header = accordion.querySelector('.accordion-header');
        const content = accordion.querySelector('.accordion-content');
        const icon = header.querySelector('i.fa');

        header.addEventListener('click', () => {
            // Toggle the active class on the header
            header.classList.toggle('active');

            // Toggle the display property of the content
            if (content.style.display === 'block') {
                content.style.display = 'none';
                icon.classList.remove('fa-chevron-down');
                icon.classList.add('fa-chevron-right');

                
            } else {
                content.style.display = 'block';
                icon.classList.remove('fa-chevron-right');
                icon.classList.add('fa-chevron-down');
                
                // Add iziToast notification when the accordion is opened
                iziToast.show({
                    title: 'Accordion Opened',
                    message: 'This accordion has been opened.'
                });
            }
        });
    });
</script>

@endsection
            
  
 