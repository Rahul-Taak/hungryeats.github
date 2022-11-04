<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "hungryeats";

$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn){
    die("Connection Failed");
}

?>