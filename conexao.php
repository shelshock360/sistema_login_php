<?php
define('HOST','127.0.0.1');
define('USUARIO','mysql');
define('SENHA','Palmeiras123');
define('DB','login');

$conexao = mysqli_connect (HOST,USUARIO,SENHA,DB) or die ('Não foi possivel conectar ao banco de dados');

?>

