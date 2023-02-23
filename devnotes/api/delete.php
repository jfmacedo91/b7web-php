<?php
  require("../config.php");

  $method = strtoupper($_SERVER['REQUEST_METHOD']);
  if($method === "DELETE") {
    parse_str(file_get_contents("php://input"), $input);
    $id = filter_var($input["id"] ?? null);

    if($id) {
      $sql = $pdo->prepare("DELETE FROM notes WHERE id = :id");
      $sql->bindValue(":id", $id);
      $sql->execute();
    } else {
      $array["error"] = "It is necessary to send an ID";
    }
  } else {
    $array["error"] = "DELETE requests only, $method type is not authorized!";
  }

  require("../return.php");
?>