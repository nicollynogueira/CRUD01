<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

$usuario_correto = "teste@studyhub.com";
$senha_correta = "1234";

if ($email == $usuario_correto && $senha == $senha_correta) {
    $_SESSION['usuario'] = $email;
    header("Location: painel.php");
    exit();
} else {
    header("Location: erro.php");
    exit();
}
?>
