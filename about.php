<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
   <style>
   .mis{
      
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 60%;
  
   }
   .te{
      text-align : center;
      font-size : 35px;
      color:rgb(6, 186, 0); 
   }
   p{
      text-align : center; 
      font-size : 20px;
   }
   h1{
      text-align : center; 
      font-size : 30px;
      color:rgb(6, 186, 0); 
   }
   m{
      padding: 15x;
   }
      </style>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">Home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>We deliver fast and reliable service, ensuring that your food arrives fresh and on time, every time.Our website is user-friendly, making it quick and easy to place your order without any hassle.We partner with trusted restaurants and chefs to bring you the highest quality meals, prepared just for you.</p>
         <a href="menu.php" class="btn">our menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>choose order</h3>
         <p>Browse through our extensive menu and select the dishes you’re craving with just a few clicks.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>Super fast delivery</h3>
         <p>Faster than your cravings can blink. Experience the super-fast delivery and get fresh food.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy food</h3>
         <p>Sit back, relax, and enjoy your delicious meal, delivered fresh and hot right to your door.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!--mission section start --->
<div class="m">
<div class="mis">
<img src="images/Mission.png" class="mis">
</div>
<div class="te"> Mission & Vision </div>
<h1>1.</h1>
<p>Making online restaurant service easier.</p>
<h1>2.</h1>
<p>Making restaurants available to new customers
and markets through an online platform.</p>
<h1>3.</h1>
<p>To achieve the restaurant's own brand value.</p>
<h1>4.</h1>
<p>Creating a new horizon for the online restaurant
business and making online ordering easier.</p>

</div>
<!--mission section end --->

<!-- reviews section starts  -->
<br>
<br>
<br>
<section class="reviews">

   <h1 class="title">customer's reivews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <p>"The food arrived on time and was piping hot! The ordering process was simple, and I loved the variety of options available. Highly recommend!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>John Smith</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <p>I’ve tried many food delivery services, but this one stands out. The quality is fantastic, and my meal was exactly as I ordered. Definitely my go-to for ordering food now!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Sarah Johnson</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <p>"Fast, reliable, and delicious! The website is so easy to use, and my meal was delivered in no time. I’ll be ordering again for sure!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Michael Davis</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <p>"Great experience! I was able to order my favorite dishes with ease, and everything was delivered quickly and fresh. Keep up the good work!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Emily Wilson</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <p>"I love how affordable the meals are without sacrificing quality. The food was delicious, and the delivery was super fast. I’m a regular now!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>David Brown</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <p>"Fantastic experience! The food was fresh and flavorful, and the prices are really reasonable. I’ll definitely order again."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Jessica Lee</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>