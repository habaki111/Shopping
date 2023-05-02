<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./navbar/style.css">
</head>

<body>
    <nav>
        <div>
            <a href="#">Home</a>
        </div>

        <div>
            <a href="#">about</a>
        </div>

        <div>
            <form>
                <input type="text" name="search" placeholder="ค้นหา">
                <button>search</button>
            </form>
        </div>

    </nav>
    <div class="shadow"></div>
</body>

</html>

<style>
    nav {
    display: flex;
    margin: 0 auto;
    padding: 5px 0 0 0;
    justify-content: center;
    align-items: center;
}

div {
    margin: 2px;
    padding: 6px;
}

a {
    font-size: 20px;
    text-decoration: none;
}

.shadow {
    box-shadow: 0px 3px 0px #6ed6ff;
    padding: 1px;
    margin: 1px;
}
</style>
