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

    <div id="login">
    
    <?php 
        
        $login = $_POST['login'];
        $pass = $_POST['password'];

        $connect = mysqli_connect("localhost", "root", "", "ksiegarnia");

        if ($login != "root" && $pass != 123) {
            header('Location: login.php');
        }
        
        if ($login == "root" && $pass == 123) {
            echo "<p>Witaj " . $login . "! </p>";
            echo "<p><button onclick='handleClick()' style='margin-left: 1rem;'> Dodaj ksiazke! </button></a></p>";
        }

        mysqli_close($connect);
    
  ?>
</div>
    <div style="display: none;" id="hidden">
        <form action="action.php">

            Nazwa ksiazki: <input type="text" name="nazwa" />
            Miejsce wydania: <input type="text" name="miejsce" />
            Rok wydania: <input type="text" name="rok" />
            Wydawnictwo: <input type="text" name="wydawnictwo" />
            Temat: <input type="text" name="temat" />
            Opis: <input type="text" name="opis" />
            <button>Cofnij</button>
            <button>Dodaj</button>
            
        </form>

        <?php 
        


        ?>
    </div>

        </div>
    </div>
</body>
</html>
