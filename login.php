<?php
session_start();
$user = $_POST["inputEmail"];
$pass = $_POST["inputPassword"];
//==============================
$dbuser = "admin@gmail.com";
$dbpass = "admin123";
//==============================
if($user == $dbuser && $dbpass == $dbpass){
    echo '<h1>SELAMAT SUKSES</h1>';
} else {
    if(isset($_SESSION["salah"])){
        $_SESSION["salah"]++;
    } else{
        $_SESSION["salah"] = 1;
    }
    header("location:index.php");
}