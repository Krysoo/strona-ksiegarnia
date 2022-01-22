<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ksiegarnia</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login-style.css">
    <script type="text/javascript" src="main.js"></script>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap" rel="stylesheet">
    <!-- fonts -->

</head>
<body>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="checkIfNavIsOpened()">&times;</a>
        <a href="login.php">Zaloguj sie</a>
        <a href="index.html">Strona glowna</a>
        <a href="#">Kontakt</a>
        <a href="#">O nas</a>
        <!-- <a href="#"></a> maybe something later -->
    </div>

    <div id="header">
        <button class="openbtn" onclick="checkIfNavIsOpened()">&#9776; Menu</button>
        <h1 id="logo">Ksiegarnia</h1>
    </div>

    <div id="login">
        <form action="login.php" method="POST">
            <p>
                Login: <br />
                <input type="text" name="login" />
            </p>
            <p>
                Haslo: <br />
                <input type="password" name="password" />
            </p>
            <p>
                <input type="submit" name="submitButton" value="Zaloguj sie" />
            </p>
        </form>
    </div>
</body>
</html>

<?php 



?>