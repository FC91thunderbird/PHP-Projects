<?php 
include('header.php');
?>
<head>
<title>New Password</title>
<body>
<div class="col-lg-3">
</div>

<div class="col-lg-5">
	<div class="panel panel-primary">
		<div class="panel-heading text-center">
			<h2>Choose new Password </h2>
		</div>
	
			<div class="panel-body">
			
				<form method="POST" >
							<div class="form-group">
								<p>Plese Put strong password it must be 6 character</p>
								<hr>
								
								<br>
								<input type="text" name="name" class="form-control" placeholder="New Password..." required="required">
								
							</div>
							
							<hr>
							<div class="form-group">
									<!--<input type="submit" name="search" class="btn btn-primary" value="Search" >-->
									<a href="guest.php" class="btn btn-primary">Continue</a>
									<a href="identify.php" class="btn btn-primary">Cancel</a>
							</div>
				</form>			
			</div><!--P_body-->
		
		</div>




			

<?php include('footer.php');?>