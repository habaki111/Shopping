<?php 
require("./dbconnect.php");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM `member` WHERE username_sp = '$username' AND password_sp = '$password' ";

$res = $DB->query($sql);

if($res->num_rows == 1){            
    $member = $res->fetch_assoc();  
    echo $member['rank_sp'];
}if($member['rank_sp'] == 2){
    echo "admin";
    header("location: admin.php");  
}else{
    header("location: home.php");
}
