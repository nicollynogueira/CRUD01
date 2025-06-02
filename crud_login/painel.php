<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.html");
    exit();
}
?>
<h2>Bem-vindo!, <?php echo $_SESSION['usuario']; ?>!</h2>
<a href="logout.php">Início</a>