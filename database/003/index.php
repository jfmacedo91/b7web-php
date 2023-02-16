<?php
  require 'config.php';
  require 'dao/UserDaoMysql.php';

  $userDao = new UserDaoMysql($pdo);
  $userList = $userDao->findAll();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;600&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Lista de usuários</title>
</head>
<body>
  <header>
    <h1>Lista de usuários</h1>
    <a href="create.php">+ Adicionar novo usuário</a>
  </header>
  <main>
    <table>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
      </tr>
      <?php foreach($userList as $user): ?>
        <tr>
          <td><?php echo $user->getId(); ?></td>
          <td><?php echo $user->getName(); ?></td>
          <td><?php echo $user->getEmail(); ?></td>
          <td>
            <a href="update.php?id=<?php echo $user->getId(); ?>">Editar</a>
            <a href="delete.php?id=<?php echo $user->getId(); ?>" onclick="return confirm('Deseja realmente exluir?')">Excluir</a>
          </td>
        </tr>
      <?php endforeach ;?>
    </table>
  </main>
</body>
</html>