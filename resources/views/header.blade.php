 <!-- ======= Header ======= -->
  <!-- Favicons -->
  <link href="/assets/img/favicon.jpg" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

<style type="text/css">
  #logo-nav {
    width: 150px;
    height: 70px;
  }
</style>
 <!-- class="top-fixed" -->

  <header id="header">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/">
        <img src="/assets/image/logo3.jpg" id="logo-nav"></a></h1>
     
     
      <nav class="nav-menu d-none d-lg-block">
        
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li ><a href="/about">About</a>
          </li>
          <!-- <li><a href="/contact">Contact</a></li> -->
          
          <?php
          $un=session('uname');
             if(session('uname')=="")
              {
              echo"<li><a href='/userlog'>Login</a></li>";
              }
              else
              {               
              echo"<li class='drop-down'><a href=''>Welcome ! $un</a>
              <ul>
              <li><a href='/profile'>Profile</a></li>
              <li><a href='/addresume'>Add Resume</a></li>
              <li><a href='/myapplication'>My Applications</a></li>
              <li><a href='/logout' method='get'>Logout</a></li></ul>";
              }
          ?>
          
          </ul>
      </nav>
    </div>
  </header><!-- End Header -->

 