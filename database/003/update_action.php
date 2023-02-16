<?php
  require 'config.php';
  require 'dao/UserDaoMysql.php';

  $userDao = new UserDaoMysql($pdo);

  $id = filter_input(INPUT_POST, 'id');
  $name = filter_input(INPUT_POST, 'name');
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

  if($id && $name && $email) {
    $updatedUser = $userDao->findById($id);
    $updatedUser->setName($name);
    $updatedUser->setEmail($email);

    $userDao->update($updatedUser);

    header('Location: index.php');
    exit;
  } else {
    header('Location: update.php?id='.$id);
    exit;
  }
?>