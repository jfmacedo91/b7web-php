<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar</title>
</head>
<body style="padding: 2rem;">
  <h1>Adicionar novo usuário</h1>
  <hr>
  <form method="POST" action="add_action.php">
    <label for="name">
      Nome: <br>
      <input type="text" name="name" id="name">
    </label> <br><br>
    <label for="email">
      E-mail: <br>
      <input type="email" name="email" id="email">
    </label> <br><br>
    <input type="submit" value="Adicionar">
  </form>
</body>
</html>