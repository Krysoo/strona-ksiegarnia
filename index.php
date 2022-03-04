<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ksiegarnia</title>
    <link rel="stylesheet" href="style.css">
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
        <a href="index.php">Strona glowna</a>
        <a href="#">Kontakt</a>
        <a href="#">O nas</a>
        <!-- <a href="#"></a> maybe something later -->
    </div>

    <div id="header">
        <button class="openbtn" onclick="checkIfNavIsOpened()">&#9776;</button>
        <h1 id="logo">Ksiegarnia</h1>
    </div>

    <div id="query">
        <form action="query.php" method="POST">
            <input type="text" name="query" />
            <button id="queryButton">Wyślij</button>
        </form>
    </div>
</body>
</html>