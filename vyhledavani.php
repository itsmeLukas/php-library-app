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

    <title>Vyhledání knihy do DB</title>
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
                <h2 class="text-center mb-3">Vyhledávání v databázi</h2>
                <form action="vyhledavani.php" method="POST">
                    <div class="form-group">
                        ISBN<br>
                        <input type="text" class="form-control" name="vyhledavani_isbn">
                        Křestní jméno autora<br>
                        <input type="text" class="form-control" name="vyhledavani_jmeno">
                        Příjmení autora<br>
                        <input type="text" class="form-control" name="vyhledavani_prijmeni">
                        Název knihy<br>
                        <input type="text" class="form-control" name="vyhledavani_kniha">
                        <div class="text-center mt-3">
                            <input type="submit" value="Vyhledej knihu" class="btn btn btn-primary">
                        </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    require "dbconfig.php";
    if ((!empty($_POST['vyhledavani_isbn'])) || (!empty($_POST['vyhledavani_jmeno'])) || (!empty($_POST['vyhledavani_prijmeni'])) || (!empty($_POST['vyhledavani_kniha']))) {
        if (!($con = mysqli_connect($host, $user, $password, $db))) {
            die("Přihlášení se nepovedlo");
        }
        mysqli_query($con, "SET NAMES 'utf8'");
        //nevyhledava napr znak: <
        $isbn_dotaz = htmlspecialchars($_POST['vyhledavani_isbn']);
        $jmeno_dotaz = htmlspecialchars($_POST['vyhledavani_jmeno']);
        $prijmeni_dotaz = htmlspecialchars($_POST['vyhledavani_prijmeni']);
        $kniha_dotaz = htmlspecialchars($_POST['vyhledavani_kniha']);
        $dotaz = "SELECT ISBN, jmeno_autor, prijmeni_autor, nazev_knihy, popis FROM knihy WHERE isbn = '$isbn_dotaz' OR jmeno_autor = '$jmeno_dotaz' OR prijmeni_autor = '$prijmeni_dotaz' OR nazev_knihy = '$kniha_dotaz'";
        if (!($vysledek = mysqli_query($con, $dotaz))) {
            die("Nepovedlo se provést výběr dat z databáze.");
        }
    ?>
        <div class="container">
            <div class="row d-flex flex-column align-items-center">
                <div class="col-6">
                    <h3 class="text-center">Vyhledané knihy</h3>
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
    } else {
        echo '<div class="d-flex justify-content-center mb-5">
            <div class="alert alert-danger alert-dismissible fade show w-50 text-center" role="alert">
              <strong>Pro vyhledávání musí být ve formuláři vyplněn alespoň jeden dotaz!</strong> 
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