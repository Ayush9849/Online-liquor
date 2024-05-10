<?php
$Insert_ID=$_GET['i'];
$conn=mysqli_connect('localhost','root','','liquor');
mysqli_query($conn,"delete from product where Insert_ID='$Insert_ID'");
header('location:delete.php');
?>
