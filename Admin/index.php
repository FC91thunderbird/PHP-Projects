<?php session_start();
?>
<html>

<head>
<title>E-Commerce</title>

    
	<link href="../css/modern-business.css" rel="stylesheet">

    <!--<link href="css/style.css" rel="stylesheet">-->
	  
	   <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">

    

</head>
<body>
<?php
mysql_connect("localhost","root","");
 mysql_select_db("amol");
 
if(isset($_POST["submit"]))
{	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$select="select * from admin where Username='$username' and Password='$password'";
	$sql=mysql_query($select);

if($data=mysql_fetch_array($sql))
{
	echo $_SESSION['id']=$data['Id'];
	?>
	<script>window.location="dashboard.php";</script>
	
<?php
	//echo "Register Successful";
}
	 else
	{
	echo "Login Time Error!!!!";
	}

}
?>


<div class="container">
	<div class="col-lg-12">
		<div class="col-lg-12">
			<div class="panel-default">
				<div class="panel-heading text-center">
					<h2>Admin Panel<small>Manage Account</small></h2>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<div class="container">
<div class="col-lg-12">

<div class="col-lg-4">
</div>

		<div class="col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2>Sign In Form</h2>
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
							Create New Admin?? <a href="Registration.php"> Click Here</a>
							<hr>
							<div class="form-group">
							<input type="submit" name="submit" class="btn btn-primary" value="Login" >
						
							<input type="reset" name="cancel" class="btn btn-primary" value="Cancel" >
							</div>

						</form>	
					</div><!--Panel-body-->
			</div><!--primary-->
		</div><!--col-->
</div><!--container-->
</body>