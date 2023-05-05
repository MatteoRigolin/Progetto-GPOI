<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="file.scss">
</head>


<!--tabella visualizzazione eventi-->
<div class="container-fluid">

<div class=" mx-5 d-flex justify-content-center">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Data</th>
        <th scope="col">Ora di inizio</th>
        <th scope="col">Ora di chiusura</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Sala</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
      include_once dirname(__FILE__) . '/../function/event.php';

      $event_arr = getArchiveEvent();

      if (!empty($event_arr) && $event_arr != -1) {
        foreach ($event_arr as $row) {
          echo ('<tr>');
          foreach ($row as $cell) {
            echo ('<td>' . $cell . '</td>');
          }
        }
        echo ('</tbody>');
        echo ('</table>');
      }
      ?>

</div>
</div>
