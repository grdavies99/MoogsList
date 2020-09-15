<?php
    include 'connec.php';
    session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $uName = mysqli_real_escape_string($conn, $_POST['Username']);
    $passW = mysqli_real_escape_string($conn, $_POST['password']);
    
    $sql = "SELECT * FROM passu WHERE Uname = '$uName' and Pass = '$passW'";
    echo $sql;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if($row['active'] == null){
        echo'<script type="text/javascript">alert(Username or password was incorrect);</script>';
        header('location: login.php');
    }
    $active = $row['active'];
    
    $count = mysqli_num_rows($result);
    
    if($count >= 1){
        setcookie('login_user',$row["MoogID"],time()+86400*180);
        
        header('location: index.php');
    }
}
?>
