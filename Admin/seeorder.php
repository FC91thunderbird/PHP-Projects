<?php include('adminheader.php');?>


<?php
if($_SESSION['id']=="")
{
	?>
	<script>window.location="index.php";</script>
	<?php }?>

<div class="col-lg-10">
		<div class="panel panel-primary">
			<div class="panel-heading text-center">
				<h4>See Product Order</h4>
			</div>
			
				<table class="table">
				<tr>
					<th>No</th>
					<th>UserName</th>
					<th>Phone no</th>
					<th>Product Name</th>
					<th>Price</th>
					<th>Order Date</th>
					<th>Status</th>
					
				</tr>
					<tr>
							<td>3</td>
							<td>Sujit Kumar</td>
							<td>8870456791</td>
							<td>Dell Inspiration s234</td>
							<td>43,000 /-</td>
							<td>12/3/2016</td>
							<td>Not Deliver</td>
					</tr>
					<tr>
							<td>5</td>
							<td>Ashish shinde</td>
							<td>9637116916</td>
							<td>Asus </td>
							<td>31,200 /-</td>
							<td>5/3/2016</td>
							<td>Not Deliver</td>
					</tr>
					<tr>
							<td>6</td>
							<td>Roshan Kadam </td>
							<td>9049953919</td>
							<td>HP Y510s </td>
							<td>27,800 /-</td>
							<td>21/2/2016</td>
							<td> Deliver</td>
					</tr>
					
					
					
					
					
					
					
				<!--<?php 
				$select="select * from ";
				$sql=mysql_query($select);

				while($row=mysql_fetch_array($sql))
				{?>
					<tr>
						<td><?php echo $row['Id'];?></td>
						<td><?php echo $row['Title'];?></td>
						<td><?php echo $row['Price'];?></td>
						<td><img src="../Pic/<?php echo $row['Image'];?>" height="50px"></td>
					</tr>
				<?php }

				?>-->
		</div>
</div>
</table>
</body>