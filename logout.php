<?php
// inicia a sessão e com session_destroy destroy todas as sessões armazenadas 
session_start();
session_destroy();
header('Location:index.php');
exit();
?>