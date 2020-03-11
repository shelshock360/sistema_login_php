<?php
error_reporting(0);
session_start();
include('verifica_login.php');

?>


<h2>ola, <?php echo  $_SESSION['nome']; ?></h2>

<h2><a href="logout.php">sair</a></h2>