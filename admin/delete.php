<?php
 require_once('../config/config.php');
$id= $_GET['user-id'];
$del_query = "DELETE FROM `user` WHERE `user_id` = $id";
$result = mysqli_query($connect, $del_query);

if ($result) {
    header('location:view.php');
}
?>