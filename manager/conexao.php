<?php

$host="localhost";
$user="";
$password="";
$db="";

$conn= mysqli_connect($host, $user, $password, $db);
if(mysqli_connect_error()){
    echo "Falha na conexão: ".mysqli_connect_error();
}
?>