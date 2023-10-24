<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


  
  <div class=row-lg-3>
  <div class=col-mb-3 >
        <div class=row-mb-3 style="margin-top:15px">
        <img src="assets/images/logo.png"  style="margin-top:-15px;margin-left:-10px;width:180px;height:100px">
          <div class="pol" style="font-size: 12px;">
          <p>
            POLICY NUMBER:</br> POLICY INCEPTION:
          </p>
          </div>
        </div>
        <div class=row-mb-3 >
        <div class="pol" style="font-size: 10px; margin-left:180px;margin-top:-140px">
          <p>
            Reg no.1995/080060/23-Authorised FSP:47182
          </p>
          <div class="pol" style="font-size: 14px; margin-left:-1px;margin-top:-130px">
          <p>
            What a Complete Funeral Service!
          </p>
          <div class="pol" style="font-size: 12px; margin-left:-1px;margin-top:-25px">
          <p>
           "we love you,Ria vha funa,Re a le rata,,Hami rhandza"
          </p>
          </div>
        </div>
      </div>
      <div class=col-mb-3 >
        <div class=row-mb-3 style="margin-left:450px;margin-top:-90px;font-size: 15px;" >
          <p>
          TSHITSHITHE AND BROS FUNERAL</br> UNDERTAKERS
          </p>
        </div>
        <div class=row-mb-3 style="margin-left:450px;margin-top:-10px;font-size: 12px;">
          <p>
          (COMPUTER GENERATED COPY)
          </p>
          
          <p>
          HEAD OFFICER
          </p>
          <p>
          CONTACT:0159652243/0829722054
          </p>
          <p>
          EMAIL:TSHITSHITHE@GMAIL.COM
          </p>
        </div>
      </div>
      <div class=col-mb-3 >
        <div class=row-mb-3 >
          <!-- <p>
          (COMPUTER GENERATEDw COPY)
          </p> -->
        </div>
      </div>
      <div class=col-mb-3 >
        <div class=row-mb-3 >
            <label for="txtExpirationDate" class="col-lg-3 col-form-label"style="margin-left:200px">MEMBERSHIP POLICY DOCUMENT</label>
              <div class="col-lg-9">
                
                <input id="txtExpirationDate" name="mem_postal_suburb" type="text" class="form-control"style="height:22px !important;width:690px">
                <h5  style="margin-top:-25px;margin-left:280px">PERSONAL DETAILS</h5>
              </div>
        </div>
      </div>
      

      <style>
table {
  border-collapse: collapse;
  width: 100%;
  margin-top:-12px;
  
			margin: 10px;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  font-size: 12px;
  
}

th {
  
}
embed[Attributes Style] {
    width: 83px !important;
    height: 116px !important;
}

@media screen and (max-width: 600px) {
  th, td {
    display: block;
    width: 100%;
  }
}
</style>

  @if($mainmember != null)

    <div>
        <table>
        <tr class="body">
          <th></th>
          <td>POLICY HOLDER</td>
          <td>CONTACT DETAILS</td>
          <td></td>
          <td></td>
        </tr>

        <tr class="body">
          <th>TITLE: </th>
          <td>{{$mainmember->title}}</td>
          <th>RESIDENTIAL ADDRESS:</th>
          <td>{{$mainmember->street_address}}</td>
        </tr>

        <tr class="body">
          <th>FULLNAMES: </th>
          <td>{{$mainmember->fullname}}</td>
          <th>RESIDENTIAL CODE:</th>
        </tr>

        <tr class="body">
          <th>SURNAME: </th>
          <td>{{$mainmember->surname}}</td>
          <th>POSTAL ADDRESS:</th>
          <td>{{$mainmember->po_box}}</td>
        </tr>

        <tr class="body">
          <th>ID NUMBER: </th>
          <td>{{$mainmember->id_number}}</td>
          <th>POSTAL CODE:</th>
          <td>{{$mainmember->postal_code}}</td>
        </tr>

        <tr class="body">
          <th>DATE OF BIRTH: </th>
          <td>{{$mainmember->date_of_birth}}</td>
          <th>TELEPHONE HOME:</th>
        </tr>

        <tr class="body">
          <th>INCEPTION: </th>
          <td>{{$mainmember->inception_date}}</td>
          <td></td>
          <td></td>
        </tr>

        <tr class="body">
          <th> TELEPHONE WORK:</th>
          <td></td>
          <th>MOBILE NO:</th>
          <td>{{$mainmember->cellphone_number}}</td>
          <td></td>
          <td></td>
        </tr>

        <tr class="body">
          <th> </th>
          <td></td>
          <td></td>
          <th>EMAIL: </th>
          <td>{{$mainmember->email}}</td>
          
        </tr>
      </table>
      <div class="product" style="margin-left:280px;font-size: 12px;">
        <p>PRODUCT:{{$mainmember->policy_type}}</p>
        <p>COVER:{{$mainmember->cover_amount}}</p>
        <p>PREMIUM:{{$mainmember->premium}}</p>
      </div>
      <div class="product" style="margin-left:380px;margin-top:-20px;font-size: 12px;">
        <p>TOTAL PREMIUM:{{$mainmember->total_premium}}</p>
        
      </div>

    </div>
    @endif
        <div class=row-mb-3 >   
              <div class="col-lg-9"> 
                <input id="txtExpirationDate" name="mem_postal_suburb" type="text" class="form-control"style="height:23px !important;width:690px">
                <h5  style="margin-top:-25px;margin-left:300px">EXTENDED DETAILS</h5>
              </div>
        </div>
        

        
      <div>
        <table style="margin-top:-25px;">
        <tr class="body">
          <th>FULLNAMES</th>
          <th>SURNAME</th>
          <th>ID NO</th>
          <th>INCEPTION</th>
          <th>COVER</th>
          <th>PREMIUM</th>
          <th>STATUS</th>
        </tr>
        @foreach($extended as $extend)
        <tr class="body">
        
          <td>{{$extend->emfullname}}</td>
          <td>{{$extend->emsurname}}</td>
          <td>{{$extend->emid_number}}</td>
          <td>{{$extend->inception_date}}</td>
          <td>{{$extend->emcover_amount}}</td>
          <td>{{$extend->emadd_premium}}</td>
          <td>{{$extend->policy_status}}</td>
         
        </tr>
        @endforeach

      </table>

      </div>
              <div class=row-mb-3 >   
                    <div class="col-lg-9">  
                        <input id="txtExpirationDate" name="mem_postal_suburb" type="text" class="form-control"style="height:23px !important;width:690px">
                        <h5  style="margin-top:-25px;margin-left:300px">BENEFICIARY</h5>
                    </div>
              </div>
              <div>
        <table style="margin-top:-25px;">
        <tr class="body">
          
          <th>FULLNAMES:</th>
          <th>SURNAME:</th>
          <th>ID NO</th>
          <th>RELATIONSHIP:</th>
          <th>EMAIL</th>
          <th>CELLPHONE</th>
          
        </tr>
        @if($benefitdatas != null)
        @foreach($benefitdatas as $benefitdata)
        <tr class="body"
          <td>{{$benefitdata->bd_fullnames}}</td>
          <td>{{$benefitdata->bd_surname}}</td>
          <td>{{$benefitdata->bd_id_number}}</td>
          <td>{{$benefitdata->bd_relationship}}</td>
          <td>{{$benefitdata->bd_email}}</td>
          <td>{{$benefitdata->bd_cellphone}}</td>
        </tr>
        @endforeach   
        @endif
      </table>
      
      </div>
      <h5  style="margin-top:50px;margin-left:5px">Agent Fullname..........................................................Agent Signature.....................................................</h5>
      </div>
      <div>
      <h5  style="margin-top:20px;margin-left:5px">Client Fullname..........................................................Client Signature.....................................................
      Date.................................</h5>
      </div>          
                  
                  <!-- <div class=row-mb-3 >
                    <div class="col-lg-9">  
                      <input id="txtExpirationDate" name="mem_postal_suburb" type="text" class="form-control"style="height:23px !important;width:690px">
                      <h5  style="margin-top:-25px;margin-left:300px">PAYMENTS DETAILS</h5>
                    </div>
                  </div> -->

                    <!-- <label for="input1"style="font-size: 12px">PAYMENT METHOD:</label>
                    <input type="text" id="input1"  name="input1"style="height:23px !important;">
                  
                  <div class=row-mb-3 >
                    <div class="col-lg-9">  
                      <input id="txtExpirationDate" name="mem_postal_suburb" type="text" class="form-control"style="height:23px !important;width:690px">
                      <h5  style="margin-top:-25px;margin-left:300px">AGENT</h5>
                    </div>
                </div>

                <div> -->
        <!-- <table>

          <th>AGENT NAMES: </th>
          <td></td>
          <th>AGENT CODE:</th>
          <td></td>
         
      </table> -->
      
      </div>
     
                   
                   
            </div>
            
  
  
</body>
</html>