<?php
    include 'connec.php';
    session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $uName = mysqli_real_escape_string($conn, $_POST['Username']);
    $passW = mysqli_real_escape_string($conn, $_POST['password']);
    
    $sql = "SELECT * FROM passname WHERE Username = '$uName' and Password = '$passW'";
    echo $sql;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    
    $count = mysqli_num_rows($result);
    
    if($count >= 1){
        $_SESSION['login_user'] = $row["DTID"];
        
        header('location: index.php');
    }
    else{
        $error = "Your login or password was incorrect";
    }
}
?>
