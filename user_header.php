<?php
// If $message is set, it proceeds to the next steps
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <section class="flex">

      <a href="home.php" class="logo">LearnHere</a>

      <form action="courses.php" method="post" class="search-form">
         <input type="text" name="search" placeholder="search here..." required maxlength="100">
         <button type="submit" class="fas fa-search" name="search_btn"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <img src="uploaded_files/<?= $fetch_profile['image']; ?>" alt="image" style="width: 150px; height: auto;">
         
         <!-- undefined array key-->
         <h3><?= $fetch_profile['name']; ?></h3>
         <a href="profile.php" class="btn">view profile</a>
         <div class="flex-btn">
         <a href="C:/xampp/htdocs/learnhere/componants/user_logout.php/" onclick="return confirm('Logout from this website?');" class="delete-btn">Logout</a>

            <a href="register.php" class="option-btn">register</a>
         </div>

         <?php
            } else {
         ?>
         <h3>please login or register</h3>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
         <?php
            }
         ?>
      </div>

   </section>

</header>

<!-- header section ends -->

<!-- side bar section starts  -->

<div class="side-bar">

   <div class="close-side-bar">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <?php
         $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
         $select_profile->execute([$user_id]);
         if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <img src="uploaded_files/<?= $fetch_profile['image']; ?>" alt="" style="width: 150px; height: auto;">
         <h3><?= $fetch_profile['name']; ?></h3>
         <span>Student</span>
         <a href="profile.php" class="btn">view profile</a>
         <?php
            } else {
         ?>
         <h3>please login or register</h3>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
         <?php
            }
         ?>
      </div>

      <nav class="navbar">
         <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
         <a href="about.php"><i class="fas fa-question"></i><span>About us</span></a>
         <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>Our Courses</span></a>
         <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>Our Teachers</span></a>
         <a href="contact.php"><i class="fas fa-headset"></i><span>Contact us</span></a>
      </nav>

   </div>

</div>
