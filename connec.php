<?php 
$username = "GarrettDavies";
$host = "localhost";
$password = "Highjump99";
$dbname = "DormTrooper";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn -> connect_error){
    die ('connection failed: '.$conn->connect_error);
}
//echo "Connected!";
    
//$sql = "INSERT INTO login (name, password)
//VALUES ('root', 'password')";
//
//if(mysqli_query($conn, $sql)){
//    echo "New record created!";
//}
//else{
//    echo "error: ".$sql."<br>".mysqli_error($conn);
//}
?>