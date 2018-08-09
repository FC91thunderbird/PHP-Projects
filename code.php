<?php 
include('header.php');
?>

<body>
<div class="col-lg-3">
</div>
<div class="col-lg-5">
	<div class="panel panel-primary">
		<div class="panel-heading text-center">
			<h2>Enter security code </h2>
		</div>
	
			<div class="panel-body">
			
				<form method="POST" >
							<div class="form-group">
								<p>Plese check ur Phone for text message with your code
								
								this code is 6 digit of length</p>
								<hr>
								<h4>Plese Put 6-Digit code here</h4>
								<br>
								<input type="text" name="name" class="form-control" placeholder="Code..." required="required">
								
							</div>
							<br>
							<a href="identify.php">Didn't get code ??? </a>
							<hr>
							<div class="form-group">
									<!--<input type="submit" name="search" class="btn btn-primary" value="Search" >-->
									<a href="newpass.php" class="btn btn-primary">Continuie</a>
									<a href="identify.php" class="btn btn-primary">Cancel</a>
							</div>
				</form>			
			</div><!--P_body-->
		
		</div>




			

<?php include('footer.php');?>