<?php
session_start();
?>
<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - PHP + MySQL</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Login</h3>
                    <h3 class="title has-text-grey"><a href="https://www.php.net/manual/pt_BR/" target="_blank">PHP</a></h3>
                    <a href="https://www.php.net/manual/pt_BR/">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" width="500">
                    </a>

                    <! -- se a variavel de sessão existir que foi criado em login.php com o nome não autenticado ele exibira a mensagem da da div abaixo se ele for autenticado a mensagen não sera exibida -->
                        <?php
                        if (isset($_SESSION['nao_autenticado'])) :

                        ?>
                            <div class="notification is-danger">
                                <p>ERRO: Usuário ou senha inválidos.</p>
                            </div>
                        <?php
                        endif;
                        // limpando a sessão para que se o usuario estiver acessando pela primeira vez a mensagem não ira ficar sendo exibida
                        unset($_SESSION["nao_autenticado"]);
                        ?>
                        <div class="box">
                            <form action="login.php" method="POST">
                                <div class="field">
                                    <div class="control">
                                        <input name="usuario" type="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                    </div>
                                </div>
                                <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button> <br />


                            </form>
                            <a href="cadastrar.php">registrar</a>
                        </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>