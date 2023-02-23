<?php
  require("../config.php");

  $method = strtoupper($_SERVER['REQUEST_METHOD']);
  if($method === "GET") {
    $id = filter_input(INPUT_GET, 'id');
    if($id) {
      $sql = $pdo->prepare("SELECT * FROM notes WHERE id = :id");
      $sql->bindValue(":id", $id);
      $sql->execute();

      if($sql->rowCount() > 0) {
        $data = $sql->fetch(PDO::FETCH_ASSOC);
        $array["result"] = [
          "id" => $data["id"],
          "title" => $data["title"],
          "body" => $data["body"]
        ];
      } else {
        $array["error"] = "ID not found";
      }
    } else {
      $array["error"] = "Please inform an ID";
    }
  } else {
    $array["error"] = "GET requests only, $method type is not authorized!";
  }

  require("../return.php");
?>