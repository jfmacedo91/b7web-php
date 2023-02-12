<?php
  $array = [
    'nome' => 'Jean',
    'idade' => '31',
    'empresa' => 'B7Web',
    'cor' => 'Verde',
    'profissao' => 'Programador'
  ]
?>

<table border="1">
  <?php foreach($array as $chave => $valor): ?>
    <tr>
      <th><?php echo $chave ?></th>
      <td><?php echo $valor ?></td>
    </tr>
  <?php endforeach; ?>
</table>