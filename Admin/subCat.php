<?php include('adminheader.php');?>
<style>
.select
{
	margin-left: 179px;
    margin-top: 17px;
}
</style>

<?php
if($_SESSION['id']=="")
{
	?>
	<script>window.location="index.php";</script>
	
	<?php }		
	
	
	?>
	
	
<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$cat=$_POST['cat'];
	$insert="insert into sub_categary(Name,Category)values('$name','$cat')";
	$sql=mysql_query($insert);
	echo $insert;
}
?>


<div class="col-lg-4">
<div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h4>Add Sub-Category </h4>
                        </div>
						<div class="panel-body">


								<form class="form" method="post">
								
							
                                     
                                        <div class="control-group">
                                          <label>Add Sub-Category</label>
                                          <div class="controls-group">
													<input class="form-control" id="focusedInput" type="text" name="name"
													placeholder="input category name...">
                                          </div>
										  
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
														<hr>
												<div class="controls">
													<input type="submit" name="submit" value="Add Category" class="btn btn-info">
												</div>
										</div>
										
								</form>
						</div>	
</div>
</div>


<?php include('../footer.php');?>