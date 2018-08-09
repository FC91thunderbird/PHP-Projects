<?php include('adminheader.php');?>
<?php
 if($_SESSION['id']=="")
{ ?>
	<script>window.location="index.php";</script>
<?php }?>

    
<head>
<style>
body{
	background: url('../pic/body/Winter.jpg') center;
}
</style>
</head>
<div class="col-lg-4">
<div class="panel panel-default">
                        <div class="panel-heading text-center">
                          <h4><b><i>Add Brand </i></b></h4>
                        </div>
						<div class="panel-body">


								<form class="form" method="post">
									<div class="control-group">
                                          <label>Add Brand_Name</label>
										  <br>
										  <select name="cat" class="select">
										  <option value=''>Select sub-category</option>
										  <?php
												
													$select = "select * from Category";
													$query=mysql_query($select);
										  
											while($data= mysql_fetch_array($query))
											{
												
												 ?>
													<option value="<?php echo $data['Id'];?>"><?php echo $data['Name'];?></option>					
											<?php }
											 
											
											
											?>
											</select>
										  <br>
										  <br>
											<input class="form-control" id="focusedInput" type="text" name="name"
													placeholder="input Brand name...">
                                     <br>	
													<input type="submit" name="submit" value="Add Brand" class="btn btn-info">
												
										 </div>
										 
								</form>
						</div>
</div>
</div>
<?php

 
if (isset($_POST["submit"]))
{	
$name=$_POST['name'];
	
	$insert="insert into Brand(Brand_Name)values('$name')";
$sql=mysql_query($insert);
echo "Insert Category";

}
?>