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
   <title>view content</title>

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
   

<section class="view-content">

   
   <div class="container">
      <video src="../images/vid-1.mp4" class="video">Tutorial</video>
      <div class="date"><i class="fas fa-calendar"></i><span>21.22.11</span></div>
      <h3 class="title">Html Tutorial</h3>
      <div class="flex">
         <div><i class="fas fa-heart"></i><span>11</span></div>
         <div><i class="fas fa-comment"></i><span>2</span></div>
      </div>
      <div class="description">Get the full tutorial and experience smooth learning</div>
      <form action="" method="post">
         <div class="flex-btn">
            <input type="hidden" name="video_id">
            <a href="#" class="option-btn">update</a>
            <input type="submit" value="delete" class="delete-btn" name="delete_video">
         </div>
      </form>
   </div>
  
</section>

<section class="comments">

   <h1 class="heading">user comments</h1>

   
   <div class="show-comments">
      
      <div class="box">
         <div class="user">
            <img src="../images/pic-2.jpg" alt="">
            <div>
               <h3>Sanjida Niha</h3>
               <span>Student</span>
            </div>
         </div>
         <p class="text">Nice tutorial</p>
         <form action="" method="post" class="flex-btn">
            <input type="hidden" name="comment_id" value="">
            <button type="submit" name="delete_comment" class="inline-delete-btn">delete comment</button>
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