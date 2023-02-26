<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="register_back.php" method="post">
        <div>
            <h1>Register</h1>
        </div>

        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="text" name="username">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <p>
            <button>submit</button>
        </p>

        <p>
            <a href="login.php">Login</a>
        </p>
    
    
    </form>
</body>
</html>