<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "goldgym"; 

$conn = new mysqli($servername, $username, $pass, $dbname);

if(!$conn->connect_error){
    // echo "<h1>connection successfull!</h1>";
}
?>