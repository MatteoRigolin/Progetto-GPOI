<!doctype html>
<html lang="en">

<body>
    <form class="form-signin" method="post">
       
        <h1 class="h3 mb-3 fw-bold">Inserisci le credenziali</h1>
        <label for="inputEmail" class="sr-only mb-2">Email</label>
        <input type="text" id="inputEmail" class="form-control mb-4" placeholder="email" name="email" required
            autofocus>
        <label for="inputPassword" class="sr-only mb-2">Password</label>
        <input type="password" id="inputPassword" class="form-control mb-4" placeholder="Password" name="pw"
            required>

        <?php
        session_start();

        include_once dirname(__FILE__) . '\function\user.php';
        

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST['email']) && !empty($_POST['pw'])) { //se la variabile mail o password che devono essere inviate non sono vuote all'ora si invia
        
                $pw = hash("sha256", $_POST['pw']);

                $data = array(
                    //Immetto i dati all'interno di data
                    "email" => $_POST['email'],
                    "pw" => $pw,
                );

                if (login($data) == -1) {
                    echo ('<p class=text-danger>Email o password errata</p>');
                } else {
                    header('Location: ../view/index.php?page=1');



                }
            } else {
                echo ('<p class="text-danger">Campo richiesto</p>');
            }
        }
        ?>

        <div class="row">
            <button class="btn btn-lg btn-primary btn-block mx-auto" type="submit">Accedi</button>
            <div class="row">
                <a class="text-dark" href="../view/index.php?page=7" style="text-decoration: none; font-size:13px;">
                    <u>Se non hai ancora un account, registrati ora!</u>
                </a>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>

<!--<style>
    

    body {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-align: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }

    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
    }

    .form-signin .checkbox {
        font-weight: 400;
    }

    .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
    }

    .form-signin .form-control:focus {
        z-index: 2;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
        /* border-bottom-right-radius: 0; */
        /* border-bottom-left-radius: 0; */
    }

    .form-signin input[type="password"] {
        margin-bottom: 10px;
        /* border-top-left-radius: 0; */
        /* border-top-right-radius: 0; */
    }

    body, html {
  height: 100%;
}

.bg {
  /* The image used */
  background-image: url("../assets/img/campocalcio.jpg");

  /* Full height */
  height: 95%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>-->

</html>