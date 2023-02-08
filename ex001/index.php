<?php
$lista = [
  'nome' => 'Jean',
  'idade' => 31,
  'atributos' => [
    'forca' => 60,
    'agilidade' => 80,
    'destreza' => 50
  ],
  'vida' => 1000,
  'mana' => 928
];

echo "Exercício Prático (Váriaveis) <br/><br/>";
echo "NOME: ".$lista['nome']."<br/>";
echo "FORÇA: ".$lista['atributos']['forca']."<br/>";
echo "VIDA: ".$lista['vida'];
?>