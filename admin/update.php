<?php
    require_once ('../config/config.php');

    $uid = $_POST['uid'];
    $uname = $_POST['uname'];
    $uphone = $_POST['uphone'];
    $uemail = $_POST['uemail'];
    $ucertificate = $_POST['ucertificate'];
                    
    $edit_query = "UPDATE `user` SET `name`='$uname',`phone`='$uphone',`email`='$uemail', `certificate`='$ucertificate' WHERE `user_id` = '$uid'";
                    
    $res = mysqli_query($connect, $edit_query);

    header("location: view.php");



?>