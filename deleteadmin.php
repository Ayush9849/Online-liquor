<?php
$conn=mysqli_connect('localhost','root','','liquor');
$s=mysqli_query($conn,"select * from shop");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="delete.css">
	<title>Online Liquor Supply</title>
</head>
<body>
	<div class="top">
	<h1> SUPERADMIN 
      <a  class=" tag1" href="sadminlogin.php">Logout</a> <br>
	
</h1>
</div>



 <div class="cat">
     <div class="cat1">
 		<a href="addshop.php">Add Shop</a>
 	 </div>
 	 <div class="cat1"> 
 		<a href="addadmin.php">Add Admin</a>
	 </div>


	 </div>


	 <div class="cat2">
	<table border="3" align="center">
	<tr>
		<th>SHOP_ID</th>
		<th>NAME</th>
		<th>IMAGE</th>
		<th colspan="2">Operation</th> 
		
	
	</tr>
	<?php
	while($r =mysqli_fetch_array($s))
	{
	?>
	    
    <tr>
    	<td><?php echo $r['Shop_id'];?></td>
    	<td><?php echo $r['Name'];?></td>
    	<td><?php echo $r['Image'];?></td>
    	<td>
    	<a href="deleteconnect.php?i=<?php echo $r['Shop_id'];?>" class="btn"> Delete</a>
    	</td>
    	<td>
    		<a href="update.php?i=<?php echo $r['Shop_id'];?>"  class="btn">Update</a>
    	</td>
  
    	</tr>
    	<?php
    	    }
    ?>

	</table>
	</div>

</body>
</html>