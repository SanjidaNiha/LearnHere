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
   <title>profile</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'C:\xampp\htdocs\learnhere\componants\user_header.php'; ?>


<section class="user-profile">

   <h1 class="heading">Your profile</h1>

   <div class="info">

      <div class="user">
         <img src="images/pic-2.jpg" alt="">
         <h3>Sanjida Niha</h3>
         <p>Student</p>
         <a href="update.html" class="inline-btn">update profile</a>
      </div>
   
      <div class="box-container">
   
         <div class="box">
            <div class="flex">
               <i class="fas fa-bookmark"></i>
               <div>
                  <span>4</span>
                  <p>saved playlist</p>
               </div>
            </div>
            <a href="#" class="inline-btn">view playlists</a>
         </div>
   
         <div class="box">
            <div class="flex">
               <i class="fas fa-heart"></i>
               <div>
                  <span>33</span>
                  <p>videos liked</p>
               </div>
            </div>
            <a href="#" class="inline-btn">view liked</a>
         </div>
   
         <div class="box">
            <div class="flex">
               <i class="fas fa-comment"></i>
               <div>
                  <span>12</span>
                  <p>videos comments</p>
               </div>
            </div>
            <a href="#" class="inline-btn">view comments</a>
         </div>
   
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