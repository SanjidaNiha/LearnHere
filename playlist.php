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
   <title>video playlist</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'C:\xampp\htdocs\learnhere\componants\user_header.php'; ?>


<section class="playlist-details">

   <h1 class="heading">Playlist details</h1>

   <div class="row">

      <div class="column">
         <form action="" method="post" class="save-playlist">
            <button type="submit"><i class="far fa-bookmark"></i> <span>save playlist</span></button>
         </form>
   
         <div class="thumb">
            <img src="images/thumb-1.png" alt="">
            <span>10 videos</span>
         </div>
      </div>
      <div class="column">
         <div class="tutor">
            <img src="images/nusratmam.jpg" alt="">
            <div>
               <h3>Nusrat Jahan</h3>
               <span>26-10-2023</span>
            </div>
         </div>
   
         <div class="details">
            <h3>Tutorial</h3>
            <p>Our online education website should be your preferable choice 
               because of our commitment to quality content,
                user-friendly design, and a supportive learning community. 
                Join us for a superior learning experience.</p>
            <a href="teacher_profile.php" class="inline-btn">view profile</a>
         </div>
      </div>
   </div>

</section>

<section class="playlist-videos">

   <h1 class="heading">playlist videos</h1>

   <div class="box-container">

      <a class="box" href="watch-video.php">
         <i class="fas fa-play"></i>
         <img src="images/post-1-1.png" alt="">
         <h3>HTML tutorial (part 01)</h3>
      </a>

      <a class="box" href="watch-video.php">
         <i class="fas fa-play"></i>
         <img src="images/post-1-2.png" alt="">
         <h3>HTML tutorial (part 02)</h3>
      </a>

      <a class="box" href="watch-video.php">
         <i class="fas fa-play"></i>
         <img src="images/post-1-3.png" alt="">
         <h3>Html tutorial(part 03)</h3>
      </a>

      <a class="box" href="watch-video.php">
         <i class="fas fa-play"></i>
         <img src="images/post-1-4.png" alt="">
         <h3>Html tutorial(part 04)</h3>
      </a>

      <a class="box" href="watch-video.php">
         <i class="fas fa-play"></i>
         <img src="images/post-1-5.png" alt="">
         <h3>Html tutorial(part 05)</h3>
      </a>

      <a class="box" href="watch-video.php">
         <i class="fas fa-play"></i>
         <img src="images/post-1-6.png" alt="">
         <h3>Html tutorial(part 06)</h3>
      </a>

   </div>

</section>


<footer class="footer">

   &copy; copyright @ 2023 by <span>Sanjida Shahrin Niha</span> | all rights reserved ||

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>