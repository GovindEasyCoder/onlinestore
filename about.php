<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3 style="color: black; margin-top:-90px;">about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>We provide 100% authentic cloths to our customer.</p>
         <p></p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>


<section class="authors">

   <h1 class="title">Website Developer Team</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpeg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/profile.php?id=100025841280507" target="blank" class="fab fa-facebook-f"></a>
            <a href="https://instagram.com/sarcastic_sandy_0_0?igshid=YmMyMTA2M2Y=" target="blank" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/sandeep-kumar-488a1b222" target="blank" class="fab fa-linkedin"></a>
         </div>
         <h3>Sandeep Kumar</h3>
         <h3>Co-Founder</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpeg" style="height:400px" alt="">
         <div class="share">
            <a href="https://www.facebook.com/profile.php?id=100069468735448" target="blank" class="fab fa-facebook-f"></a>
            <a href="https://instagram.com/govindharsh6203?igshid=YmMyMTA2M2Y=" target="blank" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/govind-jha-15b154245/" target="blank" class="fab fa-linkedin"></a>
         </div>
         <h3>Govind Kumar Jha</h3>
         <h3>CEO & Founder </h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpeg" alt="">
         <div class="share">
            <a href="https://instagram.com/alexander____adi?igshid=YmMyMTA2M2Y=" target="blank"  class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/aditya-maurya-25ab65240" target="blank"  class="fab fa-linkedin"></a>
         </div>
         <h3>Aditya Maurya</h3>
         <h3>Co-Founder </h3>
      </div>

 
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>