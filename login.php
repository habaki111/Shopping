<?php 
    session_start();

    if(isset($_GET['logout'])){
        session_unset();
        header('location: ./login.php');
        die;
    }

    if(isset($_POST['submit'])){
        require('./database.php');
        $res = $DB -> query("SELECT * FROM member WHERE 

        username_sp = '{$_POST['username']}' AND
        password_sp = '{$_POST['password']}'");

        $user = mysqli_fetch_assoc($res);
        if($user){
            $_SESSION['member'] = $user['id_sp'];
            header('location: ./ ');
            die;

        }else{
            $msg = "Not found this username";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php   require('./navbar/navbar.php') ?>
        
        <?php echo $msg ?? ""; ?>
        <form  method="post">
            <div>
            <label for="username">username</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" name="password">
        </div>
        <button name="submit">submit</button>
    </form>
</body>
</html>    
    