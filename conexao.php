<?php

/*
fazendo a conexao com banco de dados nas  constantes esta sendo declarado host que pode ser localhost  inves do ipe tambem 
o usuario do banco,senha e o nome do banco. depois em $conexao por meio do comando mysqli_connect eu passo essas informações e caso algo de
errado sera exibido a seguinte mensagem Não foi possivel conectar ao banco de dados
*/ 
define('HOST','127.0.0.1');
define('USUARIO','mysql');
define('SENHA','Palmeiras123');
define('DB','login');

$conexao = mysqli_connect (HOST,USUARIO,SENHA,DB) or die ('Não foi possivel conectar ao banco de dados');

?>

