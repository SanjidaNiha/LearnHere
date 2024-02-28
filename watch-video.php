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
   <title>watch</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'C:\xampp\htdocs\learnhere\componants\user_header.php'; ?>


<section class="watch-video">

   <div class="video-container">
      <div class="video">
         <video src="images/vid-1.mp4" controls poster="images/post-1-1.png" id="video"></video>
      </div>
      <h3 class="title">Tutorial (part 01)</h3>
      <div class="info">
         <p class="date"><i class="fas fa-calendar"></i><span>22-10-2023</span></p>
         <p class="date"><i class="fas fa-heart"></i><span>334 likes</span></p>
      </div>
      <div class="tutor">
         <img src="images/nusratmam.jpg" alt="">
         <div>
            <h3>Nusrat Jahan</h3>
            <span>developer</span>
         </div>
      </div>
      <form action="" method="post" class="flex">
         <a href="playlist.html" class="inline-btn">view playlist</a>
         <button><i class="far fa-heart"></i><span>like</span></button>
      </form>
      <p class="description">
         Our online education website should be your preferable choice 
            because of our commitment to quality content,
             user-friendly design, and a supportive learning community. 
             Join us for a superior learning experience.
      </p>
   </div>

</section>

<section class="comments">

   <h1 class="heading">5 comments</h1>

   <form action="" class="add-comment">
      <h3>add comments</h3>
      <textarea name="comment_box" placeholder="enter your comment" required maxlength="1000" cols="30" rows="10"></textarea>
      <input type="submit" value="add comment" class="inline-btn" name="add_comment">
   </form>

   <h1 class="heading">user comments</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>Sanwar</h3>
               <span>22-10-2023</span>
            </div>
         </div>
         <div class="comment-box">this is a comment form sanwar</div>
         
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Jubu</h3>
               <span>22-10-2023</span>
            </div>
         </div>
         <div class="comment-box">
            keep going!</div>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>Mehadi</h3>
               <span>22-10-2023</span>
            </div>
         </div>
         <div class="comment-box">
            thank you so much!
         </div>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Esrat</h3>
               <span>22-10-2023</span>
            </div>
         </div>
         <div class="comment-box">loved it, thanks for the tutorial!</div>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Mitu</h3>
               <span>22-10-2023</span>
            </div>
         </div>
         <div class="comment-box">thank you so much!</div>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Niha</h3>
               <span>22-10-2023</span>
            </div>
         </div>
         <div class="comment-box">thanks for the tutorial!

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