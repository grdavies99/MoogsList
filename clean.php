<?php
function clean($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$test = "<script>location.href('http://www.hacked.com')</script>";
echo clean($test);

?>