<?php
    include 'connec.php';
    session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $DTID = mysqli_real_escape_string($conn, $_POST['DTID']);
    $Username = mysqli_real_escape_string($conn, $_POST['uName']);
    $Password = mysqli_real_escape_string($conn, $_POST['pass']);
    
    $sql = "INSERT into passName (DTID, Username, Password) VALUES ('$DTID', '$Username', '$Password')";
    
    if($conn->query($sql) === true){
        header('location: test.php');
    }
    else{
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    
}
?>