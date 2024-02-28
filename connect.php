<?php

$db_name = 'mysql:host=localhost;dbname=learnhere';
$user_name = 'root';
$user_password = '';

try {
   $conn = new PDO($db_name, $user_name, $user_password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
   die("Connection failed: " . $e->getMessage());
}


$file_path = 'C:\xampp\htdocs\learnhere\functions.php';

// Use require to include the file
require_once($file_path);
?>

