<?php

if (!isset($_GET['page']))
{
        header("Location: index.php?page=2");
}

$page = $_GET['page'];
switch ($page) {
    case 1:
        include("pages/home.php");
        break;
    case 2:
        include("pages/biglietti.php");
        break;
    case 3:
        include("pages/tavoli.php");
        break;
}
?>