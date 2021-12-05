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
      margin-left: 150px;
      white-space: nowrap;
    }
    .p-height {
      height: 150px;
      overflow: hidden;
    }
  </style>
</head>

<body>

 @include('header') 

  <!-- ======= Hero Section ======= -->
  <section id='hero'>
    <div id='heroCarousel' class='carousel slide carousel-fade' data-ride='carousel'>

      <div class='carousel-inner' role='listbox'>

        <!-- Slide 1 -->
        <div  class='carousel-item active' style='background-image: url(assets/img/slide/s4.jpg); background-size: cover;'>
         </div>

        <!-- Slide 2 -->
        <div class='carousel-item' style='background-image: url(assets/img/slide/s2.jpg); background-position: center center;'>
           </div>

        <!-- Slide 3 -->
        <div class='carousel-item' style='background-image: url(assets/img/slide/s3.jpg);'>
          </div>

      </div>

      <a class='carousel-control-prev' href='#heroCarousel' role='button' data-slide='prev'>
        <span class='carousel-control-prev-icon icofont-simple-left' aria-hidden='true'></span>
        <span class='sr-only'>Previous</span>
      </a>

      <a class='carousel-control-next' href='#heroCarousel' role='button' data-slide='next'>
        <span class='carousel-control-next-icon icofont-simple-right' aria-hidden='true'></span>
        <span class='sr-only'>Next</span>
      </a>

      <ol class='carousel-indicators' id='hero-carousel-indicators'></ol>

    </div>
  </section>
  <!-- End Hero -->
  <main id='main'>
    <section id='services' class='services section-bg'>
      <div class='container' data-aos='fade-up'>
        <div class='section-title'>
          <h2>OUR Vacancy</strong></h2>
          <p>Welcome To World Best Online Job Search Platform.</p>
        </div>
        <div class='row'>
              <?php
                    use App\Http\Controllers\viewController;
                    $data=viewController::viewvac();

                    foreach($data as $value)
                    {
                        $id=$value->id;
                        $cname=$value->cname;
                        $pn=$value->pn;
                        $jd=$value->jd;
                        $nov=$value->nov;
                        $clogo=$value->clogo;
                        echo"<div class='col-lg-4 col-md-6 d-flex align-items-stretch' data-aos='zoom-in' data-aos-delay='100'>
                              <div class='icon-box iconbox-blue card-width'>
                                <div class='icon'>
                                  <img src='clogo/$clogo' class='img-rad'>
                                </div>
                                <h4><a href=''>$cname</a></h4>
                                <p class='p-height'>$jd</p>                                
                                <div class='col-sm-12 col-md-2 justify-content-md-end'>
                                <a href='/readmore/$id' class='btn btn-outline-primary m-left'>Read More</a></div>
                              </div>
                            </div>";
                    }   
              ?>
    </div>
  </div>
</section>
<!-- End Services Section -->
 @include('footer')
</body>
</html>