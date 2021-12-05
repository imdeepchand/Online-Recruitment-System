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
  <style type="text/css">
    .img-rad {
      width: 120px;
      height: 110px;
    }
    .card-width {
      width: 330px;
      height: 450px;
    }
    .m-left {
      margin-left: 200px;
    }
    .p-height {
      height: 150px;
      overflow: hidden;
    }
    .font-s {
     font-size: 26px;
    }
    .img-wh {
      height: 225px;
      width: 225px;
    }
  </style>
</head>

<body>

 @include('header') 
<div class='container'> 
    <?php
          foreach($data as $value)
          {
              $id=$value->id;
              $cname=$value->cname;
              $pn=$value->pn;
              $jd=$value->jd;
              $nov=$value->nov;
              $qu=$value->qu;
              $loc=$value->loc;
              $clogo=$value->clogo;
              echo"<div class='row'>
                        <div class='col-5'></div>
                        <div class='col-7'>
                          <h1 class='text-primary my-4'>Apply Form</h1>
                        </div>
                      </div>
                    <div class='row'>
                        <div class='col-4'>
                          <img src='/clogo/$clogo' class='img-wh my-2'>
                        </div>
                        <div class='col-8'>
                          <div class='row my-4'>
                            <div class='col-4'>
                              <span class='text-info font-s'>Company Name:</span>
                            </div>
                            <div class='col-8'>
                              <span class='font-s'>$cname</span>
                            </div>
                          </div>
                             <div class='row my-4'>
                            <div class='col-4'>
                              <span class='text-info'>Post Name:</span>
                            </div>
                            <div class='col-8'>
                              <span class=''>$pn</span>
                            </div>
                          </div>
                         
                          <div class='row my-4'>
                            <div class='col-4'>
                              <span class='text-info'>Qualification:</span>
                            </div>
                            <div class='col-8'>
                              <span class=''>$qu</span>
                            </div>
                          </div>
                        
                          <div class='row my-4'>
                            <div class='col-4'>
                              <span class='text-info'>Job Description:</span>
                            </div>
                            <div class='col-8'>
                              <span class=''>$jd</span>
                            </div>
                          </div>
                        <div class='row my-4'>
                            <div class='col-4'>
                              <span class='text-info'>Number of Opening:</span>
                            </div>
                            <div class='col-8'>
                              <span class=''>$nov</span>
                            </div>
                          </div>
                          ";
                        if(session('uname')=="")
                          {
                              echo"<a href='/userlog' class='btn btn-primary my-4'>Apply</a>";
                          }
                          else
                          {
                              echo"<a href='/apply/$id' class='btn btn-primary my-4'>Apply</a>";
                          }
                    echo"</div>
                        </div>
                        </div>
                      </div>";
          }       
    ?>
</div>
 @include('footer')
</body>

</html>