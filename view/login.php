<head>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="file.scss">
</head>
<div class="container" id="container">
<div class="form-container sign-up-container">
        <form action="#">
            <h1>Crea Account</h1>
            <input type="email" placeholder="Email" />
            <input type="password" placeholder="Password" />

            <?php
        session_start();

        include_once dirname(__FILE__) . '/../function/user.php';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST['email']) && !empty($_POST['pw'])) { //se la variabile mail o password che devono essere inviate non sono vuote all'ora si invia
        
                $pw = hash("sha256", $_POST['pw']);

                $data = array(
                    //Immetto i dati all'interno di data
                    "email" => $_POST['email'],
                    "pw" => $pw,
                );

                $err = logon($data);
                if ($err == "-1") {
                    echo ('<p class="text-danger">Errore nella registrazione, riprova più tardi!</p>');
                }
            }
        }
        ?>

            <button>Registrati</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="#">
            <h1>Accedi</h1>
            <input type="email" placeholder="Email" />
            <input type="password" placeholder="Password" />

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

            <a href="#">Password dimenticata?</a>
            <button>Accedi</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Bentornato!</h1>
                <p>Per accedere inserisci i tuoi dati</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Ciao, Boss!</h1>
                <p>Inserisci i tuoi dati e inizia!</p>
                <button class="ghost" id="signUp">Registrati</button>
            </div>
        </div>
    </div>
</div>

<script src="login.js"></script>