<?php
require_once '../dbconfig.php';
session_start();
$login = "admin";
$password = "password";
if($_SESSION["login"] != $login || $_SESSION["password"] != $password){
    header('Location: /php-mysql-connect/admin');
}
$id = $_GET['id'];
mysqli_query($data_connect,"DELETE FROM `informatic` WHERE `informatic`.`id` = $id");
header('Location: ../admin-panel.php#computer_science');
