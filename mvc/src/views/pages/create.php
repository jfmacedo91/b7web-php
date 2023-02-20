<?php $render('header'); ?>

<h2>Adicionar novo usuário!</h2>
<form action="<?=$base;?>/create" method="POST">
  <label for="name">
    Nome: <br>
    <input type="text" name="name" id="name">
  </label>
  <br><br>
  <label for="email">
    Email: <br>
    <input type="email" name="email" id="email">
  </label>
  <br><br>
  <button type="submit">Enviar</button>
</form>

<?php $render('footer'); ?>