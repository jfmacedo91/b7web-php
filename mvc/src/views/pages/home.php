<?php $render('header'); ?>
<br>
<a href="<?=$base;?>/create">+ Novo usuário</a>
<br><br>
<table border="1" width="100%">
  <tr>
    <th>ID</th>
    <th>NOME</th>
    <th>EMAIL</th>
    <th>AÇÕES</th>
  </tr>
  <?php foreach($users as $user): ?>
    <tr>
      <td><?=$user['id']?></td>
      <td><?=$user['name']?></td>
      <td><?=$user['email']?></td>
      <td>
        <a href="<?=$base;?>/user/<?=$user['id']?>/update">
          <img src="<?=$base;?>/assets/images/document.png" alt="[EDITAR]">
        </a>
        <a href="<?=$base;?>/user/<?=$user['id']?>/delete" onclick="return confirm('Tem certeza que deseja escluir <?=$user['name']?>?');">
          <img src="<?=$base;?>/assets/images/trash.png" alt="[EXCLUIR]">
        </a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>
<br>
<?php $render('footer'); ?>