<?php

$server_name    ="localhost";
$user           ="root";
$password       ="";
$database_name  ="origingamer";

$connect        = mysqli_connect($server_name,$user,$password,$database_name);
if(!$connect){
    die('Erreur :' .mysqli_connect_error());
}

?>