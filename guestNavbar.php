<?php session_start();
include('config.php');
?>
<html>

<head>
<title>E-Commerce</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/modern-business.css" rel="stylesheet">	   
    <link href="css/bootstrap.css" rel="stylesheet">

    

</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

	  <a class="navbar-brand" href="index.html">
        <img alt="Brand" src="pic/head.png"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav nav-pills navbar-right">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">All Product</a>
                    </li>
                    <li>
                        <a href="guest.php">My Account</a>
                    </li>
					<li>
                        <a href="cart.php">Shopping Cart</a>
                    </li>
					<li>
                        <a href="#"> Contact Us</a>
                    </li>
                   <!-- <li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									Login Panel <span class="caret"></span>
							</a>
									<ul class="dropdown-menu">
										<li><a href="#">Admin</a></li>
										<li><a href="#">Guest</a></li>
												
									</ul>
					</li>
                    
				</ul>
            </div>
            <!-- /.navbar-collapse -->
        
		</div>
        <!-- /.container -->
    </nav><hr>
	
	<div class="row">
	<div class="container">
	<div class="col-lg-10">
	
	</div>
		
	<?php include('sidebar2.php');?>
	</div>
	</div>
	
	<?php include('footer.php');?>