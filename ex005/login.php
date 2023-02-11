<?php
  session_start();
  if(isset($_SESSION['user'])) {
    header('location: index.php');
    exit;
  }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    input {
      font-family: inherit;
      font-size: 1.25rem;
      font-weight: 500;
    }
  </style>
</head>
<body>
  <h1>Login</h1>
  <form action="create-session.php" method="post">
    <input type="text" name="name" id="name" require>
    <input type="submit" value="Login">
  </form>
</body>
</html>