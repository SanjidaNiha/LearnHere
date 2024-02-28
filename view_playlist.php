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
   <title>Playlist Details</title>

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
   
     
     <!-- side bar section ends -->   
<section class="playlist-details">

   <h1 class="heading">playlist details</h1>

   
   <div class="row">
      <div class="thumb">
         <span></span>
         <img src="../images/thumb-1.png" alt="">
      </div>
      <div class="details">
         <h3 class="title">Html Tutorial</h3>
         <div class="date"><i class="fas fa-calendar"></i><span>11.22.22</span></div>
         <div class="description"></div>
         <form action="" method="post" class="flex-btn">
            <input type="hidden" name="playlist_id" value="">
            <a href="#" class="option-btn">update playlist</a>
            <input type="submit" value="delete playlist" class="delete-btn" onclick="return confirm('delete this playlist?');" name="delete">
         </form>
      </div>
   </div>
 

</section>

<section class="contents">

   <h1 class="heading">playlist videos</h1>

   <div class="box-container">

  
      <div class="box">
         <div class="flex">
            <div><i class="fas fa-dot-circle"></i><span>new</span></div>
            <div><i class="fas fa-calendar"></i><span></span></div>
         </div>
         <img src="../images/thumb-1.png" class="thumb" alt="">
         <h3 class="title">Html Tutorial</h3>
         <form action="" method="post" class="flex-btn">
            <input type="hidden" name="video_id" value="">
            <a href="#" class="option-btn">update</a>
            <input type="submit" value="delete" class="delete-btn" name="delete_video">
         </form>
         <a href="view_content.php" class="btn">watch video</a>
      </div>
  

   </div>

</section>


<?php 
$file_path = 'C:\xampp\htdocs\learnhere\componants\footer.php';

// Use require to include the file
require($file_path);
?>
<script src="../js/admin_script.js"></script>

</body>
</html>