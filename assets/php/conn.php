<?php

$username = "root";
$password = "";
$database = "eipl_db";
$server = "localhost";

$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn){
    die("Error code: ".mysqli_connect_error());
}

?>