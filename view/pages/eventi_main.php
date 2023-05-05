<?php
error_reporting(0);
session_start();
if (empty($_SESSION['user_id'])) {
    header('location: ../login.php');
}

?>

<head>
<link rel="stylesheet" href="eventi.css">
<link rel="stylesheet" href="file.scss">
</head>


<div class="container">
  <div class="card">
    <div class="box">
      <div class="content">
        <h2>01</h2>
        <h3>Aggiungi</h3>
        <p>Clicca qui per aggiungere eventi</p>
        <a href="index.php?page=4">Vai</a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="box">
      <div class="content">
        <h2>02</h2>
        <h3>Eventi</h3>
        <p>Clicca qui per visualizzare tutti gli eventi esistenti</p>
        <a href="index.php?page=5">Vai</a>
      </div>
    </div>
  </div>

</div>