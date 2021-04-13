<?php

$login = "admin";
$password = "password";
$log = $_POST['login'];
$pass = $_POST['password'];

if ($log == $login && $pass == $password){
    header('Location: ../admin-panel.php');
    session_start();
    $_SESSION["login"] = $log;
    $_SESSION["password"] = $pass;
} 

// elseif ($log != $login and $pass == $password){
//     echo "<script> alert('Error log in') </script>";
//     // header('Location: ../');
    
// }

// elseif ($log == $login and $pass != $password){
//     echo "Error password";
// }

else{
    // echo "log in and password error";
    
    header('Location: ../');
}