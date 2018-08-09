<?php include('adminheader.php');?>

<?php
if($_SESSION['id']=="")
{
	?>
	<script>window.location="index.php";</script>
	<?php }?>

	
	
<div class="col-lg-4">
		<div class="panel panel-info">
                        <div class="panel-heading text-center">
                            <h4>Add Category </h4>
                        </div>
						<div class="panel-body">


								<form class="form" method="post">
								
							
                                     
                                        <div class="control-group">
                                          <label>Add Category</label>
                                          <div class="controls-group">
													<input class="form-control" id="focusedInput" type="text" name="name"
													placeholder="input category name..." required="required">
                                          </div>
														<hr>
												<div class="controls">
													<input type="submit" name="submit" value="Add Category" class="btn btn-info">
													<input type="reset" name="cancel" value="Cancel" class="btn btn-info">
												</div>
											</div>
										
								</form>
								
									
		</div>
		
	</div>
	<div class="panel panel-default">
									<div class="panel-heading">All Category</div>
									<table class="table">
										<tr>
											<th>ID</th>
											<th>Name</th>
											<th>QTY</th>
											<th>Price</th>
										</tr>
		</div>
</div>

<?php

 
if (isset($_POST["submit"]))
{	
	$name=$_POST['name'];
	$insert="insert into Category(Name)values('$name')";
	$sql=mysql_query($insert);
	
$select="select * from Category ";
$query=	mysql_query($select);
while($data=mysql_fetch_array($query))
{?>
		<tr>
		<td><?php echo $data['Id'];?></td>
		 <td><?php echo $data['Name'];?></td>
		</tr>


<?php } 

}
?>
</table>
</div> 