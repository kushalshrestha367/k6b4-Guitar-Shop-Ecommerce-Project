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
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/save.png" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Welcome to k6b4 Guitar Shop, your ultimate destination for all things guitar and music.
            we have proudly served musicians, from beginners to professionals, for 3 years and counting.</p>
            <h3>Our Passion for Music:</h3>
            <p>At k6b4 Guitar Shop, our journey is driven by an unbridled passion for music. We understand that a guitar isn't just an instrument; 
               it's an extension of the artist's soul. Whether you're strumming your first chords or performing on stage,  we're here to be 
               your musical partner every step of the way.</p>
               <h3>A Wide Array of Instruments:</h3>
               <p>Step into our store, and you'll find yourself immersed in a world of guitars. We offer an extensive and carefully curated selection of acoustic, electric, classical, and bass guitars, each handpicked for its quality and craftsmanship. Our range 
                  includes instruments from renowned brands and emerging artisans, ensuring you have the best options at your fingertips.</p>
                  <h3>Quality and Value:</h3>
                  <p>Quality is our top priority. Every guitar in our inventory undergoes rigorous inspection to meet our high standards. We believe that exceptional instruments
                      should be accessible to all, which is why we strive to offer competitive pricing without compromising on quality.</p>
                        <h3>Visit Us Today:</h3>
                        <p>We invite you to visit k6b4 Guitar Shop and experience our dedication to music firsthand. Whether you're a seasoned musician or just starting your musical journey, we're here to support you. Join our community of music enthusiasts, and let's create beautiful music together.
                               <br><br>
                              Thank you for choosing k6b4 Guitar Shop as your trusted partner on your musical adventure. 
                              We look forward to serving you and helping you make music that moves the soul.</p>
                       
             <a href="contact.php" class="btn">Contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/Kishore.jpg" alt="">
         <p>"This guitar shop is a music lover's paradise. The store is well-organized with a wide range of guitars for all skill levels and musical tastes. They offer a variety of accessories and even host music workshops.
             Overall, it's a fantastic place for musicians and a must-visit for anyone in the area."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kishore parajuli</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/kushal.jpg" alt="">
         <p>"This guitar shop is a hidden gem! The moment I stepped inside, I was greeted by a vast array of guitars and a warm, welcoming atmosphere. The staff's knowledge and friendliness made my visit truly enjoyable.
             They helped me find the perfect guitar, and their selection of accessories and gear was outstanding."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kushal Shrestha</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/Bibas.jpg" alt="">
         <p>"I've been to many guitar shops, but this one stands out for its exceptional customer service. The staff went above and beyond to assist me in choosing the right guitar, and their expertise was invaluable.
             The instruments were in top-notch condition, and the shop's overall ambiance was music to my ears."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Bibas Basnet</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/Amit.jpg" alt="">
         <p>"What a fantastic place for musicians! The staff here not only helped me find my dream guitar but also introduced me to a community of fellow musicians. Their workshops and events are both fun and educational. 
            I can't recommend this guitar shop enough for anyone looking to enhance their musical journey."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Amit Pradhan</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/kiran.jpg" alt="">
         <p>"As a seasoned guitarist, I'm quite discerning when it comes to guitar shops.The attention to detail in instrument maintenance and setup was impeccable. The staff's passion for music shone through, and their diverse selection of guitars and gear left me spoiled for choice. 
            It's a must-visit for anyone serious about their craft."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kiran Chaudhary</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/saroj.jpg" alt="">
         <p>"I couldn't be happier with my experience at this guitar shop. The quality of the guitars and their meticulous setup was impressive. They had a fantastic variety of options for every budget, and I appreciate that they catered to both beginners and experienced players. 
            This is now my go-to place for all things guitar-related."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Saroj Koirala</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>