<?php

@include 'config.php';

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

   <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.min.css">
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="./css/style.css" />

   <style>
      body {
         background-image: url('images/haha.jpg');
         background-repeat: no-repeat;
         background-size: cover;
         background-position: center;
         background-attachment: fixed;
         height: 100vh;
         margin: 0;
      }

   </style>
</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/logo_transparent.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Welcome to CK Handmade Flower Shop, we take pride in crafting each bouquet with love and attention to detail. Our flowers are not just arrangements; they are heartfelt gifts that convey emotions and create lasting memories. We carefully select fresh, locally sourced materials, ensuring that every creation is not only beautiful but also sustainable.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

<div class="flex">
    <div class="content">
        <h3>what we provide?</h3>
        <p>At CK Handmade Flower Shop, where creativity blossoms and every petal tells a story! We are a team of enthusiastic students who believe in the magic of flowers and their ability to brighten any occasion. From birthdays to anniversaries, graduations to "just because," our handmade floral arrangements are designed to bring joy and warmth to your loved ones.</p>
        <a href="contact.php" class="btn">contact us</a>
    </div>
</div>

        <div class="imagee">
                <video class="d-block m-auto" width="285" height="495" autoplay muted loop>
                    <source src="images/orders.mp4" type="video/mp4">
                    
                </video>
            </div>
            
        </div>

    </div>


</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/reviews-1.jpg" alt="">
            <p>Thankyou seller! sobrang cute ng design niya and affordable. will definitely recommend sa mga friends ko! </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Princess Anne</h3>
        </div>

        <div class="box">
            <img src="images/reviews-2.jpg" alt="">
            <p>Sobrang cute  po, Nagustuhan po ni mama tuwang tuwa po siya. Thank youu po! Happy Valentines po!               </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Elizabeth Ganio</h3>
        </div>

        <div class="box">
            <img src="images/reviews-3.jpg" alt="">
            <p>Simple lang pero maganda ipangregalo sa mga kaibigan, partner, at mga mahal mo sa buhay. Sobrang mura rin at mababait ang mga seller. Thank you po!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Althea De Jesus</h3>
        </div>

        <div class="box">
            <img src="images/reviews-4.jpg" alt="">
            <p>Nagustuhan ng Girlfriend ko at ang mame, tuwang tuwa sila and cute raw. Makikita mo talagang maayos ang pagkakagawa at malinis. Salamat, Boss!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Mark Mendoza</h3>
        </div>

        <div class="box">
            <img src="images/reviews-5.jpg" alt="">
            <p>brought this for my mom on Valentine's Day, Grabe ate sobrang ganda and tuwang tuwa si mom hehe naiinggit tuloy ako, sana makatanggap din next valentine's HAHAHA eme!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Christine Cruz</h3>
        </div>

        <div class="box">
            <img src="images/reviews-6.jpg" alt="">
            <p>Maganda. <br>                         </br></p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Robert Pelaez</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>