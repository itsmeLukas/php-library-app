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

    <title>Vložení knihy do DB</title>
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
            <div class="col-6 m-5">
                <h2 class="text-center mb-3">Formulář pro vložení knihy</h2>
                <form action="vlozeni.php" method="POST">
                    <div class="form-group">
                        ISBN<br>
                        <input type="text" class="form-control" name="vstup_isbn">
                        Křestní jméno autora<br>
                        <input type="text" class="form-control" name="vstup_jmeno">
                        Příjmení autora<br>
                        <input type="text" class="form-control" name="vstup_prijmeni">
                        Název knihy<br>
                        <input type="text" class="form-control" name="vstup_kniha">
                        Popis knihy<br>
                        <textarea class="form-control" name="vstup_popis" rows="3"></textarea>
                        <div class="text-center mt-3">
                            <input type="submit" value="Vložit knihu" class="btn btn btn-primary">
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <?php
    require "dbconfig.php";

    if ((!empty($_POST['vstup_isbn'])) && (!empty($_POST['vstup_jmeno'])) && (!empty($_POST['vstup_prijmeni'])) && (!empty($_POST['vstup_kniha'])) && (!empty($_POST['vstup_kniha']))) {
        if (!($con = mysqli_connect($host, $user, $password, $db))) {
            die("Nelze se připojit k databazi");
        }
        mysqli_query($con, "SET NAMSE 'utf8'");
        if (mysqli_query($con, "INSERT INTO knihy(ISBN, jmeno_autor, prijmeni_autor, nazev_knihy, popis) VALUES('" .
            htmlspecialchars(addslashes($_POST["vstup_isbn"])) . "', '" .
            htmlspecialchars(addslashes($_POST["vstup_jmeno"])) . "', '" .
            htmlspecialchars(addslashes($_POST["vstup_prijmeni"])) . "', '" .
            htmlspecialchars(addslashes($_POST["vstup_kniha"])) . "', '" .
            htmlspecialchars(addslashes($_POST["vstup_popis"])) . "')")) {
            echo '<div class="d-flex justify-content-center mb-5">
            <div class="alert alert-success alert-dismissible fade show w-50 text-center" role="alert">
              <strong>Kniha byla vložena do databáze!</strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>';
        }
        mysqli_close($con);
    } elseif ((isset($_POST['vstup_isbn'])) && (isset($_POST['vstup_jmeno'])) && (isset($_POST['vstup_prijmeni'])) && (isset($_POST['vstup_kniha'])) && (isset($_POST['vstup_kniha']))) {
        echo '<div class="d-flex justify-content-center mb-5">
            <div class="alert alert-danger alert-dismissible fade show w-50 text-center" role="alert">
              <strong>Všechny položky ve formuláři musí být vyplněné!</strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>';
    }
    ?>
    <?php
    include_once 'scripty.php';
    ?>

</body>

</html>