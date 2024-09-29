<?php 
$newCode=$_POST['new'];
$conn=mysqli_connect("localhost","root","","formation");
$sql="UPDATE motpasse SET name='$newCode' WHERE id=1 ";
$req=mysqli_query($conn,$sql);
if($req)
header('location: interface.php');
?>