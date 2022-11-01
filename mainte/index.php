<?php

  require 'db_connection.php';

  // ユーザー入力なし query
  $sql = 'select * from contacts where id=4'; // sql
  $stmt = $pdo->query($sql); //sql実行　ステートメント

  $result = $stmt->fetchall();

  echo '<pre>';
  var_dump($result);
  echo '</pre>';

  // ユーザー入力あり prepare, bind, execute
  $sql = 'select * from contacts where id = :id'; // 名前付きプレースホルダー
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue('id', 5, PDO::PARAM_INT); // 紐付け
  $stmt->execute();

  $result = $stmt->fetchall();

  echo '<pre>';
  var_dump($result);
  echo '</pre>';

?>