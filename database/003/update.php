<?php
  require 'config.php';
  require 'dao/UserDaoMysql.php';
  $userDao = new UserDaoMysql($pdo);
  $user = false;
  $id = filter_input(INPUT_GET, 'id');
  if($id) {
    $user = $userDao->findById($id);
  }
  if($user === false) {
    header('Location: index.php');
    exit;
  }
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
  <title>Editar usuário</title>
</head>
<body>
  <header>
    <h1>Editar usuário</h1>
    <a href="index.php">Voltar</a>
  </header>
  <main>
    <form action="update_action.php" method="post">
      <input type="hidden" name="id" id="id" value="<?php echo $user->getId(); ?>">
      <label for="name">
        Nome:
        <input type="text" name="name" id="name" value="<?php echo $user->getName(); ?>">
      </label>
      <label for="email">
        Email:
        <input type="text" name="email" id="email" value="<?php echo $user->getEmail(); ?>">
      </label>
      <input type="submit" value="Salvar">
    </form>
  </main>
</body>
</html>