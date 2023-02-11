<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de nomes</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <form action="handle-form.php" method="POST">
    <h1>Lista de nomes</h1>
    <fieldset>
      <legend>Nome</legend>
      <input type="text" name="name" id="name" placeholder="Digite um nome">
      <input type="submit" value="Adicionar">
    </fieldset>
  </form>
  <ul>
    <?php
      if(file_exists('names.txt')) {
        $names = file_get_contents('names.txt');
        $names = explode(' - ', $names);
        foreach($names as $name) {
          echo '<li>'.$name.'</li>';
        }
      } else {
        echo '<span>Adiocione um nome</span>';
      }
    ?>
  </ul>
</body>
</html>