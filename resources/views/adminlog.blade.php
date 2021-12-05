<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Job Search</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- =======================================================
  * Template Name: Company - v2.2.1
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <link rel="stylesheet" href="assets/css/logstyle.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <style type="text/css">
    #logo {
        width: 100px
        height: 80px;    
      }

      *{
        padding:0;
        margin:0;
        box-sizing:border-box;
    }

    .log-body{
        background-color: #ececec;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .log-container{
        background-color: #fff;
        width: 400px;
        height: 400px;
        border-radius: 8px;
    }

    .log-form{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 400px;
        height: 400px;
    }

    input{
        border-radius: 5px;
        border:  2px solid #e2e2e2;
        height: 35px;
        width: 300px;
        padding: 2px;
    }


    input[type="text"]:hover,
    input[type="text"]:focus,
     input[type="password"]:hover,
    input[type="password"]:focus {
        border:  2px solid green;
    }
  </style>
</head>

<body>
<div class="log-body">
  <!-- -----------Admin Login Form -->
  <div class="log-container">
        <form action="chklog" method="POST" onsubmit="return validate()" class="log-form" name="lg">
            <h1 class="text-primary">Admin Login</h1>  {{csrf_field()}}
            <section class="m-0 p-0">
                <label for="email" class="mb-0 mt-3">User Id</label><br>
                <input type="text" name="un" id="adinput" class="m-0">
            </section>
            <section class="m-0 p-0">
                <label for="pass"  class="mb-0 mt-3">Password</label><br>
                <input type="password"  name="ps" id="adinput" class="m-0">
            </section>
            <input type="submit" value="Login" class="btn btn-success py-1 px-4 my-3">
        </form>
    </div>
    </div>
</body>
<script src="assets/js/log.js"></script>
</html>