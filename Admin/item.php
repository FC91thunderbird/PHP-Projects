<?php include('adminheader.php');?>
<?php
if($_SESSION['id']=="")
{
	?>
	<script>window.location="index.php";</script>
	<?php }?>


<?php 
if(isset($_POST['submit']))
{
$title=$_POST['title'];
$price=$_POST['price'];
$disc=$_POST['disc'];
$userfile=$_POST['userfile'];
$insert="insert into main(Title,Price,Discription,Image)values('$title','$price','$disc','$userfile')";
$sql=mysql_query($insert);

$uploaddir = 'Pics/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$filename= $_FILES['userfile']['name'];
echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
   // echo "Possible file upload attack!\n";
}
}

?>

<div class="row">
                <div class="col-lg-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            <h4>Product Added Form</h4>
                        </div>
						<div class="panel-body">
						

								<form action="#" method="post" enctype="multipart/form-data">
	<div class="form-group">
											<label>Product Title</label>
                                            <input name="title" class="form-control" placeholder="Enter title" required="required">
                                     </div>
									 <div class="form-group">
											<label>Discription</label>
                                            <input name="disc" class="form-control" placeholder="Product Discription...." required="required">
                                     </div>
									 <div class="form-group">
											<label>Type</label>
                                            <input name="type" class="form-control" placeholder="Product Type.." required="required">
                                     </div>
									 <div class="form-group">
											<label>Compani Price</label>
                                            <input name="price" class="form-control" placeholder="Enter Price" required="required">
                                     </div>
									 <div class="form-group">
											<label>Sale Price</label>
                                            <input name="price" class="form-control" placeholder="Enter Price" required="required">
                                     </div>
									 <div class="form-group">
											<label>SKU(stock keeping unit)</label>
                                            <input name="qty" class="form-control" placeholder="Enter quentity" required="required">
                                     </div>
									 
									 <div class="form-group">
											<label>Select Product Image</label>
                                          <input type="file" name="userfile" id="userfile">
                                     </div>
									 <br>
									 <div class="form-group">
										<input type="submit" name="submit" class="btn btn-primary" value="Save info">
										<input type="submit" name="submit" class="btn btn-primary" value="Update">
										<input type="submit" name="submit" class="btn btn-primary" value="Search">
										<input type="submit" name="submit" class="btn btn-danger" value="Delete">
										<input type="submit" name="submit" class="btn btn-primary" value="Cancel">
									</div>
								</form>
						</div><!--body-->
						</div>
						</div>
</div><!--row-->