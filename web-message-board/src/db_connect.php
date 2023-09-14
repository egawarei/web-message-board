<?php
// PHP のコードの始まり
//try-catchは例外発生時の処理
try {
  $dbHost = getenv('DB_HOST');
  $dbPort = getenv('DB_PORT');
  $dbName = getenv('DB_NAME');
  $dbUser = getenv('DB_USER');
  $dbPass = getenv('DB_PASS');
  //接続処理
  $dsn = "mysql:dbname=$dbName;host=$dbHost:$dbPort";
  //PDO インスタンス生成
  $dbh = new PDO($dsn, $dbUser, $dbPass);
} catch (PDOException $e) {
  echo 'データベース接続失敗:';
  //エラーメッセージを表示する
  echo $e->getMessage();
  //プログラムの終了
  exit();
}
