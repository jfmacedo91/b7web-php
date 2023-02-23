<?php
  require("../config.php");

  $method = strtoupper($_SERVER['REQUEST_METHOD']);
  if($method === "PUT") {
    parse_str(file_get_contents("php://input"), $input);
    $id = filter_var($input["id"] ?? null);
    $title = filter_var($input["title"] ?? null);
    $body = filter_var($input["body"] ?? null);

    if($id && $title && $body) {
      $sql = $pdo->prepare("SELECT * FROM notes WHERE id = :id");
      $sql->bindValue(":id", $id);
      $sql->execute();

      if($sql->rowCount() > 0) {
        $sql = $pdo->prepare("UPDATE notes SET title = :title, body = :body WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->bindValue(":title", $title);
        $sql->bindValue(":body", $body);
        $sql->execute();

        $array["result"] = [
          'id' => $id,
          'title' => $title,
          'body' => $body
        ];
      } else {
        $array["error"] = "ID not found";
      }
    } else {
      $array["error"] = "It is necessary to send all fields, ID, Title and Body";
    }
  } else {
    $array["error"] = "PUT requests only, $method type is not authorized!";
  }

  require("../return.php");
?>