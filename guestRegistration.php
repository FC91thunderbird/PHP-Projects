<?php include('header.php');
?>
<head>
<style>
.pic
{
	height: 160px;
    margin-left: 112px;
    margin-top: 42px;
}
</style>
</head>

<?php
if(isset($_POST['submit']))
{

$name=$_POST['name']; 
$addrss=$_POST['addrss'];
$phn=$_POST['phn'];
$username=$_POST['username'];
$password=$_POST['password'];

$insert="insert into guestregistration1(Full_Name,Address,Phone_No,Username,Password)values('$name','$addrss','$phn','$username','$password')";
$sql=mysql_query($insert);
}
?>
<?php
if(isset($_POST['search']))
{
$name1=$_POST['name']; 	
$select="select * from guestregistration1 where Full_Name='$name1'";
$sql=mysql_query($select);
while($row=mysql_fetch_array($sql))
{
	$name1=$row['name']; 
	$addrss1=$row['addrss'];
	$phn1=$row['phn'];
	$username1=$row['username'];
}
}
?>
<?php
if(isset($_POST['update']))
{
	$name=$_POST['name']; 
	$addrss=$_POST['addrss'];
	$phn=$_POST['phn'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$update="update guestregistration1 set Full_Name='$name',Address='$addrss',Phone_No='$phn',Username='$username',Password='$password' where Full_Name='$name'";
}
?>
<div class="col-lg-4">
<h2>Tell us About Yourself</h2>
<img class="pic" src="pic/edit_icon.jpg">
</div>
                <div class="col-lg-5">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h4>User Registration</h4>
                        </div>
						<div class="panel-body">
						

								<form class="form" method="post">
									<div class="form-group">
											<label>Full Name</label>
                                            <input type="text" name="name" value="<?php echo $name1;?>" class="form-control" placeholder="Enter Full Name...." required="required">
                                     </div>
									 <div class="form-group">
											<label>Address</label>
                                            <input type="text" name="addrss" value="<?php echo $addrss1;?>" class="form-control" placeholder="Enter Residensial Address...." >
                                     </div>
									 <div class="form-group">
											<label>Phone No</label>
                                            <input type="text" name="phn" value="<?php echo $phn1;?>" class="form-control" placeholder="Contact no.." >
                                     </div>
									 <div class="form-group">
											<label>Gender</label>
                                            <input type="radio" name="rad1" value="male" checked="true">Male
											<input type="radio" name="rad1" value="female">Female
                                     </div>
									<div class="form-group">
											<label>Username</label>
                                            <input type="text" name="username" value="<?php echo $username1;?>" class="form-control" placeholder="Enter username" >
                                     </div>	
									 <div class="form-group">
											<label>Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Enter password" required="required">
                                     </div>		
									 <br>
									 <div class="form-group">
										<input type="submit"  name="submit" class="btn btn-primary" value="Save info">
										<input type="submit"  name="search" class="btn btn-primary" value="Search">
										<input type="submit"  name="update" class="btn btn-primary" value="Update">
										<input type="reset"  name="exit" class="btn btn-info" value="Exit">
									</div>
									
									<small>If Allready register???</small><a href="guest.php">Click Here</a>
								</form>
						</div>
					</div>					
				</div>						
									
<?php include('footer.php');?>