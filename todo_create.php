<?php

if (
  !isset($_POST['detail']) || $_POST['detail'] == '' ||
  !isset($_POST['created_at']) || $_POST['created_at'] == '' ||
  !isset($_POST['title']) || $_POST['title'] == ''
) {
  exit('paramError');
}

$title = $_POST['title'];
$detail = $_POST['detail'];
//$created_at = $_POST['created_at'];

include('functions.php');
$pdo = connect_to_db();

$sql = 'INSERT INTO manual(id, title, detail, created_at, updated_at) VALUES(NULL, :title, :detail, now(), now())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':detail', $detail, PDO::PARAM_STR);
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:todo_read.php");
exit();
