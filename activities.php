<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
   <link rel="stylesheet" href="style.css">
   <title>Activities</title>
</head>

<body>
   <?php include('header.php'); ?>

   <section class="gallery" id="gallery">

      <h1 class="heading">activities</h1>

      <div class="swiper gallery-slider">

         <div class="swiper-wrapper">
            <div class="swiper-slide slide">
               <h2 class="sub-heading">birthday parties</h2>
               <img src="./images/birthday_party.jpg" alt="Birthday Party">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="sub-heading">glass bottom boat rides</h2>
               <img src="images/galss-bottom-boat.jpg" alt="Glass Boat">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="sub-heading">Office year end parties</h2>
               <img src="images/Office year-end parties.jpg" alt="Office End Year">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="sub-heading">scuba driving</h2>
               <img src="images/scuba diving.jpg" alt="Scuba Drving">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="sub-heading">snorkeling</h2>
               <img src="images/snorkeling.jpg" alt="snorkeling">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="sub-heading">surfing</h2>
               <img src="images/surfing.jpg" alt="Surfing">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

         </div>

      </div>

   </section>

   <?php include('footer.php'); ?>

   <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
   <script src="./js/script.js"></script>
</body>

</html>