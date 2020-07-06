<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'root');
define('DB_USER', 'mydatabase');
define('DB_PASS', '');

$db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USER , DB_PASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAME'utf8mb4'");
?>
