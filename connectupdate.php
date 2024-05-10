<?php
if(isset($_POST['update'])){
	$conn=mysqli_connect('localhost','root','','liquor');
	$insert_ID=$_POST['Insert_ID'];
	$name=$_POST['name22'];
	$price=$_POST['price22'];

$file_name=$_FILES['image']['name'];
$file_size=$_FILES['image']['size'];
$file_tmp=$_FILES['image']['tmp_name'];
$file_type=$_FILES['image']['type'];
 
 move_uploaded_file($file_tmp, "media/".$file_name);

mysqli_query($conn,"update product set Name='$name',Price='$price',Image='$file_name' where Insert_ID='$insert_ID'");
header('location:delete.php');
}
?>