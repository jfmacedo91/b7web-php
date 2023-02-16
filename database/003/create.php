<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;600&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Criar usuário</title>
</head>
<body>
  <header>
    <h1>Criar usuário</h1>
    <a href="index.php">Voltar</a>
  </header>
  <main>
    <form action="create_action.php" method="post">
      <label for="name">
        Nome:
        <input type="text" name="name" id="name">
      </label>
      <label for="email">
        Email:
        <input type="text" name="email" id="email">
      </label>
      <input type="submit" value="Adicionar">
    </form>
  </main>
</body>
</html>