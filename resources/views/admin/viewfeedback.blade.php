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
</head>
<body>
	
	<!-- Header section -->
	@include('admin.adminheader') 
	<!-- end header -->

	<!-- left-side-bar -->
	@include('admin.adminleft') 
	<!-- left-side-bar -->
	<div class="main-container">
			<div class="card-box mb-30">
				<h2 class="h4 pd-20">Registered User's</h2>
				<table id="example" class="table table-striped text-center mx-3" style="width:98%">
        			<thead>
        				<tr bgcolor="yellow">
                    		<th>Id</th>
							<th>Emali</th>
							<th>Feedback's</th>
							
                  		</tr>
        			</thead>
        			<tbody>
		        		<?php           
		        			 use App\Http\Controllers\viewController;         
		                    $data=viewController::fetchfeedback();

		                    foreach($data as $value)
		                    {
		                        $id=$value->id;
		                        $email=$value->email;
		                        $feedback=$value->feedback;
		                        echo"<tr><td>$id<td>$email<td>$feedback</td></tr>";
		                    }
		               ?>
        		</tboady>
    		</table>
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				Job Search - Bootstrap 4 Admin Panel By <a href="#" target="_blank">Deepchand</a>
			</div>
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