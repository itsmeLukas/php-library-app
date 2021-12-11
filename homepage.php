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

    <title>Aplikace kniha</title>
</head>

<body>
    <div class="container bg-light p-5 mt-4">
        <h1 class="text-center mt-4">Aplikace kniha</h1>
        <h3 class="text-center mt-4">Menu</h3>
        <?php
        menu();
        ?>
    </div>
    <div class="d-flex justify-content-center m-5">
        <div class="alert alert-dark alert-dismissible fade show text-center" role="alert">
            <p>Tento projekt slouží jako ukázka jednoduché aplikace pro vkládání dat do databáze, zobrazování všech dat a vyhledávání v databázi na základě uživatelského vstupu.</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <?php
    include_once 'scripty.php';
    ?>

</body>

</html>