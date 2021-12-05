<!DOCTYPE html>
<html>
<head>
	<title>Job Search</title>
</head>
	<style>
		.app{
			white-space: nowrap;
			text-align: center;
			font-size: 16px;
			font-weight: bolder;
		}
		
		td {
			text-align: center;
			font-size: 14px;
		}
		.tr:hover{
			box-shadow: 0 0 5px rgba(0,0,0,0.3), 0 2px 5px rgba(0,0,0,0.3);
			transform: scale(.99);
		}
		h1{
			text-align: center;
			letter-spacing: 3px;
			border-radius: 30px;
		}
		.container-outer{
			width: 100%;
			padding: 20px;
		}
		table{
			background-color: #ece4fe;
			border-radius: 5px;
		}
	</style>
<body>

@include('header') 

<div class="container-outer">
	<h1 class="text-info mt-3">My Applications</h1>
	<table class="table table-striped my-5">
		<thead>
			<tr bgcolor="yellow">
				<th scope="col" class="app">Company Name</th>
				<th scope="col" class="app">Post Name</th>
				<th scope="col" class="app">Qualifications</th>
				<th scope="col" class="app">Job desc</th>
				<th scope="col" class="app">Number of Vacancy</th>
				<th scope="col" class="app">Apply Data</th>
			</tr>
		</thead>
		<tbody>
					
	<?php
        use App\Http\Controllers\viewController;
                    
        $data=viewController::myapp();

        foreach($data as $value)
        {
            $cname=$value->cname;
            $pname=$value->pname;
            $qual=$value->qual;
            $jod=$value->jod;
            $nov=$value->nov;
            $dt=$value->dt;

            echo"
            <tr class='tr'>	
            	<td scope='col'>$cname</td>
            	<td scope='col'>$pname</td>
            	<td scope='col'>$qual</td>
            	<td scope='col'>$jod</td>
            	<td scope='col'>$nov</td>
            	<td scope='col'>$dt</td>
            </tr>
            	";
        }
   ?>
   			
		</tbody>
	</table>
</div>

@include('footer')
</body>
</html>