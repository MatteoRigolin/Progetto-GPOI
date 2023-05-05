<?php
error_reporting(0);
session_start();

?>


<body>
  

  <div class="container-fluid">

    <div class=" mx-5 d-flex justify-content-center">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Capacità</th>
            <th scope="col">Descrizione</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
          include_once dirname(__FILE__) . '/../function/room.php';

          $room_arr = getArchiveRoom();

          if (!empty($room_arr) && $room_arr != -1) {
            foreach ($room_arr as $row) {
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




  <div class="mx-auto" style="width: 50%; padding: 30px 0px">
    <h2>Aggiungi una stanza</h2>
    <form method="post" style="margin-top: 20px;">
      <div class="mb-3">
        <label for="number" class="form-label"><b>Capacità</b></label>
        <input type="number" class="form-control" placeholder="Capienza della stanza" name="capacity" required>
      </div>
      <hr>
      <div class="mb-3">
        <label for="text" class="form-label"><b>Descrizione</b></label>
        <input type="text" class="form-control" placeholder="Descrizione della stanza" name="room_description"
          required>
      </div>
      <?php

      include_once dirname(__FILE__) . '/../function/room.php';

      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['capacity']) && !empty($_POST['room_description'])) { //se la variabile mail o password che devono essere inviate non sono vuote all'ora si invia
      


          $data = array(
            //Immetto i dati all'interno di data
            "capacity" => $_POST['capacity'],
            "room_description" => $_POST['room_description'],
          );

          $result = createRoom($data);

        }
      }

      ?>
      <div class="mb-3">

        <button class="btn btn-primary" type="submit">Crea</button>



      </div>
    </form>



  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>


</body>