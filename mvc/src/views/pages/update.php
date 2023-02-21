<?php $render('header'); ?>

<h2>Editar usuário!</h2>
<form action="<?=$base;?>/user/<?=$user['id'];?>/update" method="POST">
  <label for="name">
    Nome: <br>
    <input type="text" name="name" id="name" value="<?=$user['name']?>">
  </label>
  <br><br>
  <label for="email">
    Email: <br>
    <input type="email" name="email" id="email" value="<?=$user['email']?>">
  </label>
  <br><br>
  <button type="submit">Salvar</button>
</form>

<?php $render('footer'); ?>