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
   <title>courses</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>


<?php include 'C:\xampp\htdocs\learnhere\componants\user_header.php'; ?>


   <section class="courses">

      <h1 class="heading">Our courses</h1>
   
      <div class="box-container">
   
         <div class="box">
            <div class="tutor">
               <img src="images/nusratmam.jpg" alt="">
               <div class="info">
                  <h3>Nusrat Jahan</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/thumb-1.png" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">HTML tutorial</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
         </div>
   
         <div class="box">
            <div class="tutor">
               <img src="images/tazeenmam.jpg" alt="">
               <div class="info">
                  <h3>Tazeen Tasneem</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/thumb-2.jpg" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">Artificial Intelligence</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
         </div>
   
         <div class="box">
            <div class="tutor">
               <img src="images/tabeenmam.jpg" alt="">
               <div class="info">
                  <h3>Tabeen Tasneem</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/thumb-3.jpg" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">Java programming</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
         </div>
   
         <div class="box">
            <div class="tutor">
               <img src="images/raziamam.jpg" alt="">
               <div class="info">
                  <h3>Razia Sultana</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/thumb-4.jpg" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">Image Processing</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
         </div>
   
         <div class="box">
            <div class="tutor">
               <img src="images/tasniamam.jpg" alt="">
               <div class="info">
                  <h3>Tasnia Muna</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/thumb-5.jpg" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">Discrete Math</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
         </div>
   
         <div class="box">
            <div class="tutor">
               <img src="images/balamam.jpg" alt="">
               <div class="info">
                  <h3>Moushumi Bala</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/thumb-6.jpg" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">Operating system</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
         </div>
   
         <div class="box">
            <div class="tutor">
               <img src="images/shitumam.jpg" alt="">
               <div class="info">
                  <h3>Tanjim Shitu</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/thumb-4.jpg" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">Database management</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
         </div>
   
         <div class="box">
            <div class="tutor">
               <img src="images/amritosir.jpg" alt="">
               <div class="info">
                  <h3>Amrito Biswas</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/thumb-5.jpg" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">Microprocessor</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
         </div>
   
         <div class="box">
            <div class="tutor">
               <img src="images/gulshanmam.jpg" alt="">
               <div class="info">
                  <h3>Gulshan Khatun</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/thumb-6.jpg" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">Calculus</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
         </div>
   
      </div>
   
      <div class="more-btn">
         <a href="courses.html" class="inline-option-btn">view all courses</a>
      </div>
   
   </section>
<footer class="footer">

   &copy; copyright @ 2023 by <span>Sanjida Shahrin Niha</span> | all rights reserved ||

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>