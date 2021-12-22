<?php

function connect_to_db()
{
$dbn ='mysql:dbname=manual_prototype_1;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = 'root';

try {
  return new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}
}
