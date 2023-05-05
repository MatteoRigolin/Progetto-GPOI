<head>
<link rel="stylesheet" href="style.css">
</head>

  <!--form creazione eventi-->
  <div class="mx-auto" style="width: 50%; padding: 30px 0px">
    <h2>Aggiungi un evento</h2>
    <form method="post" style="margin-top: 20px;">
      <div class="mb-3">
        <label for="text" class="form-label"><b>Nome</b></label>
        <input type="text" style="border-radius: 10 !important" class="form-control" placeholder="Nome dell'evento" name="name" required>
      </div>
      <hr>
      <div class="mb-3">
        <label for="data" class="form-label"><b>Data</b></label>
        <input type="data" class="form-control" placeholder="Data dell'evento" name="date_event" required>
      </div>
      <hr>
      <div class="mb-3">
        <label for="hour" class="form-label"><b>Ora di inizio</b></label>
        <input type="hour" class="form-control" placeholder="Ora di inizio" name="start_hour" required>
      </div>
      <hr>
      <div class="mb-3">
        <label for="hour" class="form-label"><b>Ora di chiusura</b></label>
        <input type="hour" class="form-control" placeholder="Ora di chiusura" name="end_hour" required>
      </div>
      <hr>
      <div class="mb-3">
        <label for="text" class="form-label"><b>Descrizione</b></label>
        <input type="text" class="form-control" placeholder="Descrizione" name="description" required>
      </div>
      <hr>
      <div class="mb-3">
        <label for="name" class="form-label">Stanza</label>
        <div class="form-floating">
          <select class="form-select" name="id_room" id="inputGroupSelect02" required>
            <option selected disabled>Seleziona stanza</option>
            <?php
            include_once dirname(__FILE__) . '/../function/room.php';
            $room = getArchiveRoom();

            foreach ($room as $row): ?>

              <option value="<?php echo $row['id'] ?>">
                <div class="col-md-3 mt-2">
                  <?php echo " Capacità --> " ?>
                  <?php echo ($row['capacity']) ?>
                </div>
                <?php echo " // Nome --> " ?>
                <?php echo $row['room_description'] ?>


              </option>
            <?php endforeach ?>
          </select>
        </div>
      </div>
      <hr>

      <?php

      include_once dirname(__FILE__) . '/../function/event.php';


      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['name']) && !empty($_POST['date_event']) && !empty($_POST['start_hour']) && !empty($_POST['end_hour']) && !empty($_POST['description']) && !empty($_POST['id_room'])) {



          $data = array(
            //Immetto i dati all'interno di data
            "name" => $_POST['name'],
            "date_event" => $_POST['date_event'],
            "start_hour" => $_POST['start_hour'],
            "end_hour" => $_POST['end_hour'],
            "description" => $_POST['description'],
            "id_room" => $_POST['id_room'],
          );

          $result = createEvent($data);

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

<style>
.th {
  background-color: #6e0000;
  color: white;
}

.th, .td {
  padding: 15px;
  text-align: left;
}

</style>
