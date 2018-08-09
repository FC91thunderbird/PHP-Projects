<?php session_start();
include('config.php');
?>
<html>

<head>
<title>E-Commerce</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/modern-business.css" rel="stylesheet">	   
    <link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/amol.css" rel="stylesheet">

 <style>   
 .navbar-a {
    margin-left: -15px;
    color: white;
    font-size: 27px;
    font-style: italic;
	    margin-top: 2px;
		position:fixed;
}
.head {
    height: 118px;
    width: 1258px;
	position:fixed;
}
</style>
</head>

<div class="cointainer">
<nav class="navbar navbar-amol">

  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <a class="navbar-a" href="index.php"><img src="../pic/Icon/cart-logo.png">E-Commerce</a>
	 
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav nav-pills navbar-right">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Category</a>
                    </li>
                    <li>
                        <a href="Brand.php">Brand</a>
                    </li>
					<li>
                        <a href="Product.php">Product</a>
                    </li>
					<li>
                        <a href="#">Order List</a>
                    </li>
					<li>
                        <a href="#">Product List</a>
                    </li>
                    <li role="presentation" class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						  Dropdown <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
						  <li><a href="#">Product List</a></li>
						  <li><a href="#">Product List</a></li>
						</ul>
					 </li>
					
                    
				</ul>
            </div>
            <!-- /.navbar-collapse -->
         <img src="../Pic/body/Untitled-7.jpg" class="head">
		</div>
        <!-- /.container -->
    </nav><hr>

<div class="row">
<div class="col-lg-12">
         <div class="col-lg-2">
			<div class="navbar navbar-amol">
				<ul class="nav nav-pills nav-stacked"> 
						<li class="btn-info text-center"><a href="dashboard.php"><b><i><h4><img src="../pic/Icon/icon_dashboard.png" height="25px">  Dashboard</h4></i></b></a></li>
						<li class="active text-center"><a href="Caregory.php">Add Category <img src="../pic/Icon/arrow.png" height="15px"></a></li>

						
				
						<li class="active text-center"><a href="subCat.php">Add Sub-Category <img src="../pic/Icon/arrow.png" height="15px"> </a></li>

						
						
						<li class="active text-center"><a href="Brand.php">Add Brand's  <img src="../pic/Icon/arrow.png" height="15px"></a></li>

						<li class="active text-center"><a href="#">Add Product <img src="../pic/Icon/arrow.png" height="15px"></a></li>
						<li class="active text-center"><a href="customer.php"> See Customer <img src="../pic/Icon/customers.gif" height="30px"></a></li>
						
						<li class="active text-center"><a href="images.php"> See Product List <img src="../pic/Icon/icon_media.png" height="30px"></a></li>
						<li class="active text-center"><a href="#">See Order List</a></li>
						<li class="active text-center"><a href="item.php">Update Product </a></li>
						<li class="active text-center"><a href="logout.php">Admin Log Out <img src="../pic/Icon/alert-failure.gif" height="25px"></a></li>
				</ul>
	
			</div>
		</div>

	


	
	<?php include('../footer.php')?>
	