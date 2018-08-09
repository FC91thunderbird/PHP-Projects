<?php include('header.php');?>

<?php
mysql_connect("localhost","root","");
 mysql_select_db("amol");
 if (isset($_POST['submit']))
{
$name=$_POST['name'];


$insert="insert into (Name,)values('$name')";
$sql=mysql_query($insert);
echo "Insert ";
}
?>




<div class="row">
<div class="col-lg-2">
</div>
                <div class="col-lg-7">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            Create New Account
                        </div>
						<div class="panel-body">
						

								<form class="form" method="post">
									<div class="form-group">
											<label>Person Name</label>
                                            <input name="name" class="form-control" placeholder="Enter Full Name....">
                                     </div>
									 <div class="form-group">
											<label>Address</label>
                                            <input name="addrs" class="form-control" placeholder="Enter Residensial Address....">
                                     </div>
									 <div class="form-group">
											<label>Phone No</label>
                                            <input name="phn" class="form-control" placeholder="Contact no..">
                                     </div>
									<div class="form-group">
											<label>Username</label>
                                            <input name="username" class="form-control" placeholder="Enter username">
                                     </div>	
									 <div class="form-group">
											<label>Password</label>
                                            <input name="password" class="form-control" placeholder="Enter password">
                                     </div>		
									 <br>
									 <div class="form-group">
										<input type="button" name="submit" class="btn btn-primary" value="Save info">
									</div>
									
									<small>If Allready register???</small><a href="index.php">Click Here</a>
								</form>
							</div>
										
										
										
										
										
										
										
										
										
										
										
										
										<?php include('footer.php');?>