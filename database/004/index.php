<?php
$senha = '12345';

$hash = password_hash($senha, PASSWORD_DEFAULT);

echo '<h2>Senha: '.$senha.'</h2>';
echo '<h2>Hash: '.$hash.'</h2>';

if(password_verify($senha, $hash)) {
  echo 'Senha CORRETA';
} else {
  echo 'Senha INCORRETA';
}
?>