<?php
$conn=mysqli_connect("localhost","root","","liquor");
if(!$conn)
{
	echo"not connected to database";
}
if(isset($_POST['additem']))
{
$name=$_POST['name22'];
$price=$_POST['price22'];

$file_name=$_FILES['image']['name'];
$file_size=$_FILES['image']['size'];
$file_tmp=$_FILES['image']['tmp_name'];
$file_type=$_FILES['image']['type'];
 
 move_uploaded_file($file_tmp, "media/".$file_name);


$sql="INSERT INTO vodka(Name,Price,Image) VALUES ('$name','$price','$file_name')";
if($conn->query($sql))
	{
header('location:vodka.php');
}
}


?>