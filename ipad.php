<?php
include('header.php');
include('sidebar.php');
?>
<head>
<style>
.thumbnail > img, .thumbnail a > img {
    margin-right: auto;
    margin-left: auto;
    height: 203px;
}



</style>
</head>

<div class="col-lg-10"><br>
    <div class="panel panel-primary">
				<div class="panel-heading text-center">
					<h2>ipad Products</h2>
				</div>
				<div class="panel-body">
				<!--<?php 
					include('config.php');
					$select="select * from main order by price";
					$sql=mysql_query($select);
					while($data=mysql_fetch_array($sql))
					{?>
					
						<div class="col-lg-3">
							<div class="thumbnail img-responsive">
									<img src="Pics/<?php echo $data['Image'];?>" height="100px"> 
									  <div class="caption text-center">
										<h4><?php echo $data['Title'];?></h4>
										<p><?php echo "Price:-".$data['Price'];?></p>
										<p><a href="details.php" class="btn btn-primary" role="button">Add cart</a>
									</div>
							</div>
						</div>
					  
					<?php }?>-->
					  
					  <div class="col-lg-3">
							<div class="thumbnail">
									<img src="Product/ipad (2).jpg" height="100px">
									  <div class="caption text-center">
										<h4>Samsung Android ipad</h4>
										<b>Company price:-<strike>$. 17,000/-</b></strike>
										<p>$.14,5oo/- </p>
										<p><a href="details.php" class="btn btn-primary" role="button">Add cart</a>
									</div>
							</div>
						</div>
						
						<div class="col-lg-3">
							<div class="thumbnail">
									<img src="Product/ipad (3).jpg" height="50px">
									  <div class="caption text-center">
										<h4>apple</h4>
										<b>Company price:-<strike>$. 32,100/-</b></strike>
										<p>$.28,9oo/- </p>
										<p><a href="details.php" class="btn btn-primary" role="button">Add cart</a>
									</div>
							</div>
						</div>
					   
					   <div class="col-lg-3">
							<div class="thumbnail">
									<img src="Product/ipad.png" height="100px">
									  <div class="caption text-center">
										<h4>windows device</h4>
										<b>Company price:-<strike>$. 14,400/-</strike></b>
										<p>$.10,4oo/- </p>
										<p><a href="details.php" class="btn btn-primary" role="button">Add cart</a>
									</div>
							</div>
						</div>
						 <div class="col-lg-3">
							<div class="thumbnail">
									<img src="Product/ipad2.jpg" height="100px">
									  <div class="caption text-center">
										<h4>Acer Laptop</h4>
										<b>Company price:-<strike>$. 46,000/-</strike></b>
										<p>$.37,ooo/- </p>
										<p><a href="details.php" class="btn btn-primary" role="button">Add cart</a>
									</div>
							</div>
						</div>
						 <div class="col-lg-3">
							<div class="thumbnail">
									<img src="Product/ipad4.jpg" height="100px">
									  <div class="caption text-center">
										<h4>Sony Mobile</h4>
										<b>Company price:-<strike>$. 14,000/-</strike></b>
										<p>$.12,ooo/- </p>
										<p><a href="details.php" class="btn btn-primary" role="button">Add cart</a>
									</div>
							</div>
						</div>
						<!-- <div class="col-lg-3">
							<div class="thumbnail">
									<img src="Product/sony2.jpg" height="100px">
									  <div class="caption text-center">
										<h4>Acer Laptop</h4>
										<b>Company price:-<strike>$. 55,000/-</strike></b>
										<p>$.54,ooo/- </p>
										<p><a href="details.php" class="btn btn-primary" role="button">Add cart</a>
									</div>
							</div>
						</div>-->
  
				</div>
	</div>
</div>
