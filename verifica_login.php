

<?php
session_start();
//  nome não  existir no banco sera redirecionado para index.php
if (!$_SESSION['nome']) {
    header('Location:index.php');
    exit();
}






?>