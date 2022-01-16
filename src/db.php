<?php

try {
    $pdo = new PDO (
    //DSN data source name
    'mysql:host=db;dbname=ph2_quizy;charset=utf8mb4',
    //user
    'miu',
    //password
    'pass',
    [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]
);
} catch  (PDOException $e) {
  echo $e ->getMessage() . PHP_EOL;
  exit; 
}