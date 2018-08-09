<?php include('adminheader.php');?>

<?php
if($_SESSION['id']=="")
{
	?>
	<script>window.location="index.php";</script>
	<?php }?>


	<div class="col-lg-10">
		<div class="panel panel-primary">
			<div class="panel-heading">
				List Of All Customer
			</div>
			<div class="panel-body">
				<table class="table">
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Address</th>
						<th>Phone No</th>
						<th>Username</th>
					</tr>
					<tr>
						<td>1</td>
						<td>Vishal Shaker</td>
						<td>Kalewadi Pimpari Pune</td>
						<td>8878812301</td>
						<td>vishal123</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Nikhil wagh</td>
						<td>Talegaon Dabhade</td>
						<td>98768854</td>
						<td>nikhil@wagh</td>
					</tr>
					<tr>
						<td>4</td>
						<td>Dipak Jadav</td>
						<td>Tathwade</td>
						<td>779832123</td>
						<td>dipksalve</td>
					</tr>
					<!--<?php
					$select="select * from guestregistration1";
					$query=mysql_query($select);
					while($row=mysql_fetch_array($query))
					{ ?>
						<tr>
							<td><?php $row['Id'];?></td>
							<td><?php $row['Full_Name'];?></td>
							<td><?php $row['Address'];?></td>
							<td><?php $row['Phone_No'];?></td>
							<td><?php $row['Username'];?></td>
						</tr>
					<?php }?>-->
				</table>
			</div>
		</div>
	</div>


