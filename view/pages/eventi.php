<head>
  <!--<link rel="stylesheet" href="try.scss">
  <div class='card'>
    <div class='card_left'>
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/343086/h8fnwL1.png'>
    </div>
    <div class='card_right'>
      <h1>DISCO TRAP</h1>
      <div class='card_right__details'>
        <ul>
          <li>11 MAGGIO 2023</li>
          <li>DALLE 22</li>
          <li>TRAP</li>
        </ul>
        <div class='card_right__rating'>
          <div class='card_right__rating__stars'>
            <fieldset class='rating'>
              <input id='star10' name='rating' type='radio' value='10'>
              <label class='full' for='star10' title='10 stars'></label>
              <input id='star9half' name='rating' type='radio' value='9 and a half'>
              <label class='half' for='star9half' title='9.5 stars'></label>
              <input id='star9' name='rating' type='radio' value='9'>
              <label class='full' for='star9' title='9 stars'></label>
              <input id='star8half' name='rating' type='radio' value='8 and a half'>
              <label class='half' for='star8half' title='8.5 stars'></label>
              <input id='star8' name='rating' type='radio' value='8'>
              <label class='full' for='star8' title='8 stars'></label>
              <input id='star7half' name='rating' type='radio' value='7 and a half'>
              <label class='half' for='star7half' title='7.5 stars'></label>
              <input id='star7' name='rating' type='radio' value='7'>
              <label class='full' for='star7' title='7 stars'></label>
              <input id='star6half' name='rating' type='radio' value='6 and a half'>
              <label class='half' for='star6half' title='6.5 stars'></label>
              <input id='star6' name='rating' type='radio' value='6'>
              <label class='full' for='star6' title='6 star'></label>
              <input id='star5half' name='rating' type='radio' value='5 and a half'>
              <label class='half' for='star5half' title='5.5 stars'></label>
              <input id='star5' name='rating' type='radio' value='5'>
              <label class='full' for='star5' title='5 stars'></label>
              <input id='star4half' name='rating' type='radio' value='4 and a half'>
              <label class='half' for='star4half' title='4.5 stars'></label>
              <input id='star4' name='rating' type='radio' value='4'>
              <label class='full' for='star4' title='4 stars'></label>
              <input id='star3half' name='rating' type='radio' value='3 and a half'>
              <label class='half' for='star3half' title='3.5 stars'></label>
              <input id='star3' name='rating' type='radio' value='3'>
              <label class='full' for='star3' title='3 stars'></label>
              <input id='star2half' name='rating' type='radio' value='2 and a half'>
              <label class='half' for='star2half' title='2.5 stars'></label>
              <input id='star2' name='rating' type='radio' value='2'>
              <label class='full' for='star2' title='2 stars'></label>
              <input id='star1half' name='rating' type='radio' value='1 and a half'>
              <label class='half' for='star1half' title='1.5 stars'></label>
              <input id='star1' name='rating' type='radio' value='1'>
              <label class='full' for='star1' title='1 star'></label>
              <input id='starhalf' name='rating' type='radio' value='half'>
              <label class='half' for='starhalf' title='0.5 stars'></label>
            </fieldset>
          </div>
        </div>
        <div class='card_right__review'>
          <p> L'evento per giovani a base di trap migliore in italia</p>
          <a href='http://www.imdb.com/title/tt0266697/plotsummary?ref_=tt_stry_pl' target='_blank'>leggi di p</a>
        </div>
        <div class='card_right__button'>
          <a href='https://www.youtube.com/watch?v=ot6C1ZKyiME' target='_blank'>GUARDA QUA</a>
        </div>
      </div>
    </div>
  </div>-->
</head>

<body style="background-color-light">
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



  <!--form creazione eventi-->
  <div class="mx-auto" style="width: 50%; padding: 30px 0px">
    <h2>Crea un nuovo evento</h2>
    <form method="post" style="margin-top: 20px;">
      <div class="mb-3">
        <label for="text" class="form-label"><b>Nome dell'evento</b></label>
        <input type="text" class="form-control" placeholder="Nome dell'evento" name="name" required>
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
            <option selected disabled>Seleziona sala</option>
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