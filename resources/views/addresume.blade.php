<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='utf-8'>
  <meta content='width=device-width, initial-scale=1.0' name='viewport'>

  <title>Job Search</title>
  <meta content='' name='description'>
  <meta content='' name='keywords'>

   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
 <?php 
 $uid=session('uid');
 ?>
<div class="container my-5">
  <form action="addresume" method="POST" enctype="multipart/form-data"> 
  {{csrf_field()}}     
      <h3 class="text-info my-4">Here You Upload Resume!</h3>
      <div class="my-2">
        <label class="form-control border-0" for="resume">Upload Resume:</label>
      </div>
      <div class="my-2">
      <input class="form-control my-2" type="file" name="resume">
    </div>
    <div class="my-4">
      <input type="submit" name="sub" value="Upload" class="btn btn-primary">
    </div>
 </form>
</div>
<div class="container my-5">
  <form action="addpic" method="POST" enctype="multipart/form-data"> 
  {{csrf_field()}}     
      <h3 class="text-info my-4">Here You Upload Profile Picture!</h3>
      <div class="my-2">
        <label class="form-control border-0" for="dp">Upload Picture:</label>
      </div>
      <div class="my-2">
      <input class="form-control my-2" type="file" name="dp">
    </div>
    <div class="my-4">
      <input type="submit" name="sub" value="Upload" class="btn btn-primary">
    </div>
 </form>
</div>
 @include('footer')
</body>
</html>