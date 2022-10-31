<?php

  const DB_HOST = 'mysql:dbname=データベース名;host=ローカルのIP;charset=utf8';
  const DB_USER = 'php_user';
  const DB_PASSWORD = 'パスワード'

  $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD);

  // 例外処理 Exception
  try {
    $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // 連想配列
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // 例外
      PDO::ATTR_EMULATE_PREPARES => false, // SQLインジェクション
    ]);
    echo '接続成功';
  } catch(PDOException $e) {
    echo '接続失敗' . $e->getMessage() . "\n";
    exit();
  }
?>