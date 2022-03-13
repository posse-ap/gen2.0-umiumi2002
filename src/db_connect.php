<?php
$dsn = 'mysql:host=db;dbname=ph2_webapp;charset=utf8mb4;';
$user = 'miu';
$password = "pass";

try {
  $db = new PDO($dsn, $user, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo '接続成功';
} catch (PDOException $e) {
  echo '接続失敗: ' . $e->getMessage();
  exit();
}



// <?php

// try {
//     $pdo = new PDO (
//     //DSN data source name
//     'mysql:host=db;dbname=ph2_webapp;charset=utf8mb4',
//     //user
//     'miu',
//     //password
//     'pass',
//     [
//       PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//       PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//     ]
// );
// } catch  (PDOException $e) {
//   echo $e ->getMessage() . PHP_EOL;
//   exit; 
// }

// ?>