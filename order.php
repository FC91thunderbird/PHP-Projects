<?php
include('header.php');
include('sidebar.php');?>

<head>
<style>
.text
{
	width:50px;
}
body{
	background: url('pic/body/ab2.jpg')  no-repeat center center fixed;
}
</style>
</head>


	<div class="col-lg-10">
		<div class="panel panel-danger">
			<div class="panel-heading">
			 See Our Order
			</div>
		</div>
		
		<div class="panel-body">
			<table class="table">
					<tr>
						<th>Remove</th>
						<th>Product</th>
						<th>Quentyty</th>
						<th>Total Price</th>
						
					</tr>
					
				
					<tr>
						<td><input type="checkbox" name="check"></td>
						<td><img src="Pics/ASUS-A52JR.jpg" height="100px"></td>
						<td><input type="text" name="qty" width="30px" class="text"></td>
						<td>Rs. 36,230/-</td>
					</tr>	
					<tr>
						<td><input type="checkbox" name="check"></td>
						<td><img src="Pics/sony (4).jpg" height="100px" ></td>
						<td><input type="text" name="qty" class="text"></td>
						<td>Rs. 31,000/-</td>
					</tr>	
					
			</table>
			<h5>Sub Total:- Rs. <b><u>63,230 /..</u></b></h5>
	</div>
			
		<!--<div class="col-lg-10">
			
						<br><p>Available Options :</p>
					<ul>
						Color:
							<select>
							<option>Silver</option>
							<option>Black</option>
							<option>Dark Black</option>
							<option>Red</option>
							</select>
						
			
						Size:
							<select>
							<option>Large</option>
							<option>Medium</option>
							<option>small</option>
							<option>Large</option>
							<option>small</option>
						</select>
			
						Quality:<select name="qty">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</ul>-->
					
						
							<form class="form-group">
                                            <input type="submit"  name="update_cart" class="btn btn-primary" value="Update Cart">
											<a href="index.php" class="btn btn-primary" value="">Continue Shopping</a>
											<a href="guest.php"><b>Checkout</b></a>
                            
							</form>
		</div>
	
<?php 
if(isset($_POST['update_cart']))
{
	$qty=$_POST['qty'];
	$update="update cart set Qty='$qty'";
	$run=mysql_query($update);
	
	$_SESSION['qty']=$qty;
	$total=$total*$qty;
}
?>	

<?php 
if(isset($_POST['continueshop']))
{?>
		<script>window.location:"index.php";</script>
<?php }?>

<?php include('footer.php');?>