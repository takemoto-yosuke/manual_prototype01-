<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>マニュアル管理</title>
</head>

<body>
  <form action="todo_create.php" method="POST">
      <h1>入力画面</h1>
      <div>
        記入日: <input type="date" name="created_at">
      </div>
      <div>
        タイトル: <input type="text" name="title">
      </div>      

      <div>
        内容: <textarea name="detail" cols="40" rows="8"></textarea>
      </div>
      
      <div>
        <button>登録</button>
      </div>
  </form>
  <a href="todo_read.php">一覧画面</a>  

</body>

</html>