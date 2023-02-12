<?php
  $array = [
    'nome' => 'Jean',
    'idade' => '31',
    'empresa' => 'B7Web',
    'cor' => 'Verde',
    'profissao' => 'Programador',
    'cidade' => 'Andirá'
  ];

  $chaves = array_keys($array);
  $valores = array_values($array);
?>

<table border="1">
  <thead>
    <tr>
      <?php foreach($chaves as $chave) {
        echo '<th>'.$chave.'</th>';
      }?>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php foreach($valores as $valor) {
        echo '<td>'.$valor.'</td>';
      }?>
    </tr>
  </tbody>
</table>