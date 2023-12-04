<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
    <title>Southern Pearl</title>
</head>

<body>
    <?php include('header.php'); ?>



    <!--Home-->

    <section class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url(./images/snorkelling-hikkaduwa.jpg) no-repeat;">
                    <div class="content">
                        <h3>Dive into vibrant reefs, encounter marine wonders—snorkel for unforgettable exploration!</h3>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(./images/surfing.jpg) no-repeat;">
                    <div class="content">
                        <h3>Surf the waves, master balance, and embrace ocean exhilaration!</h3>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(./images/home-slide3.jpg) no-repeat;">
                    <div class="content">
                        <h3>Luxury awaits – indulge in comfort, exceptional service, and relaxation.</h3>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(./images/hikkaduwa.jpg) no-repeat;">
                    <div class="content">
                        <h3>Sandy shores, azure waves—escape to a beach paradise of relaxation and joy.</h3>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(./images/galss-bottom-boat.jpg) no-repeat;">
                    <div class="content">
                        <h3>Explore marine life through glass-bottom boat—voyage into underwater wonders! </h3>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- end -->



    <!-- footer -->
    <?php include('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>