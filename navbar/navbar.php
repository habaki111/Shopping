<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_navbar.css">
</head>

<body>
    <header class="header">
        <nav>
            <img class="logo" src="home.svg" alt="">
            <ul class="nav_link">
                <li><a href="#">SHOP</a></li>
                <li><a href="#">SHOP</a></li>
                <li><a href="#">SHOP</a></li>
                <li><a href="#">SHOP</a></li>
                <?php
                if(true) { ?>
                <li><a href="#">Admin</a></li>
                <li><a href="#">Admin</a></li>
                <li><a href="#">Admin</a></li>
                <li><a href="#">Admin</a></li>

                <?php } ?>
            </ul>
            <button>submit</button>
        </nav>
    </header>
</body>

</html>