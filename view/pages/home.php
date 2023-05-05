<?php
error_reporting(0);
session_start();
if (empty($_SESSION['user_id'])) {
    header('location: ../view/index.php?page=6');
}

?>

<div class="" id="header">
        <?php include("../view/header.php") ?>
    </div>
<div class="hometitle1">
  <a class="primary">ORGANIZE.</a>
</div>
<div class="hometitle2">
<a class="secondary">Scegli noi, organizza e gestisci al meglio la tua discoteca</a>
</div>