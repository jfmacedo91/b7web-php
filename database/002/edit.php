<?php
  require 'config.php';

  $userInfo = [];

  $id = filter_input(INPUT_GET, 'id');
  if($id) {
    $sql = $pdo -> prepare("SELECT * FROM users WHERE id = :id");
    $sql -> bindValue(':id', $id);
    $sql -> execute();

    if($sql -> rowCount() > 0) {
      $userInfo = $sql -> fetch(PDO::FETCH_ASSOC);
    } else {
      header("Location: index.php");
      exit;
    }
  } else {
    header("Location: index.php");
    exit;
  }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar</title>
</head>
<body style="padding: 2rem;">
  <h1>Editar <?=$userInfo['name']?></h1>
  <hr>
  <form method="POST" action="edit_action.php">
    <input type="hidden" name="id" id="id" value="<?=$userInfo['id']?>">
    <label for="name">
      Nome: <br>
      <input type="text" name="name" id="name" value="<?=$userInfo['name']?>">
    </label> <br><br>
    <label for="email">
      E-mail: <br>
      <input type="email" name="email" id="email" value="<?=$userInfo['email']?>">
    </label> <br><br>
    <input type="submit" value="Salvar">
  </form>
</body>
</html>