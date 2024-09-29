<?php
$nom=$_POST['username'];
$pass=$_POST['password'];
$mail=$_POST['email'];
$identite=$_POST['identite'];
//connect with database
$conn=mysqli_connect("localhost","root","","formation");

//echo "connect a database";
$requete="INSERT INTO membre (usename,password,email,Numero_Identite) VALUES('$nom','$pass','$mail','$identite')";
//executer en formation la requete 
$query=mysqli_query($conn,$requete);
//if query true
if(isset($query)){
//charger la page suivante
header('Location: showPass.php'); 

}
else{
    echo "error ";
}
?>