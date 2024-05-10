<?php 
$conn=mysqli_connect('localhost','root','','liquor');
$s=mysqli_query($conn,"SELECT * FROM product");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="delete.css">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Liquor service</title>

</head>
<body>
	<div class="top">
     <h1>WELCOME ADMIN 
    <a class=" tag1" href="adminlogin.php">Logout</a> <br>
	</h1>
</div>
 <div class="cat">
 
 	<div class="cat1">
 		<a href="insert.php">Add Items</a>
 	</div>
 	<div class="cat1"> 
 		<a href="delete.php">View Items</a>
	
 	</div>
 	<div class="cat1">
 		<a href="order.php"> Order Details</a>
 	</div>
 		 <div class="cat1">
 	 	<a class="tag2" href="try.php">View Shop</a>
 	 </div>

 </div>
 <div class="cat2">
	<table border="3" align="center">
	<tr>
		<th>Insert_ID</th>
		<th>Name</th>
		<th>Price</th>
		<th>Image</th>
		<th colspan="2">Operation</th> 
		
	
	</tr>
	<?php
	while ($r=mysqli_fetch_array($s))
	 {

	?>
	  <tr>
    	<td><?php echo $r['Insert_ID'];?></td>
    	<td><?php echo $r['Name'];?></td>
    	<td><?php echo $r['Price'];?></td>
    	<td><?php echo $r['Image'];?></td>
    	<td>
    	<a href="deleteconnect.php?i=<?php echo $r['Insert_ID'];?>" class="btn"> Delete</a>
    	</td>
    	<td>
    	<a href="update1.php?i=<?php echo $r['Insert_ID'];?>" class="btn"> Update</a>
    	</td>
  
    	</tr>
    	<?php
    }

    	?>


	</table>
	</div>

</body>
</html>