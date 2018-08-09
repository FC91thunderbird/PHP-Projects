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
					<h2>Laptop Product</h2>
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
									<img src="Product/ASUS-A52JR.jpg" height="100px">
									  <div class="caption text-center">
										<h4>Asus Laptop</h4>
										<b>Company price:-<strike>$. 36,000/-</b></strike>
										<p>$.32,ooo/- </p>
										<p><a href="details.php" class="btn btn-primary" role="button">Add cart</a>
									</div>
							</div>
						</div>
						
						<div class="col-lg-3">
							<div class="thumbnail">
									<img src="Product/dell.jpg" height="100px">
									  <div class="caption text-center">
										<h4>Dell Laptop E-series</h4>
										<b>Company price:-<strike>$. 46,100/-</b></strike>
										<p>$.31,ooo/- </p>
										<p><a href="details.php" class="btn btn-primary" role="button">Add cart</a>
									</div>
							</div>
						</div>
					   
					   <div class="col-lg-3">
							<div class="thumbnail">
									<img src="Product/dell1.jpg" height="100px">
									  <div class="caption text-center">
										<h4>Dell Compani Laptop</h4>
										<b>Company price:-<strike>$. 34,000/-</strike></b>
										<p>$.29,4oo/- </p>
										<p><a href="details.php" class="btn btn-primary" role="button">Add cart</a>
									</div>
							</div>
						</div>
						 <div class="col-lg-3">
							<div class="thumbnail">
									<img src="Product/dell6.jpg" height="100px">
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
									<img src="Product/laptop_PNG5935.png" height="100px">
									  <div class="caption text-center">
										<h4>Acer Laptop</h4>
										<b>Company price:-<strike>$. 37,000/-</strike></b>
										<p>$.36,ooo/- </p>
										<p><a href="details.php" class="btn btn-primary" role="button">Add cart</a>
									</div>
							</div>
						</div>
						 <div class="col-lg-3">
							<div class="thumbnail">
									<img src="Product/sony2.jpg" height="100px">
									  <div class="caption text-center">
										<h4>Acer Laptop</h4>
										<b>Company price:-<strike>$. 55,000/-</strike></b>
										<p>$.54,ooo/- </p>
										<p><a href="details.php" class="btn btn-primary" role="button">Add cart</a>
									</div>
							</div>
						</div>
  
				</div>
	</div>
</div>
