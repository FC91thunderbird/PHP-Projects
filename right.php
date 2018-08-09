<?php
include('header.php');

?>
<head>
	<style>
			body{
				background: url('pic/body/Winter.jpg') no-repeat center;
			}
	</style>
</head>


<div class="col-lg-2">
</div>
<div class="col-lg-10">
	<div class="panel panel-primary">
		<div class="panel-heading text-center">
			Customer Account
		</div>
	</div>
</div>  
<div class="col-lg-2">
</div>
<div class="col-lg-9">
			<h2><b><i>Welcome -</i></b> <small>Vikas Kadam</small></h2>
			</div>
		<div class="col-lg-2">
			<div class="navbar navbar-inverse">
				
                
                    <ul class="nav nav-list nav-stacked">
                        <li class="active">
                            <a href="#"><i class="icon-chevron-right"></i> Edit Account</a>
                        </li>
						<li>
                            <a href="#"><i class="icon-chevron-right"></i> Delete Account</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-chevron-right"></i> See Order</a>
                        </li>
						
						<li>
                            <a href="#"><i class="icon-chevron-right"></i> Reset Password</a>
                        </li>
						<li>
                            <a href="#"><i class="icon-chevron-right"></i> Logout</a>
                        </li>
						
			</div>	
		</div>
			<div class="col-lg-8">
				<table class="table">
										<tr>
											<th>ID</th>
											<th>Total product</th>
											<th>Due amt</th>
											<th>Invoice no</th>
											<th>Date</th>
											<th>Paid/Unpaid</th>
											<th>Conform payment</th>
										</tr>
										
										<tr>
											<td>29</td>
											<td>Dell Laptop</td>
											<td>36,230/-</td>
											<td>P1265</td>
											<td>2/3/2016</td>
											<td>Unpaid</td>
											<td><a href="#">Edit-delete</a></td>
										</tr>
										<tr>
											<td>32</td>
											<td>Lg</td>
											<td>32,000/-</td>
											<td>P001265</td>
											<td>2/3/2016</td>
											<td>Unpaid</td>
											<td><a href="#">Edit-delete</a></td>
										</tr>
			</div>
			
<?php include('footer.php');?>