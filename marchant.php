<?php include('header.php');
include('sidebar.php');
?>

<?php 
if(isset($_POST['submit']))
{
$title=$_POST['title'];
$price=$_POST['price'];
$desc=$_POST['desc'];
$userfile=$_POST['userfile'];
$insert="insert into main(Title,Price,Discription,Image)values('$title','$price','$desc','$userfile')";
$sql=mysql_query($insert);

$uploaddir = 'Pics/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$filename= $_FILES['userfile']['name'];
echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))
{
    echo "File is valid, and was successfully uploaded.\n";
} else {
   // echo "Possible file upload attack!\n";
}
}

?>





<div class="container">
                <div class="col-lg-7">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            marchant Added Product
                        </div>
						<div class="panel-body">
						

								<form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
									<div class="form-group">
											<label>Product Title</label>
                                            <input name="title" class="form-control" placeholder="Enter title" required="required">
                                     </div>
									 <div class="form-group">
											<label>Price</label>
                                            <input name="price" class="form-control" placeholder="Enter Price" required="required">
                                     </div>
									 <div class="form-group">
											<label>Description</label>
                                            <input name="desc" class="form-control" placeholder="Product Description" required="required">
                                     </div>
									 <div class="form-group">
											<label>Image</label>
                                          <input type="file" name="userfile" id="userfile">
                                     </div>
									 <br>
									 <div class="form-group">
										<input type="submit" name="submit" class="btn btn-primary" value="Save info">
									</div>
								</form>
						</div><!--body-->
					</div>
				</div>
	
</div><!--row-->


<?php include('footer.php');?>