<?php
include "menu.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Knihy v DB</title>
</head>

<body>
    <div class="container bg-light p-5 mt-4">
        <h1 class="text-center mt-4">Aplikace kniha</h1>
        <h3 class="text-center mt-4">Menu</h3>
        <?php
        menu();
        ?>
    </div>
    <div class="container">
        <div class="row d-flex flex-column align-items-center">
            <div class="col-6 mt-5 mb-3">
                <h2 class="text-center mb-3">Databáze již vložených knih</h2>
            </div>
        </div>
    </div>


    <?php
    require "dbconfig.php";
    if (!($con = mysqli_connect($host, $user, $password, $db))) {
        die("Přihlášení se nepovedlo");
    }
    mysqli_query($con, "SET NAMES 'utf8'");
    $dotaz = "SELECT ISBN, jmeno_autor, prijmeni_autor, nazev_knihy, popis FROM knihy";
    if (!($vysledek = mysqli_query($con, $dotaz))) {
        die("Nepovedlo se provést výběr dat z databáze.");
    } ?>
    <div class="container">
        <div class="row d-flex flex-column align-items-center">
            <div class="col-6">
                <?php
                while ($radek = mysqli_fetch_array($vysledek)) {
                    echo "<h4>ISBN: " . $radek['ISBN'] . "</h4>";
                    echo "<p>Jméno autora: " . $radek['jmeno_autor'] . "</p>";
                    echo "<p>Příjmení autora: " . $radek['prijmeni_autor'] . "</p>";
                    echo "<h4>Název knihy: " . $radek['nazev_knihy'] . "</h4>";
                    echo "<p>Popis knihy: " . $radek['popis'] . "</p>";
                    echo "<hr>";
                }
                ?>
            </div>
        </div>
    </div>

    <?php
    include_once 'scripty.php';
    ?>

</body>

</html>