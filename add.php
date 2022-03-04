<?php 

    $nazwa = $_POST['nazwa'];
    $miejsce = $_POST['miejsce'];
    $rok = $_POST['rok'];
    $wydawnictwo = $_POST['wydawnictwo'];
    $temat = $_POST['temat'];
    $opis = $_POST['opis'];
    $login = $_POST['login'];
    $pass = $_POST['password'];

    if ($login == "root" && $pass == 123) {
        $connect = mysqli_connect("localhost", "root", "", "ksiegarnia");
        $query = mysqli_query($connect, "INSERT INTO ksiazki(tytul, miejsce_wydania, rok_wydania, wydawnictwo, temat, opis) VALUES ('".$nazwa."', '".$miejsce. "', '".$rok."', '" .$wydawnictwo . "', '" .$temat. "', '" .$opis. "') ");

        mysqli_close($connect);
        header("Location: index.php");
    }
    else {
        header("Location: login.php");
    }
?>