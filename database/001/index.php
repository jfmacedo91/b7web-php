<?php
  $pdo = new PDO("mysql:dbname=test;host=localhost;", "root");
  $sql = $pdo -> query('SELECT * FROM users');
  $data = $sql -> fetchAll(PDO::FETCH_ASSOC);
  echo '<pre>';
  print_r($data);
?>