<?php
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

if($name) {
  if(file_exists('names.txt')) {
    $names = file_get_contents('names.txt');
    $names .= ' - '.$name;
    file_put_contents('names.txt', $names);
  } else {
    file_put_contents('names.txt', $name);
  }
  header('location: index.php');
  exit;
} else {
  header('location: index.php');
  exit;
}
?>