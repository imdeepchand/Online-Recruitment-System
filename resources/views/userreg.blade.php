<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/regstyle.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style type="text/css">
    *{
        margin: 0;
        padding: 0;
    }
    .container-reg{
        background-color: #e2e2e2;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .form-reg{
        background-color: #fff;
        border-radius: 8px;
        width: 600px;

    }

    input{
        border-radius: 5px;
        border:  2px solid #e2e2e2;
        padding: 2px;
    }

    input[type="text"]:hover,
    input[type="text"]:focus,
     input[type="password"]:hover,
    input[type="password"]:focus {
        border:  2px solid green;
    }
</style>
<script type="text/javascript" src="assets/js/reg.js"></script>
<body>
   @include('header') 

<div class="container-reg">
    <form class="form-reg p-5"  action="userreg" method="POST" onsubmit="return validate()" name="reg">
        <h2>Create User</h2>  {{csrf_field()}}
        <section class="m-0 p-0">
            <label class="mt-1 mb-0">Candidate Name</label>
            <input type="text" name="uname" class="form-control"><br>
            <span id="error_nm" style="color:red;text-shadow: 0 0 2px rgba(255,0,0,0.5);"></span>
        </section>
        <section class="m-0 p-0">
            <label class="mt-1 mb-0">Father Name</label>
            <input type="text" name="fname" class="form-control"><br>
            <span id="error_fnm" style="color:red;text-shadow: 0 0 2px rgba(255,0,0,0.5);"></span>
        </section>
        <section class="m-0 p-0">
         <label class="mt-1 mb-0">Mother Name</label>
            <input type="text" name="mname" class="form-control"><br>
            <span id="error_mnm" style="color:red;text-shadow: 0 0 2px rgba(255,0,0,0.5);"></span>
        </section>
        <section class="m-0 p-0">
            <label class="mt-1 mb-0">Email id</label>
            <input type="text" name="email" class="form-control"><br>
            <span id="error_em" style="color:red;text-shadow: 0 0 2px rgba(255,0,0,0.5);"></span>
        </section>
        <section class="m-0 p-0">
            <label class="mt-1 mb-0">Contact No.</label>
            <input type="text" name="pno" class="form-control"><br>
            <span id="error_pn" style="color:red;text-shadow: 0 0 2px rgba(255,0,0,0.5);"></span>
        </section>
        <section class="m-0 p-0">
            <label class="mt-1 mb-0">D.O.B.</label>
            <input type="date" name="dob" class="form-control"><br>
            <span id="error_dob" style="color:red;text-shadow: 0 0 2px rgba(255,0,0,0.5);"></span>
        </section>
        <section class="m-0 p-0">
            <label class="mt-1 mb-0">Gender</label>
            <p class="m-0">Female: <input type="radio" name="gen" value="Female" id="gen" required>
            &#8287;&#8287;&#8287;Male: <input type="radio" name="gen" value="Male" id="gen" required></p><br>
            <span id="error_gen" style="color:red;text-shadow: 0 0 2px rgba(255,0,0,0.5);"></span>
            </section>
            <section class="m-0 p-0">
            <label class="mt-1 mb-0">Password</label>
            <input type="Password" name="pass" class="form-control"><br>
            <span id="error_ps" style="color:red;text-shadow: 0 0 2px rgba(255,0,0,0.5);"></span>
        </section>
        <section class="m-0 p-0">
            <label class="mt-1 mb-0">Re-enter Password</label>
            <input type="Password" name="repass" class="form-control"><br>
            <span id="error_reps" style="color:red;text-shadow: 0 0 2px rgba(255,0,0,0.5);"></span>
        </section>
        <input type="Submit" value="Create" name="userreg" name="sub" class="btn btn-success form-control my-3">
    </form>
</div>

 @include('footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>
<script type="text/javascript" src="assets/js/reg.js"></script>
</html>