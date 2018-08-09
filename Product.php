<?php include('header.php');
include('sidebar.php');?>
<?php
mysql_connect("localhost","root","");
 mysql_select_db("amol");
 if (isset($_POST['submit']))
{
$name=$_POST['name'];
$qty=$_POST['qty'];
$price=$_POST['price'];
$date=$_POST['date'];
$brndname=$_POST['brndname'];

$insert="insert into Product(Name,Qty,Price,Date,Brand_name)values('$name','$qty','$price','$date','$brndname')";
$sql=mysql_query($insert);
echo "Insert Product";
}
?>

<div class="col-lg-10">

<div class="row">
                <div class="col-lg-7">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Product Added Form
                        </div>
						<div class="panel-body">
						

								<form class="form" method="post">
									<div class="form-group">
                                            <label>Product Name</label>
                                            <input name="name" class="form-control" placeholder="Enter Product Name....">
                                        </div>
										<div class="form-group">
                                            <label> Product Quentity</label>
                                            <input name="qty" class="form-control" placeholder="Enter Product Quentity">
                                        </div>
										<div class="form-group">
                                            <label>Product Price </label>
                                            <input name="price" class="form-control" placeholder="Enter Product Price..">
                                        </div>
										<div class="form-group">
                                            <label> Manufacture Date</label>
                                            <input name="date" class="form-control" placeholder="eg. 26/3/2016">
                                        </div>
										<div class="form-group">
                                        
                                            <label>Brand Name </label>
											<input name="brndname" class="form-control" placeholder="eg. sony etc..">
                                        </div>
										
										
										
										
							
                                     
														<hr>
														<div class="form-group">
															<input type="button" name="submit" class="btn btn-info" value="Save">
														
														
															<input type="button" name="update" class="btn btn-info" value="Update">
														
															<input type="button" name="delete" class="btn btn-info" value="Delete">
														
															<input type="button" name="search" class="btn btn-info" value="Search">
														</div>
										 </div>
										 
								</form>
								</div>
</div>

<?php include('footer.php');?>