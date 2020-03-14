<?php
session_start();
?>

<?php
include ('conexao.php');

/* verificando se o usuario digitou algo no formulario se o campo usuario estiver vazio ou o campo senha 
estiver vazio o usuario sera redirecionado de volta a pagina index.php
*/
if (empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: index.php');
    exit();
}


/* a função mysqli_real_escape_string protege os campos de ataques sql injection que é uma tecnica de ataque
que é basiada na manipulação do codigo sql
*/ 
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

// select o nome da tabela usuario onde o usuario for igual ao nome registrado e a senha for igual a senha registrada

$query = "SELECT nome FROM usuario WHERE usuario='{$usuario}' and senha = md5('$senha')";


// executando a query do banco de dados 
$result = mysqli_query($conexao,$query);


/* 

row esta retornando o numero de linhas retornadas por meio da query result na linha 29 
*/
$row= mysqli_num_rows($result);


// se o usuario estiver autenticado row ira reornar 1 se não estiver autenticado ira retornar 0

if($row == 1){
  /* se usuario for  igual a 1 sera atribuido uma sesão para depois conseguir validar internamente   na pagina painel.php 
  na sessão sera armazeanada o  nome de usuario se não volta pra index 
  */
    $usuario_bd= mysqli_fetch_assoc($result);
    $_SESSION['nome'] = $usuario_bd['nome'];
    header('Location: painel.php');
    exit();

}else{
    $_SESSION["nao_autenticado"] = true;
    header('Location:index.php');
    exit();

}



?> 