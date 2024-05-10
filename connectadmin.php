
<?php
if(isset($_POST['name']) || isset($_POST['password'])){

$Username=$_POST['name'];
$Password=$_POST['password'];
$conn=new mysqli('localhost','root','','liquor');
if($conn->connect_error)
{
   die('connection failed :'.$conn->connect_error);
}
else{
$sql = "SELECT * FROM AdminRegister WHERE 'satdobato1' = '$Username' AND 'satdobato1' = '$Password' ";
$result = mysqli_query($conn,$sql) ;
$numrows = mysqli_num_rows($result);
if($numrows > 0)
   {
   header("location:satdobato1ad.php");
 }


 $sql = "SELECT * FROM AdminRegister WHERE 'satdobato2' = '$Username' AND 'satdobato2' = '$Password' ";
$result = mysqli_query($conn,$sql) or die(mysqli_error());
$numrows = mysqli_num_rows($result);
if($numrows > 0)
   {
   header("location:satdobato2ad.php");
 
 }

 $sql = "SELECT * FROM AdminRegister WHERE 'dhapakhel1' = '$Username' AND 'dhapakhel1' = '$Password' ";
$result = mysqli_query($conn,$sql) or die(mysqli_error());
$numrows = mysqli_num_rows($result);
if($numrows > 0)
   {
   header("location:dhapakhel1ad.php");

 }



 $sql = "SELECT * FROM AdminRegister WHERE 'dhapakhel2' = '$Username' AND 'dhapakhel2' = '$Password' ";
$result = mysqli_query($conn,$sql) or die(mysqli_error());
$numrows = mysqli_num_rows($result);
if($numrows > 0)
   {
   header("location:dhapakhel2ad.php");
 
 }


 $sql = "SELECT * FROM AdminRegister WHERE 'koteshwor1' = '$Username' AND 'koteshwor1' = '$Password' ";
$result = mysqli_query($conn,$sql) or die(mysqli_error());
$numrows = mysqli_num_rows($result);
if($numrows > 0)
   {
   header("location:koteshwor1ad.php");

 }

 $sql = "SELECT * FROM AdminRegister WHERE 'koteshwor2' = '$Username' AND 'koteshwor2' = '$Password' ";
$result = mysqli_query($conn,$sql) or die(mysqli_error());
$numrows = mysqli_num_rows($result);
if($numrows > 0)
   {
   header("location:koteshwor2ad.php");
 
 }

 $sql = "SELECT * FROM AdminRegister WHERE 'bhaktapur1' = '$Username' AND 'bhaktapur1' = '$Password' ";
$result = mysqli_query($conn,$sql) or die(mysqli_error());
$numrows = mysqli_num_rows($result);
if($numrows > 0)
   {

   header("location:bhaktapur1ad.php");
 
 }


 $sql = "SELECT * FROM AdminRegister WHERE 'bhaktapur2' = '$Username' AND 'bhaktapur2' = '$Password' ";
$result = mysqli_query($conn,$sql) or die(mysqli_error());
$numrows = mysqli_num_rows($result);
if($numrows > 0)
   {
 
   header("location:bhaktapur2ad.php");
   
 }
 
 
 
 else
   {
    echo 'PLEASE ENTER CORRECT USERNAME AND PASSWORD';
   }
}
  
}
?>

