<?php
$conn=mysqli_connect("localhost","root","","liquor");
if(!$conn)
{
	echo"not connected to database";
}
if(isset($_POST['additem']))
{
$name=$_POST['name'];

$file_name=$_FILES['image']['name'];
$file_size=$_FILES['image']['size'];
$file_tmp=$_FILES['image']['tmp_name'];
$file_type=$_FILES['image']['type'];
 
 move_uploaded_file($file_tmp, "media/".$file_name);




$file_Name=$_FILES['link']['name'];
$file_size=$_FILES['link']['size'];
$file_tmp=$_FILES['link']['tmp_name'];
$file_type=$_FILES['link']['type'];
 
 move_uploaded_file($file_tmp, "media/".$file_Name);




$sql="INSERT INTO shop(Name,Image,Link) VALUES ('$name','$file_name','$file_Name')";
if($conn->query($sql))
	{
header('location:addshop.php');
}
}


?>