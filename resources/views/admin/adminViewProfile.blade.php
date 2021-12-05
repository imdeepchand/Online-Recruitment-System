<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>View Vacancy</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/vendors/images/job-icon.jpg">
    <link rel="icon" type="image/png" sizes="32x32" href="/vendors/images/job-icon.jpg">
    <link rel="icon" type="image/png" sizes="16x16" href="/vendors/images/job-icon.jpg">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="/vendors/styles/style.css">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <style>
    #img {
      width:  200px;
      height:  300px;
    }
  </style>
</head>
<body>
  

<!-- Header section -->
    @include('admin.adminheader') 
    <!-- end header -->

    <!-- left-side-bar -->
    @include('admin.adminleft') 
    <!-- left-side-bar -->
   
  <div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
      <div class="min-height-200px">
        <div class="page-header">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="title">
                <h2 class="text-info">User Profile</h2>
              </div>
            </div>
          </div>
        </div>
        <!-- basic table  Start -->
        <div class="pd-20 card-box mb-30">
          <div class="clearfix mb-20">
            
          </div>
          
              <?php
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
                        <div class='col-12'>
                          <div class='row'>
                        <div  id='img' class='col-4'><img src='/Canpicture/$dp' style='width:100%;height:100%;'></div>
                        <div class='col-8'>
                            <section class='my-3'>
                              <label class='text-info px-3' style='font-weight:bolder;'>Name:</label><span>$uname</span></section>
                               <section class='my-3'>
                              <label class='text-info px-3' style='font-weight:bolder;'>Father Name:</label><span>$fname</span></section>
                               <section class='my-3'>
                              <label class='text-info px-3' style='font-weight:bolder;'>Mother Name:</label><span>$mname</span></section>
                              <section class='my-3'>
                              <label class='text-info px-3' style='font-weight:bolder;'>Qualification:</label><span>$qual</span></section>
                               <section class='my-3'>
                              <label class='text-info px-3' style='font-weight:bolder;'>Email:</label><span>$email</span></section>
                               <section class='my-3'>
                              <label class='text-info px-3' style='font-weight:bolder;'>Phone no.:</label><span>$pno</span></section>
                               <section class='my-3'>
                              <label class='text-info px-3' style='font-weight:bolder;'>Date of Birth:</label><span>$dob</span></section>
                               <section class='my-3'>
                              <label class='text-info px-3' style='font-weight:bolder;'>Gender:</label><span>$gen</span></section>
                              <section class='my-3'>
                                <a href='/Canresume/$resume' class='btn btn-success my-3' style='white-space:nowrap;' download>Download Resume</a>
                              </section>                           
                         </div>
                        </div>
                        </div>
                        ";
                    }
               ?>
           </div>
        </div>
  </div>
    <!-- js -->
    <script src="/vendors/scripts/core.js"></script>
    <script src="/vendors/scripts/script.min.js"></script>
    <script src="/vendors/scripts/process.js"></script>
    <script src="/vendors/scripts/layout-settings.js"></script>
</body>
</html>