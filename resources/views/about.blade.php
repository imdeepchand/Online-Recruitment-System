<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Job Search</title>
	<style type="text/css"></style>
</head>
<body>
@include('header')
<div class="container p-5">
  <form method="POST" action="feedback" name="fb">
  	{{csrf_field()}}
  	<h1 class="text-info text-center p-2">Contact Us</h1>
  	<section class="m-0 p-0">
  		<label class="pt-3 m-0">Email</label>
  		<input type="email" name="email" class="form-control m-0" placeholder="abc@gmail.com" required>
  	</section>
  	<section class="m-0 p-0">
  		<label class="pt-3 m-0">Description</label>
  		<textarea class="form-control m-0" rows="4" cols="50" name="feedback" placeholder="Give Feedback to help us to impoore user satisfactor" required></textarea>
  	</section>
  	<input type="submit" value="Submit" class="btn-lg btn btn-primary my-3">
  </form>
</div>
@include('footer')

</body>
</html>