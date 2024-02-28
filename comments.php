<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$file_path = 'C:\xampp\htdocs\learnhere\componants\connect.php';

// Use require to include the file
require($file_path);

if(isset($_COOKIE['tutor_id'])){
   $tutor_id = $_COOKIE['tutor_id'];
}else{
   $tutor_id = '';
   header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>
   
     
<?php 
   $file_path = 'C:\xampp\htdocs\learnhere\componants\admin_header.php';

   // Use require to include the file
   require($file_path);
   ?>

<section class="comments">

   <h1 class="heading">user comments</h1>

   
   <div class="show-comments">

      <div class="box">
         <div class="content"><span</span><p></p><a href="view_content.php">view content</a></div>
         <p class="text">Thanks for the tutorial</p>
         <form action="" method="post">
            <input type="hidden" name="comment_id" value="">
            <button type="submit" name="delete_comment" class="inline-delete-btn" onclick="return confirm('delete this comment?');">delete comment</button>
         </form>
      </div>
      <div class="box">
         <div class="content"><span</span><p></p><a href="view_content.php">view content</a></div>
         <p class="text">Excellent!</p>
         <form action="" method="post">
            <input type="hidden" name="comment_id" value="">
            <button type="submit" name="delete_comment" class="inline-delete-btn" onclick="return confirm('delete this comment?');">delete comment</button>
         </form>
      </div>
      
      </div>
   
</section>














<footer class="footer">

    &copy; copyright @ 2023 by <span>Sanjida Shahrin Niha</span> | all rights reserved ||
 
 </footer>
<script src="../js/admin_script.js"></script>

</body>
</html>