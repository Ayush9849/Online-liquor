
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="insert.css">
	<title>Online Liquor Supply</title>
</head>
<body>
	<div class="top">
	<h1>SUPERADMIN 
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


 <div class="reg">
	<form action="connectshop.php" method="post" enctype="multipart/form-data">

		<label class="ln">Name :</label>
		<input type="text" name="name" placeholder="" required><br>
	
		<label class="le">Image :</label>
		<input class="lf" type="file" name="image" placeholder="" required><br>

		<label class="lz"> Please Select The Redirecting File:</label>
		<input class="ll" type="file" name="link" placeholder="" required><br>



	

		<input  class=" submit" type="submit" name="additem" value="Add Shop" class="submit" >
		
	</form>
 </div>



	

</body>
</html>