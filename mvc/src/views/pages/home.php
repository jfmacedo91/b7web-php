<?php $render('header'); ?>

Meu nome é <?=$nome;?>, tenho <?=$idade;?>
<hr>

<?php foreach($posts as $post): ?>
  <h3><?php echo $post['titulo']; ?></h3>
  <p><?php echo $post['corpo']; ?></p>
<?php endforeach ?>