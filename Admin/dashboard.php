<?php include('adminheader.php');?>

<?php
if($_SESSION['id']=="")
{
	?>
	<script>window.location="index.php";</script>
	<?php }?>


<div class="container">
<div class="col-lg-9">
<h1 class="heading text-center"><b><i><img src="../pic/Icon/customers.gif">  Dashboard</i></b></h1>
<hr>
</div>

	
			<div class="col-lg-2">
				<div class="panel panel-primary text-center">
					<div class="panel-heading"><img src="../pic/Icon/house.png">   Main Page</div>
					<div class="panel-footer"><a href="Caregory.php">View Details</div></a>
				</div>
			</div> 
			<div class="col-lg-2">
				<div class="panel panel-primary text-center">
					<div class="panel-heading"><img src="../pic/Icon/box.png"> Product Categry </div>
					<div class="panel-footer">View Details</div>
				</div>
			</div> 
			<div class="col-lg-2">
				<div class="panel panel-primary text-center">
					<div class="panel-heading"><img src="../pic/Icon/page.png">  Sub-Category</div>
					<div class="panel-footer">View Details</div>
				</div>
			</div> 
			<div class="col-lg-2">
				<div class="panel panel-primary text-center">
					<div class="panel-heading"><img src="../pic/Icon/star.png"> Brand's</div>
					<div class="panel-footer">View Details</div>
				</div>
			</div> 
			<div class="col-lg-2">
				<div class="panel panel-primary text-center">
					<div class="panel-heading"><img src="../pic/Icon/new_arrival.png"> Product</div>
					<div class="panel-footer">View Details</div>
				</div>
			</div> 
			<div class="col-lg-2">
				<div class="panel panel-primary text-center">
					<div class="panel-heading"><img src="../pic/Icon/rosette.png"> Sub-Product</div>
					<div class="panel-footer">View Details</div>
				</div>
			</div> 
			<div class="col-lg-2">
				<div class="panel panel-primary text-center">
					<div class="panel-heading"><img src="../pic/Icon/color_swatch.png"> Product Color</div>
					<div class="panel-footer">View Details</div>
				</div>
			</div> 
			<div class="col-lg-2">
				<div class="panel panel-primary text-center">
					<div class="panel-heading"><img src="../pic/Icon/image.png"> Images </div>
					<div class="panel-footer">View Details</div>
				</div>
			</div> <div class="col-lg-2">
				<div class="panel panel-primary text-center">
					<div class="panel-heading"><img src="../pic/Icon/vcard.png"> Order List</div>
					<div class="panel-footer">View Details</div>
				</div>
			</div> 
			<a href="logout.php"><div class="btn btn-info">Logout <img src="../pic/Icon/alert-failure.gif"></a>
	</div>
			<hr>

<div class="container">
		<div class="col-lg-10">
			<div class="col-lg-6">	
				<div class="panel panel-primary">
					<div class="panel-heading">
						Users
					</div>
					<div class="panel-body">	
							<table class="table">
										<tr>
											<th>#</th>
											<th>Full Name</th>
											<th>Address</th>
											<th>Phone No</th>
										</tr>
								<?php 
								$select="select * from guestregistration1";
								$query=mysql_query($select);
								while($row=mysql_fetch_array($query))
								{
								?>	
										<tr>
											<td><?php echo $row['Id'];?></td>
											<td><?php echo $row['Full_Name'];?></td>
											<td><?php echo $row['Address'];?></td>
											<td><?php echo $row['Phone_No'];?></td>
										</tr>
								<?php }?>
							</table>
					</div>
				</div>
			</div>
			<div class="col-lg-6">	
				<div class="panel panel-primary">
					<div class="panel-heading">
						Order's
					</div>
						<div class="panel-body">	
										<table class="table">
										<tr>
											<th>#</th>
											<th>Product</th>
											<th>Date</th>
											<th>Amount</th>
										</tr>
								<!--<?php 
								$select="select * from ";
								$query=mysql_query($select);
								while($row=mysql_fetch_array($query))
								{
								?>
										
								<?php }?>-->
								<tr>
											<td>1</td>
											<td>Laptop y510 series</td>
											<td>7/2/2016</td>
											<td>$.32,000/-</td>
											
										</tr>
										<tr>
											<td>3</td>
											<td>Dell Lappy</td>
											<td>2/3/2016</td>
											<td>$.22,400/-</td>
											
										</tr>
										<tr>
											<td>4</td>
											<td>Acer accessories</td>
											<td>12/3/2016</td>
											<td>$.400/-</td>
											
										</tr>
										</table>
						</div>
				</div>	
</div>
	<div class="col-lg-12">	
	
		<div class="panel panel-primary">
			<div class="panel-heading">
				Gallary
			</div>
			<div class="panel-body">
					
				
				
						<?php
						
						$selec="select * from  main order by title";
						$quer=mysql_query($selec);
						while($row=mysql_fetch_array($quer))
						{
						?>	
						
								<div class="col-lg-3">
								<div class="thumbnail">
								<img src="../Pics/<?php echo $row['Image'];?>" height="30px">
								</div>
								</div>
						<?php }?>		
				
			</div>
		</div>
	</div>
	
			
			<?php include('../footer.php');?>