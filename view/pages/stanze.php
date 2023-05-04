<body>
  <a>stanze</a>
  <body>

    <div class="container-fluid">
                    
                    <div class=" mx-5 d-flex justify-content-center">
                        <table class="table table-striped" >
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Capacità</th>
                                    <th scope="col">Nome Stanza</th>
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
</body>

</body>