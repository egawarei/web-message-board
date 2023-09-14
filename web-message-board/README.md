# web-message-board

Docker Desktop が起動していることを確認してください。

ターミナルで、プロジェクトのルートに移動し、以下のコマンド（`docker compose up -d` のみ）を入力します。 初回実行時は時間がかかる。

http://localhost:8080/ でページにアクセス

http://localhost:8081/  でデータベース管理画面にアクセス


HTMLリファレンス
https://www.htmq.com/html/input.shtml


投稿したらDBへ保存する処理
<?php
session_start();
require_once(__DIR__ . '/../src/db_connect.php');

if (isset($_POST['action_type']) && $_POST['action_type']) {
  if ($_POST['action_type'] === 'insert') {
    require(__DIR__ . '/../src/insert_message.php');
  }
}