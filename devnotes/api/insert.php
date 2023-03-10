<?php
  require("../config.php");

  $method = strtoupper($_SERVER['REQUEST_METHOD']);
  if($method === "POST") {
    $title = filter_input(INPUT_POST, 'title');
    $body = filter_input(INPUT_POST, 'body');
    if($title && $body) {
      $sql = $pdo->prepare("INSERT INTO notes (title, body) VALUES (:title, :body)");
      $sql->bindValue(":title", $title);
      $sql->bindValue(":body", $body);
      $sql->execute();
      
      $id = $pdo->lastInsertId();
      $array["result"] = [
        "id" => $id,
        "title" => $title,
        "body" => $body
      ];
    } else {
      $array["error"] = "It is necessary inform the title and body";
    }
  } else {
    $array["error"] = "POST requests only, $method type is not authorized!";
  }

  require("../return.php");
?>