<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='utf-8'>
  <meta content='width=device-width, initial-scale=1.0' name='viewport'>

  <title>Job Search</title>
  <meta content='' name='description'>
  <meta content='' name='keywords'>

  <!-- =======================================================
  * Template Name: Company - v2.2.1
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<style type="text/css">
  #imghover {
    width: 200px;
    height: 200px;
  }
</style>
</head>

<body>
 @include('header') 
<div class="container my-3">
  <div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>Hello Threre! </strong>&#8287;&#8287;If You want to Add Qualification / change Phone Number / reset Password then Click Edite Profile Button
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
 <?php 
 $uid=session('uid');
 ?>
  <?php 
     use App\Http\Controllers\candidateController;                    
     $data=candidateController::viewuser();
        foreach($data as $value)
          {             
              $uname=$value->uname;
              $fname=$value->fname;
              $mname=$value->mname;
              $email=$value->email;
              $pno=$value->pno;
              $dob=$value->dob;
              $gen=$value->gen;
              $resume=$value->resume;
              $dp=$value->dp;
              $qual=$value->qual;
              echo"
                  <div class='container my-4' id='conhover'>
                    <div class='row'>
                      <div class='col-3 my-4'>                        
                        <img src='/Canpicture/$dp' id='imghover' class='img-fluid'>
                      </div>
                      <div class='col-7'>
                        <div class='row my-4'>
                          <div class='col-3 text-info ' style='white-space:nowrap;font-weight:bold;'>Name:</div>
                          <div class='col-9'>$uname</div>
                        </div>
                        <div class='row my-4'>
                          <div class='col-3 text-info ' style='white-space:nowrap;font-weight:bold;'>Father Name:</div>
                          <div class='col-9'>$fname</div>
                        </div>
                        <div class='row my-4'>
                          <div class='col-3 text-info ' style='white-space:nowrap;font-weight:bold;'>Mother Name:</div>
                          <div class='col-9'>$mname</div>
                        </div>
                        <div class='row my-4'>
                          <div class='col-3 text-info ' style='white-space:nowrap;font-weight:bold;'>Qualification:</div>
                          <div class='col-9'>$qual</div>
                        </div>
                        <div class='row my-4'>
                          <div class='col-3 text-info ' style='white-space:nowrap;font-weight:bold;'>Email:</div>
                          <div class='col-9'>$email</div>
                        </div>
                        <div class='row my-4'>
                          <div class='col-3 text-info ' style='white-space:nowrap;font-weight:bold;'>Phone no.:</div>
                          <div class='col-9'>$pno</div>
                        </div>
                        <div class='row my-4'>
                          <div class='col-3 text-info ' style='white-space:nowrap;font-weight:bold;'>Date of Birth:</div>
                          <div class='col-9'>$dob</div>
                        </div>
                        <div class='row my-4'>
                          <div class='col-3 text-info ' style='white-space:nowrap;font-weight:bold;'>Gender:</div>
                          <div class='col-9'>$gen</div>
                        </div>
                      </div>
                      <div class='col-2 my-4'>
                        <button class='btn btn-primary px-3' data-bs-toggle='modal' data-bs-target='#editeModal' style='white-space:nowrap'>
                            Edite Profile
                        </button><br>
                        <a href='/Canresume/$resume' class='btn btn-success my-3' style='white-space:nowrap;'>View Resume</a>
                      </div>
                    </div>
                  </div>
              ";               
          }       
  ?>


<!--Edite Modal -->
<div class="modal fade" id="editeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edite</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <section style="padding:0;" class="my-2">
          <form  action="/updateQual" method="post" onsubmit="return validatePh()" name="pho">
            {{csrf_field()}}
          <label>Qualification</label><br>
          <input type="text" name="qual" id="qual" class="form-control mb-2">
          <button type="submit" class="btn btn-info">Update</button>
          </form>          
      </section>
        <section style="padding:0;" class="my-2">
          <form  action="/updatePhone" method="post" onsubmit="return validatePh()" name="pho">
            {{csrf_field()}}
          <label>Phone Number</label><br>
          <input type="text" name="pno" id="pno" class="form-control mb-2">
          <button type="submit" class="btn btn-info">Update</button>
          </form>          
      </section>
       <section style="padding:0;" class="my-2">
        <form action="/updatePass" method="post" name="reg" onsubmit="return validate()">
            {{csrf_field()}}
          <label>Password</label><br>
          <input type="password" name="pass" class="form-control mb-2">
          <input type="password" name="repass" class="form-control mb-2">
          <button type="submit" class="btn btn-info">Update</button>
         </form>
      </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 @include('footer')
</body>

<script type="text/javascript">

      function validatePh()
    {
      const ph = document.pho.pno.value;
      if(ph == ""){
        window.alert("Please Enter Phone Number");
        document.pho.pno.focus();
        return false;
      }

      if(isNaN(ph) || x < 1 || x > 10){
        window.alert("Please Enter valide Phone Number");
        document.pho.pno.focus();
        return false;
      }

      if(document.querySelector("#pno").value.length !== 10){
        window.alert("Please Enter only 10 digit");
        document.querySelector("#pno").focus();
        return false;
      }
    }
  
    function validate()
    {
          const ps = document.reg.pass.value;
      if(ps == ""){
        window.alert("Please Enter Password");
        document.reg.pass.focus();
        return false;
      }
      const reps = document.reg.repass.value;
      if(reps == ""){
        window.alert("Please Enter re-enter Password");
        document.reg.repass.focus();
        return false;
      }
      if(document.reg.pass.value != document.reg.repass.value){
        window.alert("Please Enter re-enter Password");
        document.reg.repass.focus();
        return false;
      }
      if(!(/[^a-zA-Z0-9\-\/]/.test(reg.ps.value)))
      {
        alert('Password should be special character and alphanumeric value only');
        document.reg.ps.focus();
        return false;
      }
      if(!(/[^a-zA-Z0-9\-\/]/.test(reg.repass.value)))
      {
        alert('Password should be special character and alphanumeric value only');
        document.reg.repass.focus();
        return false;
      }
    }

</script>
</html>