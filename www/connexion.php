<?php
  
$con=mysqli_connect('127.0.0.7','root','root','partiel');

if(!$con){
   die('erreur de connexion a la base de donnée');
}else{
   }

$pdo= new PDO('mysql:dbname=partiel;host=localhost','root','root');
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>