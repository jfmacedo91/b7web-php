<?php
session_start();
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

if($name) {
  $_SESSION['user'] = $name;
  header('location: index.php');
  exit;
} else {
  header('location: login.php');
  exit;
}
?>