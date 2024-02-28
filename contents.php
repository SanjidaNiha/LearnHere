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
   <title>Playlists</title>

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
   
<section class="playlists">

   <h1 class="heading">Our contents</h1>

   <div class="box-container">
   
      <div class="box" style="text-align: center;">
         <h3 class="title" style="margin-bottom: .5rem;">Create new content</h3>
         <a href="#" class="btn">Add content</a>
      </div>

     
      <div class="box">
         <div class="flex">
            <div><i class="fas fa-circle-dot" ></i><span></span></div>
            <div><i class="fas fa-calendar"></i><span></span></div>
         </div>
         <div class="thumb">
            <img src="../images/thumb-1.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">HTML Tutorial</h3>
         <p class="description">Welcome to full Html tutorial</p>
         <form action="" method="post" class="flex-btn">
            <input type="hidden" name="playlist_id" value="">
            <a href="#" class="option-btn">update</a>
            <input type="submit" value="delete" class="delete-btn" onclick="return confirm('delete this playlist?');" name="delete">
         </form>
         <a href="view_playlist.php" class="btn">view contents</a>
      </div>
      

   </div>

</section>

<footer class="footer">

    &copy; copyright @ 2023 by <span>Sanjida Shahrin Niha</span> | all rights reserved ||
 
 </footer>
<script src="../js/admin_script.js"></script>



</body>
</html>