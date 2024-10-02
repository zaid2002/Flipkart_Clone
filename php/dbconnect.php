<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flipmart";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die ("Error");
}


?>