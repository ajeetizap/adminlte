<?php
$basedir = realpath(__DIR__);
include_once($basedir . '/users_file/user.php');

$user_check=$_SESSION['login_user'];

$user_check_id=$_SESSION['user_id'];


if(!isset($_SESSION['login_user'])){
    header("location:login.php");
}

?>


