<?php
$db_name = 'mysql:host=localhost:666;dbname=web-intereaccion';
// $db_name = 'mysql:host=localhost;dbname=u875102609_1';
$user_name = 'root';
// $user_name = 'u875102609_1';
$user_password = '';
// $user_password = 'unambaA1_';
$conn = new PDO($db_name, $user_name, $user_password);
