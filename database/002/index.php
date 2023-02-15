<?php
    require 'config.php';
    $users = [];
    $sql = $pdo -> query("SELECT * FROM users");
    if($sql -> rowCount() > 0) {
      $users = $sql -> fetchAll(PDO::FETCH_ASSOC);
    }
  ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
</head>
<body style="padding: 2rem;">
  <header style="display: flex; align-items: center; justify-content: space-between">
    <h1>Lista de usuário</h1>
    <a href="add.php">Adicionar novo usuário</a>
  </header>
  <hr>
  <table border="1" style="width: 100%; border-collapse: collapse; text-align:center;">
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Email</th>
      <th>Ações</th>
    </tr>
    <?php foreach($users as $user): ?>
      <tr>
        <td><?=$user['id']?></td>
        <td><?=$user['name']?></td>
        <td><?=$user['email']?></td>
        <td>
          <a href="edit.php?id=<?=$user['id']?>">[ Editar ]</a>
          <a href="delete.php?id=<?=$user['id']?>" onclick="return confirm('Deseja realmente exluir?')">[ Excluir ]</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>