<?php

$file_path = 'C:\xampp\htdocs\learnhere\componants\connect.php';

// Use require to include the file
require($file_path);


   setcookie('user_id', '', time() - 1, '/');

   header('location:C:/xampp/htdocs/learnhere/home.php');



?>
<!--<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>logout</title>
</head>
<body>
   <h3>Logged Out</h3>
</body>
</html>-->