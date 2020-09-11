<?php
    include 'connec.php';
    session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $DTID = mysqli_real_escape_string($conn, $_POST['MoogId']);
    $Username = mysqli_real_escape_string($conn, $_POST['Uname']);
    $Password = mysqli_real_escape_string($conn, $_POST['Pass']);
    $PRenter = mysqli_real_escape_string($conn, $_POST['repass']);
    

    if(strcmp($Password,$PRenter) == 0){
        
    
        $sql = "INSERT into passu (MoogId, Uname, Pass) VALUES ('$DTID', '$Username', '$Password')";
        if($conn->query($sql) === true){
            header('location: test.php');
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
       }
    }
    
    
    else{
        echo '<script type="text/javascript">alert("Passwords Must Match")</script>';
        header('signup2.php');}
    
}
?>