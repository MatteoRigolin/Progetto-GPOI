<?php

if (!isset($_GET['page'])) {
    header("Location: index.php?page=6");
}

$page = $_GET['page'];
switch ($page) {
    case 1:
        include("pages/home.php");
        break;
    case 2:
        include("pages/eventi_main.php");
        break;
    case 3:
        include("pages/stanze.php");
        break;
    case 4:
        include("pages/eventi_aggiungi.php");
        break;
    case 5:
        include("pages/eventi_esistenti.php");
        break;
    case 6:
        include("../view/login.php");
        break;
    case 7:
        include("pages/registration.php");
        break;
}
?>