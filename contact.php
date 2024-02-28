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
   <title>contact us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>


<?php include 'C:\xampp\htdocs\learnhere\componants\user_header.php'; ?>

<section class="contact">

   <div class="row">

      <div class="image">
         <img src="images/contact.jpg" alt="">
      </div>

      <form action="" method="post">
         <h3>Let's get in touch</h3>
         <input type="text" placeholder="Your name" name="name" required maxlength="50" class="box">
         <input type="email" placeholder="Your email" name="email" required maxlength="50" class="box">
         <input type="number" placeholder="Your number" name="number" required maxlength="50" class="box">
         <textarea name="msg" class="box" placeholder="Your message" required maxlength="1000" cols="30" rows="10"></textarea>
         <input type="submit" value="send message" class="inline-btn" name="submit">
      </form>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <a href="tel:01866980380">01866980380</a>
         <a href="tel:01537415991">01537415991</a>

      </div>
      
      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <a href="mailto:sanjida15916@gmail.com">sanjida15916@gmail.come</a>
         <a href="mailto:niharesponding@gmail.com">niharesponding@gmail.come</a>
      </div>

      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>office address</h3>
         <a href="#">Tabalchari, Rangamati, Chittagong, Bangladesh.</a>
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