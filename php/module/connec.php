<?php
require("params.inc.php");
//$link=mysqli_connect($host,$user,$password,$dbname) or die("erreur de connexion!".mysqli_error($link));
try{
$link=new PDO('mysql:host=localhost;dbname=dbzend', 'root', 'root');
}
catch(Exception $e)
{
	die('Erreur :'.$e->getMessage());
}
?>