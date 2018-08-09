<?php include('adminheader.php');?>

<body background-image="C:\xampp\htdocs\PhpPractic\B\pic\bg.jpg">
<?php
if($_SESSION['id']=="")
{
	?>
	<script>window.location="index.php";</script>
	<?php }?>

<div class="col-lg-6">
		<div class="panel panel-info">
			<div class="panel-heading text-center">
				<h4>All Product </h4>
			</div>
			
				<table class="table">
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Price</th>
					<th>Image</th>
				</tr>

				<?php 
				$select="select * from main";
				$sql=mysql_query($select);

				while($row=mysql_fetch_array($sql))
				{?>
					<tr>
						<td><?php echo $row['Id'];?></td>
						<td><?php echo $row['Title'];?></td>
						<td><?php echo $row['Price'];?></td>
						<td><img src="../Pics/<?php echo $row['Image'];?>" height="50px"></td>
					</tr>
				<?php }

				?>
		</div>
</div>
</table>
</body>