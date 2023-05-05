<?php
error_reporting(0);
session_start();
if (empty($_SESSION['user_id'])) {
    header('location: ../login.php');
}

?>


<div class="hometitle1">
  <a class="primary">ORGANIZE.</a>
</div>
<div class="hometitle2">
<a class="secondary">Scegli noi, organizza e gestisci al meglio la tua discoteca</a>
</div>