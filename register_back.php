<?php 
require("./dbconnect.php"); 

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];

echo "Hello world" ;
$sql = "SELECT * FROM `member` WHERE username_sp = '$username'";

$res = $DB->query($sql);

if ($res-> num_rows == 0){
    $sql = "INSERT INTO `member`(`id_sp`, `name_sp`, `username_sp`, `password_sp`, `rank_sp`) VALUES (NULL,'$name','$username','$password',1)";
    $res = $DB->query($sql);
    header("location: login.php");
}else{
    header("location: register.php");
}
