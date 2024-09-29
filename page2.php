<?php
$nom=$_POST['username'];
$pass=$_POST['password'];
if($pass=='hafsa' && $nom=='hafsa')
{
  header('Location: interface.php');}
else{
$conn=mysqli_connect("localhost","root","","formation");
$requete="SELECT * FROM membre WHERE usename='$nom' AND password='$pass'";
$query=mysqli_query($conn,$requete);

if(isset($query) ){
     $rep=mysqli_fetch_row($query);
     if(isset($rep))
       {header('Location: showPass.php');}
       else
       {
           echo "Wrong password or username ";
       }
}
}
?>