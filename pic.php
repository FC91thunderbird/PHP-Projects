<style>
.carousel-inner > .item > img, .carousel-inner > .item > a > img {
    line-height: 1;
    margin-left: 149px;
}
.slide-content {
    margin-left: 470px;
    margin-top: -169px;
}
.thumbnail > img, .thumbnail a > img {
    margin-right: auto;
    margin-left: auto;
    height: 110px;
}
.carousel-control.left {
    background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
    background-image: -o-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
    background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
    background-image: linear-gradient(to right, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
    background-repeat: repeat-x;
    margin-top: 105px;
    width: 47px;
}
.carousel-control.right {
    background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
    background-image: -o-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
    background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
    background-image: linear-gradient(to right, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
    background-repeat: repeat-x;
    margin-top: 105px;
    width: 47px;
}
.cart
{
	margin-left:9px;
}
	</style>

<!--<div class="cart">
<div class="btn btn-primary"> cart Item <img src="pic/Icon/cart-logo.png" height="35px"><span class="badge">2</span>
</div>-->
	<div class="col-lg-10">
		<div class="panel panel-primary">
			<div class="panel-heading text-center">
				<h3><b>Today Best Offer</b></h3>
			</div>
		</div>
	</div>



		<div class="col-lg-10">
			<div class="carousel slide" id="screenshot-carousel" data-ride="carousel">

			<div class="carousel-inner">
				<div class="item active">
					<img class="thumbnail img-responsive" src="pic/feature-pic1.jpg">	
					<div class="slide-content">
						
											 <h1>Clearance<br><span>SALE</span></h1>
											 <h2>UPTo 20% OFF</h2>
										
											<h4>Get to Know More About Our </h4>							               
					</div>
				
			</div>
				
	<div class="item">
		<img class="thumbnail" src="pic/feature-pic2.jpg">
		<div class="slide-content">
						
											 <h1>Clearance<br><span>SALE</span></h1>
											 <h2>UPTo 20% OFF</h2>
										
											<h4>Get to Know More About Our </h4>							               
					</div>
	</div>
	<div class="item">
		<img class="thumbnail" src="pic/feature-pic3.jpg">
	
		<div class="slide-content">
						
											 <h1>Clearance<br><span>SALE</span></h1>
											 <h2>UPTo 20% OFF</h2>
										
											<h4>Get to Know More About Our </h4>							               
					</div>
		</div>
	<div class="item">
		<img class="img-responsive img-thumbnail" src="pic/feature-pic4.jpg" alt="Imgimde">
		<div class="slide-content">
						
											 <h1>Clearance<br><span>SALE</span></h1>
											 <h2>UPTo 20% OFF</h2>
										
											<h4>Get to Know More About Our </h4>							               
					</div>
	</div>
</div>
			<img src="pic/Icon/arrow-left.png" height="40px" href="#screenshot-carousel" class="left carousel-control" data-slide="prev">
			                   
			
			<img src="pic/Icon/arrow-right.png" href="#screenshot-carousel" class="right carousel-control" data-slide="next">
			
		

</div>
</div>
<hr>




<div class="col-lg-10"><br>
    <div class="panel panel-primary">
				<div class="panel-heading">
					All Product
				</div>
				<div class="panel-body">
				<?php 
					include('config.php');
					$select="select * from main order by title";
					$sql=mysql_query($select);
					while($data=mysql_fetch_array($sql))
					{?>
					
						<div class="col-lg-3">
							<div class="thumbnail img-responsive">
									<img src="Pics/<?php echo $data['Image'];?>" height="100px"> 
									  <div class="caption text-center">
										<h4><?php echo $data['Title'];?></h4>
										<p><?php echo "Price:-".$data['Price'];?></p>
										
									
									</div>
									<input type="submit" name="addcart" class="btn btn-primary" role="button" value="Add to cart"> 
									<a href="details.php" class="btn btn-primary">Buy Now</a>
							</div>
							
						</div>
					  
					<?php }?>
					  
  
				</div>
	</div>
</div>
  
  <?php include('footer.php');?>