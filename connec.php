<?php 
$username = "GarrettDavies";
$host = "localhost";
$password = "Highjump99";
$dbname = "MoogsList";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn -> connect_error){
    die ('connection failed: '.$conn->connect_error);
}

?>