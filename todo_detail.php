<?php
include("functions.php");
// id受け取り
$id = $_GET['id'];

// DB接続
$pdo = connect_to_db();

// SQL実行
$sql = 'SELECT * FROM manual WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$record = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>詳細</title>
</head>

<body>
    <h1>詳細</h1>
    <a href="todo_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>記入日</th>
          <th>タイトル</th>
          <th>内容</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        <td>
            <?= $record["created_at"] ?>
        </td>
        <td>
            <?= $record["title"] ?>
        </td>        
        <td>
            <?= $record["detail"] ?>
        </td>      
        </tr>          
      </tbody>
    </table>
</body>


</html>