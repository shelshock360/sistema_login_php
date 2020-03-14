<?php
// iniciando a sessão  e incluindo a conexão com o banco de dados 
session_start();
include("conexao.php");

/* criando a variavel nome  que é o mesmo nome que esta la no input do formulario assim como as outras variaveis, 
 e por meio do coamndo mysqli_real_escape_string esta se evitando ataques de sql injection  
*/ 

// o trim tira oe espaço do inicio e do fim da string para que não seja armazenado no  banco

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));



$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}


// informando pro banco o que sera inserido e a função now pega a data automaticamente 
$sql = "INSERT INTO usuario (nome, usuario, senha, data_cadastro) VALUES ('$nome', '$usuario', '$senha', NOW())";


if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;
