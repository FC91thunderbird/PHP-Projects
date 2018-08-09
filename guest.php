<?php 
include('header.php');

?>
<head>

<title>Guest Account</title>
	<style>
			body{
				background: url('pic/body/Blue hills.jpg')no-repeat center center fixed;
			}
			.img1
			{
				margin-left: 220px;
				height: 101px;
			}
	</style>
</head>
<body>
<!--<?php
if(isset($_POST['submit']))
{	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$select="select * from guestregistration1 where Username='$username' and Password='$password'";
	$sql=mysql_query($select);?>
	
	<script>window.location:"index.php";</script>
<?php }
?>-->


<div class="container">
	<div class="col-lg-12">
		<div class="col-lg-12">
			<div class="panel-danger">
				<div class="panel-heading text-center">
					<h2>User Account</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<div class="container">
<div class="col-lg-12">

<div class="col-lg-4">
<img class="img1" src="pic/Icon/security.png">
</div>

		<div class="col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2>User Sign In</h2>
				</div>
			
					<div class="panel-body">
						<form method="POST" >
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control" placeholder="Enter Username.." required="required">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control" placeholder="Enter Password.." required="required">
							</div>
							New Registration??<a href="guestRegistration.php">Click Here</a>
							<br>
							<br>
							<a href="identify.php">Forgot Password ???</a>
							<hr>
							<div class="form-group">
							<!--<input type="submit" name="submit" class="btn btn-primary" value="Login" >-->
						<a href="right.php" class="btn btn-primary">Login</a>
							<input type="reset" name="cancel" class="btn btn-primary" value="Cancel" >
							</div>

						</form>	
					</div><!--Panel-body-->
			</div><!--primary-->
		</div><!--col-->
</div><!--container-->
<?php include('footer.php');?>