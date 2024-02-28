<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$file_path = 'C:\xampp\htdocs\learnhere\componants\connect.php';

// Use require to include the file
require($file_path);

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>tutor profile</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'C:\xampp\htdocs\learnhere\componants\user_header.php'; ?>


<section class="teacher-profile">

   <h1 class="heading">profile details</h1>

   <div class="details">
      <div class="tutor">
         <img src="images/nusratmam.jpg" alt="">
         <h3>Nusrat Jahan</h3>
         <span>developer</span>
      </div>
      <div class="flex">
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <p>total comments : <span>52</span></p>
      </div>
   </div>

</section>

<section class="courses">

   <h1 class="heading">Our courses</h1>

   <div class="box-container">

      <div class="box">
         <div class="thumb">
            <img src="images/thumb-1.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">HTML tutorial</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
        
         <div class="thumb">
            <img src="images/thumb-3.jpg" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Primary Treatment</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         
         <div class="thumb">
            <img src="images/thumb-4.jpg" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Management ideas</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
        
         <div class="thumb">
            <img src="images/thumb-5.jpg" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Business ideas</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>


   </div>

</section>


<footer class="footer">

   &copy; copyright @ 2023 by <span>Sanjida Shahrin Niha</span> | all rights reserved ||

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>