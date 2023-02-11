<?php
  session_start();
  if(empty($_SESSION['user'])) {
    header('location: login.php');
    exit;
  }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bem vindo, <?php echo $_SESSION['user']; ?></title>
</head>
<body>
  <h1>Olá, <?php echo $_SESSION['user']; ?> - <a href="logout.php">Sair</a></h1>
</body>
</html>