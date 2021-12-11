<?php
function menu()
{
    echo '<div class="d-flex flex-column align-items-center">
    <div class="list-group w-50 mt-4">
    <a href="homepage.php" class="text-decoration-none"><button type="button" class="list-group-item list-group-item-action">Domů</button></a>
        <a href="vlozeni.php" class="text-decoration-none"><button type="button" class="list-group-item list-group-item-action">Vložení knihy do databáze</button></a>
        <a href="prehled.php" class="text-decoration-none"><button type="button" class="list-group-item list-group-item-action">Přehled knih v databázi</button></a>
        <a href="vyhledavani.php" class="text-decoration-none"><button type="button" class="list-group-item list-group-item-action">Vyhledávání knih v databázi</button></a>
    </div>
</div>';
}
