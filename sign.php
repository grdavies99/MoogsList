<?php
    include 'connec.php';
    session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $fname = mysqli_real_escape_string($conn, $_POST['FName']);
    $lname = mysqli_real_escape_string($conn, $_POST['LName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    
    $sql = "INSERT into users (Fname, LName, Email,  phone) VALUES ('$fname', '$lname', '$email',  '$phone')";
    
    
    if($conn->query($sql) === true){
        setcookie('MoogId',mysqli_insert_id($conn), time()+86400);
        header('location: signup2.php');
    }
    else{
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    
}
?>