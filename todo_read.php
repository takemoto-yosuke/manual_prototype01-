<?php

include('functions.php');
$pdo = connect_to_db();

$sql = 'SELECT * FROM manual ORDER BY created_at ASC';

$stmt = $pdo->prepare($sql);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$output = "";
foreach ($result as $record) {
  $output .= "
    <tr>
      <td>{$record["created_at"]}</td>
      <td>
        <a href='todo_detail.php?id={$record["id"]}'>{$record["title"]}</a>
      </td>      
    </tr>
  ";
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>一覧画面</title>
</head>

<body>
    <h1>一覧画面</h1>
    <a href="todo_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>記入日</th>
          <th>タイトル</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?= $output ?>
      </tbody>
    </table>
</body>

</html>