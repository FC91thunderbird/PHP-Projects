<?php session_start();
include('config.php');
?>
<html>

<head>


    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/modern-business.css" rel="stylesheet">	   
    <link href="css/bootstrap.css" rel="stylesheet">

    
<style>
.navbar-amol
 {
    background-color: #222;
    border-color: #080808;
    height: 13px;
}
.navbar-Amol {
    margin-left: -15px;
    color: white;
    font-size: 27px;
    font-style: italic;
	    margin-top: 2px;
}
.navbar-Amol>a
{
	text-decoration:none;
}
.navbar-inverse
{
	color:red;
}
.navbar-inverse .navbar-toggle {
    border-color: #fff;
}
.nav > li > a {
    position: relative;
    display: block;
    padding: 10px 15px;
    font-size: 14px;
    color: darkturquoise;
}
.nav > li > a:hover, .nav > li > a:focus {
    text-decoration: none;
    background-color: #eee;
    color: black;
}
.navbar-inverse .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a:focus {
    color: #fff;
    background-color: transparent;
    border-bottom: 2px solid;
}
.btn-primary {
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
    margin-top: 7px;
    margin-left: 7px;
}
body{
	background: url('pic/body/body.jpg') no-repeat center center fixed;
}
.search
{
	margin-left: 1057px;
	    margin-top: 3px;
}
</style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

	  
        <!--<img alt="Brand" src="pic/title.jpg" height="30px">-->
            
			<a class="navbar-Amol" href="index.php"><img src="pic/Icon/cart-logo.png">E-Commerce</a>
			</div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php"><img src="pic/Icon/house.png"> Home</a>
                    </li>
                    <!--<li>
                        <a href="#"><img src="pic/Icon/produits.png" height="23px"> All Product</a>
                    </li>-->
					<li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><img src="pic/Icon/clients.png" height="25px"> My Account <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="guest.php"> <img src="pic/Icon/security.png" height="30px">  Login User</a>
                                    </li>

									<li>
                                        <a tabindex="-1" href="Registration.php"><img src="pic/Icon/add.png" height="30px"> Create new Account</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="order.php"><img src="pic/Icon/edit_icon.jpg" height="30px"> See Order</a>
                                    </li>
									
                                    <li>
                                        <a tabindex="-1" href="index.php"><img src="pic/Icon/alert-failure.gif" height="30px"> Logout</a>
                                    </li>
                                </ul>
                            </li>
							<li>
                        <a href="order.php"><img src="pic/Icon/cart.png"> see Cart Items</a>
                    </li>
                    <li>
                        <a href="feedback.php"><img src="pic/Icon/page.png" height="25px"> Feedback</a>
                    </li>
					
					<li>
                        <a href="contact.php"><img src="pic/call.png" height="25px"> Contact Us</a>
                    </li>
					
					<button class="btn btn-primary" type="button">Cart  <span class="badge">0</span>
							<!--<li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">User List</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Search</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Permissions</a>
                                    </li>
                                </ul>
                            </li>-->
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
    </nav>
	
	<div class="search">
		<img src="pic/Icon/search4.jpg"><input type="text" width="30px" placeholder="Search for...">
						  </span>
			</div>
			<hr>
	
	
	
	