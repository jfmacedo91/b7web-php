<?php
  require 'config.php';
  require 'dao/UserDaoMysql.php';

  $userDao = new UserDaoMysql($pdo);

  $name = filter_input(INPUT_POST, 'name');
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

  if($name && $email) {
    if($userDao->findByEmail($email) === false) {
      $newUser = new User();
      $newUser->setName($name);
      $newUser->setEmail($email);

      $userDao->create($newUser);

      header('Location: index.php');
      exit;
    } else {
      header('Location: create.php');
      exit;
    }
  } else {
    header('Location: create.php');
    exit;
  }
?>