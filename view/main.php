<?php

if (!isset($_GET['page']))
{
        header("Location: index.php?page=1");
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
}
?>