<?php
$conn = mysqli_connect("localhost","root","","sample");


if (isset($_POST['AddNewRecord'])) {

	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$address=$_POST['address'];
	
	mysqli_query($conn,"insert into user (firstname, lastname, address) values ('$firstname', '$lastname', '$address')");
	header('location:index.php');
}

if (isset($_POST['Edit1'])) {
	

	$id=$_GET['id'];
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$address=$_POST['address'];
	
	mysqli_query($conn,"update user set firstname='$firstname', lastname='$lastname', address='$address' where userid='$id'");
	header('location:index.php');

}


	
if (isset($_GET['del'])) {
	
	$id=$_GET['del'];
	mysqli_query($conn,"delete from user where userid='$id'");
	header('location:index.php');
}


?>

