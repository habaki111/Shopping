<?php
    session_start();    
    if(isset($_POST['submit'])) {
        require("./database.php");

        $res = $DB->query("SELECT * FROM `member` WHERE username_sp = '{$_POST['username']}' ");

        if($res->num_rows == 0) {
            $DB->query("INSERT INTO `member`(`id_sp`, `name_sp`, `username_sp`, `password_sp`, `rank_sp`) VALUES 
            (null,'{$_POST['name']}','{$_POST['username']}','{$_POST['password']}' , 1)");
            $msg = '</div>register success<div>';

        }else{
            $msg = '</div>this username has already used<div>';
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php require('./navbar/navbar.php'); ?>
    <?php echo $msg ?? ""; ?>   
    <form method="post">
        <div>
            <label for="">name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="username">username</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" name="password">
        </div>
        <div>
            <button name="submit" >click</button>
        </div>
    </form>
</body>
</html>