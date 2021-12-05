<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Welcome to Admin Panel Of Job Search</title>

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
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- //data table -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
  <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="assets/image/logo3.jpg" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>
	<!-- Header section -->
	@include('admin.adminheader') 
	<!-- end header -->

	<!-- left-side-bar -->
	@include('admin.adminleft') 
	<!-- left-side-bar -->
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="vendors/images/banner-img.png" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Welcome to Admin Panel </h4><div class="weight-600 font-30 text-blue">
								<?php
            						$uname=session("uname");
           							 echo"<h2 class='text-secondary';>$uname</h2>";
          						?></div>
						
						<p class="font-18 max-width-600">The Administration Panel (or the admin panel for short) is the primary tool for you to work with your online store. Here you can manage companies and vacancies, interact with your Vandidate.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<?php
				                    use App\Http\Controllers\viewController;
				                    
				                    $data=viewController::countReg();

				                    $no = count($data);
									echo"
							<div class='widget-data p-4'>
								<div class='h4'>
									<h2 class='text-info'>
										$no
									</h2>
								</div>
								<div class='weight-600 font-18 text-secondary'>Register User</div>
							</div>";
							?>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
								<?php			                    
				                    $data=viewController::countApply();

				                    $noA = count($data);
									echo"
							<div class='widget-data p-4'>
								<div class='h4'>
									<h2 class='text-success'>
										$noA
									</h2>
								</div>
								<div class='weight-600 font-18 text-secondary'>Application Form</div>
							</div>";
							?>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
								<?php			                    
				                    $data=viewController::countCom();

				                    $noC = count($data);
									echo"
							<div class='widget-data p-4'>
								<div class='h4'>
								<h2 class='text-warning'>
									$noC
								</h2>
								</div>
								<div class='weight-600 font-18 text-secondary' style='white-space:nowrap;'>Number of Campanies</div>
							</div>";
							?>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
								<?php			                    
				                    $data=viewController::countVac();

				                    $noV = count($data);
									echo"
							<div class='widget-data p-4'>
								<div class='h4'>
								<h2 class='text-primary'>
									$noV
								</h2>
								</div>
								<div class='weight-600 font-18 text-secondary' style='white-space:nowrap;'>Number of Vacancies</div>
							</div>";
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="card-box mb-30">
				<h2 class="h4 pd-20">Registered User's</h2>
				<table id="example" class="table table-striped text-center mx-3" style="width:98%">
        			<thead>
        				<tr bgcolor="yellow">
                    		<th class="table-plus datatable-nosort">ID</th>
							<th>User Name</th>
							<th>Email Id</th>
							<th>Mobile Number</th>
							<th>Resume</th>
                  		</tr>
        			</thead>
        			<tbody>
		        		<?php                    
		                    $data=viewController::regUser();

		                    foreach($data as $value)
		                    {
		                        $id=$value->id;
		                        $uname=$value->uname;
		                         $email=$value->email;
		                        $pno=$value->pno;
		                        $resume=$value->resume;
		                        echo"<tr><td>$id<td>$uname<td>$email<td>$pno<td><a href='/Canresume/$resume' class='btn btn-success my-3' style='white-space:nowrap;' download>Download Resume</a></td></tr>";
		                    }
		               ?>
        		</tboady>
        		<tfoot>
        				<tr bgcolor="blue">
                    		<th class="table-plus datatable-nosort">ID</th>
							<th>User Name</th>
							<th>Email Id</th>
							<th>Mobile Number</th>
							<th>Resume</th>
                  		</tr>
        		</tfoot>
    		</table>
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				Job Search - Bootstrap 4 Admin Panel By <a href="#" target="_blank">Deepchand</a>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="vendors/scripts/dashboard.js"></script>
	<!-- data table script -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
<script>
    //data table
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
</body>
</html>