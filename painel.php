<?php
error_reporting(0);
session_start();
include('verifica_login.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Document</title>
</head>

<body>

    <nav class="navbar is-link">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://www.php.net/">
                <img src="https://pngimage.net/wp-content/uploads/2018/06/php-image-png-3.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
            </a>

        </div>

        <div id="navbarExampleTransparentExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="painel.php">
                    Home
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="https://bulma.io/documentation/overview/start/">
                        Docs
                    </a>
                    <div class="navbar-dropdown is-boxed">
                        <a class="navbar-item" href="https://bulma.io/documentation/overview/start/">
                            Overview
                        </a>


                        <hr class="navbar-divider">

                        <a class="navbar-item is-active" href="logout.php">
                            sair
                        </a>
                    </div>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field is-grouped">
                        <h2>ola, <?php echo  $_SESSION['nome']; ?></h2>

                    </div>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>