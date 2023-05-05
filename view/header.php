




<!--<a class="brand">TicketTwo</a>-->
<nav class="navMenu">
      <a href="index.php?page=1">Home</a>
      <a href="index.php?page=2">Eventi</a>
      <a href="index.php?page=3">Stanze</a>
      <?php
      if (!empty($_SESSION['user_id'])):

            ?>
            <a href="../view/index.php?page=6">
                  <button type="button" class="btn btn-outline-danger">Esci
                  </button>
            </a>
      <?php endif ?>
      <div class="dot"></div>

</nav>