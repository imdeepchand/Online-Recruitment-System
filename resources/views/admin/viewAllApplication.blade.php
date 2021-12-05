<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>View Vacancy</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/job-icon.jpg">
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/job-icon.jpg">
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/job-icon.jpg">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
<script type="text/javascript" src="https://kit.fontawesome.com/d0974d0f92.js" crossorigin="anonymous"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
   
     <style type="text/css">
      #icon{
        font-size:  20px;
      }
      td{
        font-size: 10px;
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
   
    <!-- <div class="mobile-menu-overlay"></div> -->

    <div class="mobile-menu-overlay"></div>

  <div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
      <div class="min-height-200px">
        <div class="page-header">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="title">
                <h2 class="text-info">View All Applications</h2>
              </div>
            </div>
          </div>
        </div>
        <!-- basic table  Start -->
        <div class="pd-20 card-box mb-30">
          <div class="clearfix mb-20">
            
          </div>
          <table class="table table-striped">
            <thead>
              <tr bgcolor="yellow">
                <th scope="col">User Id</th>
                <th scope="col">Company Name</th>
                <th scope="col">Post Name</th>
                <th scope="col">Qualification</th>
                <th scope="col">Job Description</th>
                <!-- <th scope="col">Number of Vacancy</th> -->
                <th scope="col">Apply Date</th>
                <th scope="col">#</th>
              </tr>
            </thead>
            <tbody>
              <?php
                    use App\Http\Controllers\viewController;
                    
                    $data=viewController::adminapp();

                    foreach($data as $value)
                    {
                        $uid=$value->uid;
                        $cname=$value->cname;
                        $pname=$value->pname;
                        $qual=$value->qual;
                        $jod=$value->jod;
                        $nov=$value->nov;
                        $dt=$value->dt;
                        echo"<tr style='height:30px;'><td>$uid<td>$cname<td>$pname<td>$qual<td>$jod<td style='white-space:nowrap;'>$dt<td><a class='stretched-link text-warning' href='/viewProfile/$uid'><i class='far fa-id-card text-warning' id='icon'></i></a></td></tr>";
                    }
               ?>
            </tbody>
          </table>
        </div>
  </div>
    <!-- js -->
    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>