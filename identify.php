<?php 
include('header.php');

?>
<?php


?>

<body>

<div class="container">
<div class="col-lg-4">
</div>
		
		<div class="col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
					<h3>Password Recovery</h3>
				</div>
			
			<div class="panel-body">
			
				<form method="POST" >
							<div class="form-group">
							<br>
								<p>Plese enter your email,phone no Or Full Name to find ur Account</p>
								<br>
								<input type="text" name="name" class="form-control" placeholder="enter Name, email or phone no.." required="required">
							</div>
							<hr>
							<div class="form-group">
									<!--<input type="submit" name="search" class="btn btn-primary" value="Search" >-->
									<a href="reset.php" class="btn btn-primary">Search</a>
									<input type="reset" name="cancel" class="btn btn-primary" value="Cancel" >
							</div>
				</form>			
			</div><!--P_body-->
		
		</div>




			

<?php include('footer.php');?>