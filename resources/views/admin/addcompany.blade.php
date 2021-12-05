<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Add Company</title>

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

     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    
</head>
<body>
   

    <!-- Header section -->
    @include('admin.adminheader') 
    <!-- end header -->

    <!-- left-side-bar -->
    @include('admin.adminleft') 
    <!-- left-side-bar -->

    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-75px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h2 class="text-info">Add Company</h2>
                            </div>    
                        </div>
                        </div>
                    </div>
                </div>
                <!-- Default Basic Forms Start -->
                <div class="pd-20 card-box mb-30">
                    <form action="addcom" method="POST" class="adminpanel-form" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Enter Company Name</label>
                            <div class="">
                                <input class="form-control" type="text" name="cname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Select Company Logo</label>
                            <div>
                                <input class="form-control" type="file" name="clogo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div> </div>
                                <div class="col-sm-12 col-md-2">
                           <input type="submit" name="sub" class="btn btn-primary">
                       </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
    <!-- js -->
    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>