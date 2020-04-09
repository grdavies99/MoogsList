<?php
    include 'connec.php';
    session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $fname = mysqli_real_escape_string($conn, $_POST['FName']);
    $lname = mysqli_real_escape_string($conn, $_POST['LName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $zip = mysqli_real_escape_string($conn, $_POST['zip']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    
    $sql = "INSERT into users (Fname, LName, email, address, city, state, zipCode, phoneNum) VALUES ('$fname', '$lname', '$email', '$address', '$city', '$state', '$zip', '$phone')";
    
    
    if($conn->query($sql) === true){
        setcookie('DTID',mysqli_insert_id($conn), time()+86400);
        header('location: signup2.php');
    }
    else{
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    
}
?>